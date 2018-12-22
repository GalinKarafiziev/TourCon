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
        $this->validate($request,
        ['totalprice' => 'required',
        'isAvailable' =>'required',
        'spotsremaining' => 'required',
        'email' =>'nullable',
        'price' =>'required',
        'email_1' => 'nullable',
        'email_2' => 'nullable',
        'email_3' => 'nullable',
        'email_4' => 'nullable',
        'email_5' => 'nullable',
        'email_6' => 'nullable',
        ]);

        $user = User::where('email', $request->input('email'))->get();
        $user2 = User::where('email', $request->input('email_2'))->get();
        $user3 = User::where('email', $request->input('email_3'))->get();
        $user4 = User::where('email', $request->input('email_4'))->get();
        $user5 = User::where('email', $request->input('email_5'))->get();
        $user6 = User::where('email', $request->input('email_6'))->get();

        $campingspot = Campingspot::find($id);
        $campingspot->totalprice = $request->totalprice;
        $campingspot->isAvailable = $request->isAvailable;
        $campingspot->price = $request->price;
        $campingspot->spotsremaining = $request->spotsremaining;

        $campingspot->users()->attach($user2);
        $campingspot->users()->attach($user3);
        $campingspot->users()->attach($user4);
        $campingspot->users()->attach($user5);
        $campingspot->users()->attach($user6);
        $campingspot->users()->attach($user);

        $campingspot->save();

        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->save();
        $order->campingspots()->attach($campingspot);

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
    public function destroy($id)
    {
        $campingspot = Campingspot::find($id);
        $campingspot->delete();
        return redirect('/campingspots')->with('success', 'Campingspot removed');
    }
}
