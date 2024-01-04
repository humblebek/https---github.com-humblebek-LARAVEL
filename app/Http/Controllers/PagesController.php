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


    public function jajIndex(){
        return view('components.pages.main');
    }

    public function jajClass(){
        return view('components.pages.class');
    }

    public function jajTeacher(){
        return view('components.pages.teachers');
    }

    public function jajWins(){
        return view('components.pages.wins');
    }

    public function jajGallery(){
        return view('components.pages.gallery');
    }

    public function jajArticle(){
        return view('components.pages.article');
    }
}
