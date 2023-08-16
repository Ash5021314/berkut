<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhysicController extends Controller
{
    public function index(){
        return view('physic.index');
    }
}
