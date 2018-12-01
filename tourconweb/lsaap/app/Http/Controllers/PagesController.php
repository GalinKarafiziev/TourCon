<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.account');
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
