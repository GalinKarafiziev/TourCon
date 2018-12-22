<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campingspot extends Model
{
    protected $table = 'campingspots';
    public $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = ['id','isAvailable', 'spotsremaining', 'totalprice', 'price'];

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'campingsport_order');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
