<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Urunlers;
use Illuminate\Http\Request;

class UrunlerController extends Controller
{
    public function index ()
    {
        $yenisiparisler=\App\Siparis::where('onay','=',1)->get();
        $urunler=\App\Urunlers::all();

        return view('Admin.urunler.index',compact('urunler','yenisiparisler'));
    }

    public function edit ($locale,$id)
    {
        $urunler=\App\Urunlers::find($id);

        $yenisiparisler=\App\Siparis::where('onay','=',1)->get();

        return view('Admin.urunler.edit',compact('urunler','yenisiparisler'));
    }

    public function update (Request $request,$locale,$id)
    {

        $urunler=\App\Urunlers::find($id);
        $urunler->miktar=$request->miktar;
        $urunler->fiyat=$request->fiyat;
        if ( ! $request->has('satistami')) {
            $urunler->satistami="Hayır";
        }
        else
        {
            $urunler->satistami="Evet";
        }
        $urunler->save();

        return redirect(route('admin.urunler',app()->getLocale()));
    }



}
