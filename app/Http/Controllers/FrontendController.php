<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //membuat funtcion index

    public function index(Request $request)
    {
        return view('page.frontend.index');
    }

     public function details(Request $request , $slug)
    {
        return view('page.frontend.details');
    }
    public function cart(Request $request)
    {
        return view('page.frontend.cart');
    }
    public function success(Request $reques){
        return view('page.frontend.success');
    }
}