<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiparisController extends Controller
{
    public function yeni()
    {


        $yenisiparisler=\App\Siparis::where('onay','=',1)->get();
        $siparisler=\App\Siparis::where('onay','=',1)->get();

        return view('Admin.siparis.yeni',compact('siparisler','yenisiparisler'));
    }


    public function eski()
    {

        $yenisiparisler=\App\Siparis::where('onay','=',1)->get();
        $siparisler=\App\Siparis::where('onay','=',2)->get();

        return view('Admin.siparis.eski',compact('siparisler','yenisiparisler'));
    }


    public function sevk($locale,$id)
    {

        $yenisiparisler=\App\Siparis::where('onay','=',1)->get();
        $siparisler=\App\Siparis::find($id);

        return view('Admin.siparis.sevk',compact('siparisler','yenisiparisler'));
    }

    public function update (Request $request,$locale,$id)
    {
        $siparisler=\App\Siparis::find($id);
        $siparisler->kargo_ad=$request->kargo_ad;
        $siparisler->kargo_no=$request->kargo_no;
        $siparisler->onay=2;
        $siparisler->save();

        return redirect(route('admin.siparis.eski',app()->getLocale()));
    }

}
