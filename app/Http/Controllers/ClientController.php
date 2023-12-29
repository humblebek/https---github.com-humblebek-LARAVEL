<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientx1(){
        return view('client.client1');
    }

    public function clientx2(){
        return view('client.client2');
    }
}
