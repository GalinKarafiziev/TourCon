<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\User;

class Ticket extends Model
{
    protected $fillable = ['user_id', 'price'];
    protected $table = 'tickets';
    protected $attributes = ['price' => 55];
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function order(){
        return $this->hasOne('App\Ticket');
    }
}
