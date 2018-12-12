<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Campingspot;

class CampingspotController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,['*']);
        $order_id = orders()->id;
        $camping = new Campingspot;
        $order= Order::find($order_id);
        $camping->orders()->attach($order);

        return 'Success';
    }
}
