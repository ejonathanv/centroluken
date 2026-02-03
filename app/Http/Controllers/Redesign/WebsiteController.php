<?php

namespace App\Http\Controllers\Redesign;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        return view('redesign.index');
    }

    public function philosophy() {  
        return view('redesign.philosophy');
    }

    public function founder($nombre){
        $view = 'redesign.founders.' . $nombre;
        if(view()->exists($view)){
            return view($view);
        }else{
            return redirect()->route('redesign.philosophy');
        }
    }

    public function origin() {
        return view('redesign.origin');
    }

    public function team() {
        return view('redesign.team');
    }

    public function materials() {
        return view('redesign.materials');
    }

    public function discusion(){
        return view('redesign.discusion');
    }

    public function studies() {
        return view('redesign.studies');
    }
    
    public function resources() {
        return view('redesign.resources');
    }

    public function partnerships() {
        return view('redesign.partnerships');
    }

    public function contact() {
        return view('redesign.contact');
    }
}
