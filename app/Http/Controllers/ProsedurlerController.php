<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsedurlerController extends Controller
{
    public function sozlesme()
    {
        return view('prosedurler.mesafeliSatis');
    }

    public function iade()
    {
        return view('prosedurler.iade');
    }



    public function gizlilik()
    {
        return view('prosedurler.gizlilik');
    }



}
