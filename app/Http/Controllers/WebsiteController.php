<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Mail\SayThanks;
use App\Models\Article;
use App\Mail\ContactMessage;
use App\Models\TopiCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

    public function blog(){
        $articles = Article::latest()->paginate(9);
        return view('website.blog', compact('articles'));
    }

    public function article(Article $article){
        $relatedArticles = Article::where('id', '<>', $article->id)->latest()->take(5)->get();
        return view('website.article', compact('article', 'relatedArticles'));
    }

    public function topics(){
        return redirect()->route('topicCategory', TopiCategory::first());
    }

    public function topicCategory(TopiCategory $category){
        $topics = Topic::where('category_id', $category->id)->latest()->paginate(9);
        // I need all topicCategory that have at least one topic
        $categories = TopiCategory::whereHas('topics')->get();
        $currentCategory = $category;
        return view('website.topics', compact('topics', 'currentCategory', 'categories'));
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

        Mail::to(env('MAIL_CONTACT_ADDRESS'))->send(new ContactMessage($request->all()));

        Mail::to(env('MAIL_SECONDARY_CONTACT_ADDRESS'))->send(new ContactMessage($request->all()));

        return redirect()->route('contact')->with('success', 'Tu mensaje ha sido enviado con éxito');

    }

    public function header2(){
        return view('website.header2');
    }
}
