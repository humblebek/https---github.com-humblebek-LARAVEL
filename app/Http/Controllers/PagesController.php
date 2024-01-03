<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function furIndex(){
        return view('pages.index');
    }

    public function furAbout(){
        return view('pages.about');
    }

    public function furDesign(){
        return view('pages.design');
    }

    public function furShop(){
        return view('pages.shop');
    }

    public function furContact(){
        return view('pages.contact');
    }
}
