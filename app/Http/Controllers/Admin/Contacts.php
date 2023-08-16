<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class Contacts extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['contact'] = Contact::query()->get();
        return view('admin.contact.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['contact'] = Contact::query()->get();
        return view('admin.contact.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phones = $request->phones;
        $contact->save();
        return response()->redirectToRoute("contact.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Contact::destroy($id);
        return back();
    }
}
