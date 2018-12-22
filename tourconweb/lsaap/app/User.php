<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password', 'account_money'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'remaining_money', 'checkIn_event', 'checkIn_camp', 'checkOut_event', 'checkOut_camp'
    ];

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function ticket(){
        return $this->hasOne('App\Ticket');
    }

    public function campingspots(){
        return $this->belongsToMany('App\Campingspot');
    }
}
