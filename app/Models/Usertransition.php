<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Usertransition extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'off_modeofpayment',
        'off_upi',
        'off_holdername',
        'off_typeofaccount', 
        'off_bankname',
        'off_accountnumber',
        'off_branchname',
        'off_ifsc',
        'off_city',
        'off_amount',
        'cheque_leaf',
        'profit_amount',
        'status',
    ];
    
    protected $attributes = [
        'off_upi' => null,
        'off_typeofaccount' => 'Savings', 
        'off_modeofpayment' => null,
        'off_holdername' => null,
        'off_bankname' => null,
        'off_accountnumber' => null,
        'off_branchname' => null,
        'off_ifsc' => null,
        'off_city' => null,
        'off_amount' => null,
        'cheque_leaf' => null,
        'profit_amount' => 0.0, 
        'status' => 'Activate',
    ];

    protected $primaryKey = 'userid';

    // In your Usertransition model

    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'id');
    }

}