<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertransition;
use Illuminate\Support\Facades\Auth;

class Controllerusertransition extends Controller
{
    public function deposit(){
        return view('Client.deposit');
    }

    public function Usertransitiondata(Request $request)
{ 
    $usertransition = new Usertransition();
    $usertransition->off_modeofpayment = $request->has('off_modeofpayment') ? $request->off_modeofpayment : null;
    $usertransition->off_upi = $request->has('off_upi') ? $request->off_upi : null;
    $usertransition->off_holdername = $request->has('off_holdername') ? $request->off_holdername : null;
    $usertransition->off_typeofaccount = $request->has('off_typeofaccount') ? $request->off_typeofaccount : null;
    $usertransition->off_bankname = $request->has('off_bankname') ? $request->off_bankname : null;
    $usertransition->off_accountnumber = $request->has('off_accountnumber') ? $request->off_accountnumber : null;
    $usertransition->off_branchname = $request->has('off_branchname') ? $request->off_branchname : null;
    $usertransition->off_ifsc = $request->has('off_ifsc') ? $request->off_ifsc : null;
    $usertransition->off_city = $request->has('off_city') ? $request->off_city : null;
    $usertransition->off_amount = $request->has('off_amount') ? $request->off_amount : null;
    
    if ($request->hasFile('off_image')) {
        $chequeLeaf = $request->file('off_image');
        $chequeLeafName = time() . '.' . $chequeLeaf->getClientOriginalExtension();
        $chequeLeaf->storeAs('public/images', $chequeLeafName);
        $usertransition->cheque_leaf = $chequeLeafName;
    }
    

    $usertransition->save();
    return back()->with('success', 'Registration successful');
}
    
}
