<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Useraccountdetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'Account_type',
        'holder_name',
        'Bank_Name',
        'Account_Number',
        'Branch',
        'bank_city',
        'IFSC_Code',
        'Cheque_Leaf',
        'UserImage',
        'city',
        'pannumber',
        'Status',
    ];
    
    protected $attributes = [
        'userid' => 'SB240001',
        'status' => 'Activate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
