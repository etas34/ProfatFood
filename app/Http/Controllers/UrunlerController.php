<?php

namespace App\Http\Controllers;

use App\Urunlers;
use Illuminate\Http\Request;

class UrunlerController extends Controller
{
    public function canli()
    {

        $urundata=Urunlers::where('urun_id','=',1)->get();
        return view('urunler.canli',compact('urundata'));
    }

    public function satis_post(Request $request)
    {

        $formData=$request->all();  //to check all the datas dumped from the form
        return redirect()->route('satis1', app()->getLocale())->with('formData',$formData);

    }


    public function kuru()
    {

        $urundata=Urunlers::where('urun_id','=',2)->get();
        return view('urunler.kuru',compact('urundata'));
    }

    public function ogutulmus()
    {

        $urundata=Urunlers::where('urun_id','=',3)->get();
        return view('urunler.ogutulmus',compact('urundata'));
    }


}
