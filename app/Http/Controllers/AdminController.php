<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminx1(){
        return view('admin.admin1');
    }

    public function adminx2(){
        return view('admin.admin2');
    }


}
