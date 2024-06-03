<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertransition;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
 
class HomeController extends Controller
{
  public function index()
  {
      $users = User::all();
      $user = auth()->user(); 
      $usertransitions = Usertransition::where('session', $user->session)->get(); 
      $usertransitionsByUser = $usertransitions->groupBy('session'); 
  
      if ($usertransitionsByUser->isEmpty()) {
          return view('Client.login');
      }
      return view('Client.home', compact('users', 'usertransitionsByUser', 'user'));
  }
  
}                                        


