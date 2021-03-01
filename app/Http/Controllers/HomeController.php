<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $yenisiparisler=\App\Siparis::where('onay','=',1)->get();
        $eskisiparisler=\App\Siparis::where('onay','=',2)->get();

        return view('Admin.home',compact('yenisiparisler','eskisiparisler'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home', app()->getLocale()));
    }

}
