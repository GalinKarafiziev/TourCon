<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Campingspot;
use App\User;
use Validator;
use App\Ticket;
use Illuminate\Support\Facades\Input;
use Auth;
class CampingspotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function update(Request $request, $id)
    {
        $data = $request->validate([
        'emails' => 'nullable|array|min:1',
        'emails.*'  => 'nullable|string|distinct|min:1',
        'cardnumber' => 'required',
        'cardname' => 'required',
        'cvv' => 'required',
        'expirationdate' => 'required',
        ]);

        try{
        $ticket_exists = Ticket::where('user_id', auth()->user()->id)->get();

        if($ticket_exists->isEmpty()){
            return redirect('/tickets/create')->with('error','You must have a ticket to reserve a camping spot!');
        }
        else{
        $campingspot = Campingspot::find($id);

        if($campingspot->spotsremaining == 0){
         return redirect('/')->with('error','No spots left!');
        }
        else
        {

        if(!empty($request->get('emails'))){
          $counter = count(array_filter($request->get('emails')));
        }
        foreach($request->input('emails') as $key => $value)
        {
            $users = User::where(['email'=>$value])->get()->pluck('id')->toArray();

            foreach($users as $user){
              $ticket_exists = Ticket::where('user_id', $user)->get();
              if($ticket_exists->isEmpty()){
                  return redirect('/tickets/create')->with('error','All of the users you reserve a campingspot with must have a ticket!');
              }
              $order = new Order;
              $order->user_id = $user;
              $order->totalprice = $counter * 20 + $campingspot->price;
              $order->save();
              $campingspot->orders()->attach($order);
            }
            $campingspot->users()->attach($users);
        }
        $campingspot->spotsremaining = $campingspot->spotsremaining - $counter;
        if($campingspot->spotsremaining < 0){
          $campingspot->spotsremaining = 0;
          $campingspot->isAvailable = 0;
        }
        else{
        $campingspot->isAvailable = 1;
      }

      $campingspot->save();
        return redirect('/')->with('success','You just reserved a camping spot!');
      }
    }
}catch(\Illuminate\Database\QueryException $ex){
  return redirect('/')->with('error', 'Something went wrong!');
}



    }


    public function destroy($id)
    {
        $campingspot = Campingspot::find($id);
        $user = User::find(Auth::id());
        $order = Order::where('user_id', Auth::id())->get();
        $campingspot->orders()->detach($order);
        $campingspot->users()->detach($user);
        $campingspot->spotsremaining = $campingspot->spotsremaining + 1;
        if($campingspot->spotsremaining > 0){
          $campingspot->isAvailable = 1;
        }
        $campingspot->save();
        return redirect('/')->with('success', 'reservation deleted');

    }

    public function index(){
        $campingspots = Campingspot::all();
        return view('campingspots.index')->with('campingspots', $campingspots);
    }

    public function show($id)
    {
        $campingspot = Campingspot::find($id);
        $campingspots = Campingspot::all();
        return view('campingspots.show')->with('campingspots', $campingspots);

    }
    public function edit($id)
    {
        $campingspot = Campingspot::find($id);

        return view ('campingspots.edit')->with('campingspot', $campingspot);
    }


}
