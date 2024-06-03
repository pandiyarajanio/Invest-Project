<?php

// AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Support\Facades\Bcrypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin; 
use App\Models\Useraccountdetails;
use App\Models\Usertransition;
use DB;



class AdminController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLogin()
    {
        return view('admin.adminlogin');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended(route('dashboard'))->with('success', 'Login successful');
        } else {
            return back()->withErrors(['error' => 'Incorrect email or password']);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function userlist(){
        $users = User::all();
        $userDetails = Useraccountdetails::where('id', Auth::id())->first();
    
        return view('admin.userlist', compact('users', 'userDetails'));
    }


    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'new_password_confirmation' => 'required',
        ]);
    
        $admin = Auth::guard('admin')->user();
    
        if (!Hash::check($request->input('current_password'), $admin->password)) {
            return back()->withErrors('Current password is incorrect');
        }
    
        $admin->password = Hash::make($request->input('new_password'));
        $admin->save();
    
        return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully');
    }

    public function showchangepassword(){
        return view('admin.change-password');
    }

    public function Investment()
    {
        $users = User::all();
        $usertransitions = Usertransition::all();
        $user = Auth::user(); 
        return view('admin.Investment', compact('users', 'usertransitions', 'user'));
    }

    public function Invoice(Request $request)
    {
        $userId = $request->route('userId') ?: 2; 
        $user = User::find($userId); 
        $userTransitions = Usertransition::where('userid', $userId)->get();
        return view('admin.Invoice', compact('user', 'userTransitions'));
    }

    public function profit()
    {
        $profitPercentage = session('profitPercentage', 5); 
        $usertransitions = Usertransition::all();
        
        $data = [];
        $totalInvestmentAmount = 0;
        $totalProfitAmount = 0;
        
        foreach ($usertransitions as $usertransition) {
            $totalInvestmentAmount += $usertransition->off_amount;
        }
        
        $data[] = [
            'date' => date('Y-m-d'),
            'total_investment_amount' => $totalInvestmentAmount,
            'profit_percentage' => number_format($profitPercentage, 2). '%',
            'total_profit_amount' => ($totalInvestmentAmount / 100) * $profitPercentage,
            'next_amount' => $totalInvestmentAmount + (($totalInvestmentAmount / 100) * $profitPercentage),
        ];
        
        $nextAmount = $totalInvestmentAmount + (($totalInvestmentAmount / 100) * $profitPercentage);
        
        for ($i = 1; $i < 0; $i++) { 
            $totalInvestmentAmount = $nextAmount;
            $totalProfitAmount = ($totalInvestmentAmount / 100) * $profitPercentage;
            $nextAmount = $totalInvestmentAmount + $totalProfitAmount;
            
            $data[] = [
                'date' => date('Y-m-d', strtotime('+'.$i.' days')),
                'total_investment_amount' => $totalInvestmentAmount,
                'profit_percentage' => number_format($profitPercentage, 2). '%',
                'total_profit_amount' => $totalProfitAmount,
                'next_amount' => $nextAmount,
            ];
        }
        
        return view('admin.profittable', compact('data', 'profitPercentage'));
    }
    
    public function updateProfitPercentage(Request $request)
    {
        $profitPercentage = $request->input('profit_percentage');
        session()->put('profitPercentage', $profitPercentage);
    
        return redirect()->route('profit');
    }
    
}
    