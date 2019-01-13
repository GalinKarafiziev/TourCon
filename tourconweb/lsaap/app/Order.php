<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $primaryKey = 'id';
    public $timestamps = true;


    protected $fillable = ['user_id', 'ticket_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function ticket(){
        return $this->belongsTo('App\Ticket');
    }

    public function campingspots(){
        return $this->belongsToMany('App\Campingspot');
    }



}
