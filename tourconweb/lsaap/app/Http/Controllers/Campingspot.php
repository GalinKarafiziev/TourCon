<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Campingspot;
use App\User;
class CampingspotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request, $id)
    {
        // $this->validate($request,
        // [
        //   'totalprice' => 'required',
        //   'isAvailable' => 'required',
        // ]);
        // $campingspot = new Campingspot();
        // $campingspot->totalprice = $request->totalprice;
        // $campingspot->isAvailable = $request->isAvailable;
        // $campingspot->save();

        // $order = new Order;
        // $order->user_id = auth()->user()->id;
        // $order->save();
        // $order->campingspots()->attach($campingspot);
        $this->validate($request,
        ['totalprice' => 'required',
        'isAvailable' =>'required',
        'spotsremaining' => 'required',
        'email' =>' required',
        'price' =>'required'
        ]);
        $campingspot = Campingspot::find($id);
        $campingspot->totalprice = $request->totalprice;
        $campingspot->isAvailable = $request->isAvailable;
        $campingspot->price = $request->price;
        $campingspot->spotsremaining = $request->spotsremaining;
        $user = User::where('email', $request->input('email'))->get();
        $campingspot->users()->attach($user);
        $campingspot->save();

        return 'succ';
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
