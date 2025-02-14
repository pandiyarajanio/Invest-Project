<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Usertransition;
use App\Models\Useraccountdetails;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userid',
        'name',
        'email',
        'profile_image',
        'phonenumber',
        'password',
        'status',
    ];
    
    protected $attributes = [
        'userid' => 'SB240001',
        'status' => 'Activate',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     * 
     * 
     * 
     */
    protected $guarded = [];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
       

    public function accountDetails() {
        return $this->hasOne(Useraccountdetails::class, 'userid');
    }
    
    
}
