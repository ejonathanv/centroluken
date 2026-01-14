<?php

namespace App\Http\Controllers\Redesign;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        return view('2026.index');
    }
}
