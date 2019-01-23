<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
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
        [
          'cardnumber' => 'required',
          'cardname' => 'required',
          'cvv' => 'required',
          'expirationdate' => 'required',
          'account_money' => 'required '
        ]);

        //edit from form
        $user->account_money = $user->account_money + $request->input('account_money');

        //save in db
        $user->save();
        $data = array(
          'user_id' => auth()->user()->id,
          'user_name' => auth()->user()->name,
          'cardnumber' => $request->input('cardnumber'),
          'cardname' => $request->input('cardname'),
          'account_money' => auth()->user()->account_money,
        );
        Mail::to(auth()->user()->email)->send(new SendMail($data));

        return redirect('/')->with('success', 'Event-money purchased');



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
