<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Campingspot;
use App\User;
use Validator;
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
        'emails' => 'required|array|min:1',
        'emails.*'  => "required|string|distinct|min:1",
        ]);

        $campingspot = Campingspot::find($id);

        foreach($request->input('emails') as $key => $value)
        {
            $users = User::where(['email'=>$value])->get()->pluck('id')->toArray();
            $campingspot->users()->attach($users);
        }

        $counter = $campingspot->users()->count();

        $campingspot->totalprice = $counter * 20 + $campingspot->price;
        $campingspot->spotsremaining = $campingspot->spotsremaining - $counter;
        if($counter < 6){
            $campingspot->isAvailable = 1;
        }
        else{
            $campingspot->isAvailable = 0;
        }

        $campingspot->save();

        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->save();
        $campingspot->orders()->attach($order);






    }


    public function destroy($id)
    {
        $campingspot = Campingspot::find($id);
        $user = User::find(Auth::id());
        $order = Order::where('user_id', Auth::id())->get();
        $campingspot->users()->detach($user);
        $campingspot->orders()->detach($order);
        $campingspot->spotsremaining = $campingspot->spotsremaining + 1;
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
