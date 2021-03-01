<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        return view('blog.index');
    }

    public function yazi1()
    {

        return view('blog.yazi1');
    }


    public function yazi2()
    {

        return view('blog.yazi2');
    }

    public function yazi3()
    {

        return view('blog.yazi3');
    }



}
