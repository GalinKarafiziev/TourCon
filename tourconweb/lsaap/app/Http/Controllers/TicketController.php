<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\StoreOrder;
use App\Order;
use App\User;
use App\Http\Controllers\OrderController;
use Auth;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
class TicketController extends Controller
{

    public function store(Request $request){

      $this->validate($request,
      [
        'cardnumber' => 'required',
        'cardname' => 'required',
        'cvv' => 'required',
        'expirationdate' => 'required',
      ]);
        $ticket_exists = Ticket::where('user_id', auth()->user()->id)->get();

        if($ticket_exists->count() > 0){
            return redirect('/')->with('error','You already have ticket');
        }
        else
        {
        $input = $request->all();
        $ticket = new Ticket;
        $ticket->price = 55;
        $ticket->user_id = auth()->user()->id;
        $ticket->save();

        $order = new Order;
        $order->user_id = $ticket->user_id;
        $order->totalprice = 55;
        $order->ticket()->associate($ticket)->save();
        $order->save();
        //$ticket->order()->associate($order);

        $data = array(
          'user_id' => auth()->user()->id,
          'user_name' => auth()->user()->name,
          'cardnumber' => $request->input('cardnumber'),
          'cardname' => $request->input('cardname'),
          'ticket' => $order->ticket_id,
          'price' => $order->totalprice,
          'order' => $order->id,
        );
        Mail::to(auth()->user()->email)->send(new SendMail($data));

        return redirect('/')->with('success', 'Ticket purchased');

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
        $user = User::find($id);
        $tickets = Ticket::where('user_id','=', auth()->user()->id)->get()->pluck('id')->toArray();
        $campingspot = $user->campingspots()->wherePivot('user_id', '=', auth()->user()->id);
        if($campingspot){
          return redirect('/')->with('error', 'Please, cancel your campingspot reservations before canceling your ticket!');
        }
        else{
        foreach($tickets as $ticket){
        $order = Order::where('ticket_id', $ticket);
        $user->ticket()->delete($ticket);

      }
      return redirect('/')->with('success', 'Ticket deleted');
    }




    }
}
