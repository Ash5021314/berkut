<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\Contacts;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data['contact'] = Contact::query()->get();
        return view('contact.index',$data);
    }
}
