<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Useraccountdetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Support\Facades\Session;
use Validator;

class ControllerUseraccountdetails extends Controller
{
    public function eprofile (){
        return view ('Client.eprofile');
    }

    public function updateCityForUser(Request $request)
    {
        $userdetails = new Useraccountdetails();
        $userdetails->city = $request->city;
        $userdetails->pannumber = $request->pannumber;
    
        if ($request->city == '' || $request->pannumber == '') {
            return back()->with('error', 'City and PAN number are required');
        }
    
        if (!is_string($request->city) ||!is_string($request->pannumber)) {
            return back()->with('error', 'City and PAN number must be strings');
        }
    
        if ($userdetails->save()) {
            return redirect()->route('ebank')->with('success', 'City and PAN number updated successfully');
        } else {
            return back()->with('error', 'Failed to update city and PAN number');
        }
    }

    public function ebank (){
        return view ('Client.ebank');
    }

    public function updateBankDetails(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => 'required|exists:users,id',
            'Account_type' => 'required|string',
            'holder_name' => 'required|string',
            'Bank_Name' => 'required|string',
            'Account_Number' => 'required|string',
            'Branch' => 'required|string',
            'IFSC_Code' => 'required|string',
            'bank_city' => 'required|string',
            'Cheque_Leaf' => 'required|file|mimes:jpg,jpeg,png',
        ]);
        
        $userDetails = Useraccountdetails::find($request->input('id'));
        
        if (!$userDetails) {
            return redirect()->route('ebank')->with('error', 'User account details not found.');
        }
        
        $data = [
            'Account_type' => $request->input('Account_type'),
            'holder_name' => $request->input('holder_name'),
            'Bank_Name' => $request->input('Bank_Name'),
            'Account_Number' => $request->input('Account_Number'),
            'Branch' => $request->input('Branch'),
            'IFSC_Code' => $request->input('IFSC_Code'),
            'bank_city' => $request->input('bank_city'),
        ];

        if ($request->hasFile('Cheque_Leaf')) {
            $chequeLeaf = $request->file('Cheque_Leaf');
            $chequeLeafName = time(). '.'. $chequeLeaf->getClientOriginalExtension();
            $chequeLeaf->storeAs('public/bankbook', $chequeLeafName);
            $data['Cheque_Leaf'] = $chequeLeafName;
        }

        $userDetails->update($data);

        return redirect()->route('profile')->with('success', 'Your bank details have been updated successfully!');
    }
    
}




