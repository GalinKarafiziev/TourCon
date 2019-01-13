<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class PagesController extends Controller
{

    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }
    public function account(){
      $users = User::all();
      return view('pages.account', compact('users'));
    }
    public function tickets(){
        return view('pages.tickets');
    }
    public function login(){
        return view('pages.login');
    }
    public function buy(){
        return view('pages.buy');
    }
}
