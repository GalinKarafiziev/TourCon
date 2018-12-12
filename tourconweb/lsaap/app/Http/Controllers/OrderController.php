<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Ticket;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->save();
        return redirect('/orders');
    }

    public function show($id)
    {

        $order = Order::find($id);

        return view('orders.show')->with('order', $order);
    }

    public function create(){
        return view('orders.create');
    }

    public function index(){
        $order_id = orders()->id;
        $order = Order::find($order_id);
        return view('home')->with('orders', $user->orders);
    }




}
