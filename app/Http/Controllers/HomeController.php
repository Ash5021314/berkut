<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['services'] = Home::query()->get();
        $data['sliders'] = Sliders::query()->get();

        return view('home.index', $data);
    }
}
