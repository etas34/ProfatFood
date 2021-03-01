<?php

namespace App\Http\Controllers;

use App\Satis;
use Illuminate\Http\Request;

class SatisController extends Controller
{
    public function satis1()
    {

        return view('satislar.satis1');
    }
    public function satis1_post(Request $request)
    {
        $formData=$request->all();  //to check all the datas dumped from the form
        return redirect()->route('satis2' ,app()->getLocale())->with('formData',$formData);

    }

    public function satis2()
    {

        return view('satislar.satis2');
    }

    public function satis2_post(Request $request)
    {
        $formData=$request->all();  //to check all the datas dumped from the form
        return redirect()->route('satis3', app()->getLocale())->with('formData',$formData);

    }


    public function satis3()
    {

        return view('satislar.satis3');
    }


    public function satis_son()
    {

        return view('satislar.satis_son');
    }

}
