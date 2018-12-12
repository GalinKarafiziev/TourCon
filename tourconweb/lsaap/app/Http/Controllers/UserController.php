<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request)
    {
        $user = Auth::user();
        $this->validate($request,
        ['account_money' => 'required',]);

        //edit from form
        $user->account_money = $request->input('account_money');

        //save in db
        $user->save();

        return redirect('/home');


    }

    public function edit(User $user)
    {
        $user = Auth::user();

        return view ('users.edit')->with('user', $user);
    }

    public function show(User $user)
    {
        $user = Auth::user();
        return view('users.show')->with('user', $user);

    }

    public function index()
    {
        $user = Auth::user();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('orders', $user->orders);
    }
}
