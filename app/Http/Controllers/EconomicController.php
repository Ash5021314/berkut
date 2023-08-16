<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EconomicController extends Controller
{
    public function index(){
        return view('economic.index');
    }
}
