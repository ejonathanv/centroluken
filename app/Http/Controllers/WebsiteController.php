<?php

namespace App\Http\Controllers;

use App\Mail\SayThanks;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.index');
    }

    public function about(){
        return view('website.about');
    }

    public function member($member){
        return view('website.member');
    }

    public function contact(){
        return view('website.contact');
    }

    public function send(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|numeric|digits:10',
            'message' => 'required|min:10|max:500'
        ], [
            'name.required' => 'Por favor, escribe tu nombre completo',
            'email.required' => 'Por favor, escribe tu correo electrónico',
            'email.email' => 'Por favor, escribe un correo electrónico válido',
            'phone.numeric' => 'Por favor, escribe un número de teléfono válido',
            'phone.digits' => 'Por favor, escribe un número de teléfono válido',
            'message.required' => 'Por favor, escribe tu mensaje',
            'message.min' => 'Por favor, escribe un mensaje de al menos 10 caracteres',
            'message.max' => 'Por favor, escribe un mensaje de máximo 500 caracteres'
        ]);
        

        Mail::to($request->email)->send(new SayThanks($request->all()));

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMessage($request->all()));

        return redirect()->route('contact')->with('success', 'Tu mensaje ha sido enviado con éxito');

    }

    public function header2(){
        return view('website.header2');
    }
}
