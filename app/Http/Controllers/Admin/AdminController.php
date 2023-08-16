<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['services'] = Home::query()->get();
        return view('admin.home.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.createSecurity');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request->file('serviceImage')->store('public/images');
        $service = new Home();
        $service->insert([
            'title' => $request->serviceTitle,
            'img' => $path,
            'desc' => $request->serviceDescription
        ]);
        return response()->redirectToRoute("home.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['service'] = Home::find($id);
        return view('admin.home.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filename = '';
        $home = Home::findOrFail($id);
        if ($request->hasFile('img')) {
            $filename = 'public/images/' . time() . "." . $request->img->extension();
            $request->img->storeAs( $filename);
            Storage::delete($home->img);
        }
        $home->title = $request->title;
        $home->img = $filename;
        $home->desc = $request->desc;
        $home->save();
        return response()->redirectToRoute("home.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Home::destroy($id);
        return back();
    }

    public function slider()
    {
        $data['sliders'] = Sliders::query()->get();
        return view('admin.home.slider', $data);
    }

    public function sliderCreate()
    {
        return view('admin.home.sliderCreate');
    }

    public function sliderStore(Request $request)
    {
        $path = $request->file('sliderImage')->store('public/images');
//        dd($path);
        $slider = new Sliders();
        $slider->insert([
            'img' => $path
        ]);
        return response()->redirectToRoute("slider");
    }

    public function sliderEdit(string $id)
    {
        $data['slider'] = Sliders::find($id);
        return view('admin.home.editSlider', $data);
    }

    public function sliderUpdate(Request $request, string $id)
    {
        $filename = '';
        $slider = Sliders::findOrFail($id);
        if ($request->hasFile('img')) {
            $filename = 'public/images/' . time() . "." . $request->img->extension();
            $request->img->storeAs( $filename);
            Storage::delete($slider->img);
        }
        $slider->img = $filename;
        $slider->save();
        return response()->redirectToRoute("slider");
    }

    public function sliderDelete(string $id)
    {
        Sliders::destroy($id);
        return back();
    }
}
