<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\StoreOrder;
use App\Order;
use App\User;
use App\Http\Controllers\OrderController;
use Auth;
class TicketController extends Controller
{

    public function store(Request $request){
        $input = $request->all();
        $ticket = new Ticket;
        $ticket->user_id = auth()->user()->id;
        $ticket->save();

        if($ticket->save()){
        $order = new Order;
        $order->user_id = $ticket->user_id;
        $order->ticket()->associate($ticket)->save();
        $order->save();
        }
    }


    public function create()
    {
        return view('tickets.create');
    }

    public function show(Ticket $ticket)
    {
      return view('show', compact('ticket'));
    }

    public function index()
    {
        return view('pages.buy');
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);

        return view ('tickets.edit')->with('ticket', $ticket);
    }
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $user = User::find(Auth::id());
        $order = Order::where('user_id', Auth::id())->get();
        $user->ticket()->delete($ticket);
        $user->orders()->delete($order);

    }
}
