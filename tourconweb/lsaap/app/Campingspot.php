<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campingspot extends Model
{
    protected $table = 'campingspots';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
