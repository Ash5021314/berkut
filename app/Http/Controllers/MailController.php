<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $mailData = [
            'Имя' => $request->name,
            'Электронная почта' => $request->email,
            'Телефон'=>$request->tel,
            'Тема' =>$request->title,
            'Сообщение'=>$request->message
        ];

        Mail::to('berkut.center@yandex.ru')->send(new DemoMail($mailData));
        return redirect()->back()->with('success', 'Ваше электронное письмо успешно доставлено');
//        dd("Email is sent successfully.");
    }
}
