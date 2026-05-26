<?php

namespace App\Http\Controllers\Redesign;

use App\Http\Controllers\Controller;
use App\Models\Discusion;
use App\Models\Opinion;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('redesign.index');
    }

    public function philosophy()
    {
        return view('redesign.philosophy');
    }

    public function founder($nombre)
    {
        $view = 'redesign.founders.'.$nombre;
        if (view()->exists($view)) {
            return view($view);
        } else {
            return redirect()->route('redesign.philosophy');
        }
    }

    public function origin()
    {
        return view('redesign.origin');
    }

    public function team()
    {
        return view('redesign.team');
    }

    public function materials()
    {
        return view('redesign.materials');
    }

    public function discusiones()
    {
        $discusiones = Discusion::orderByDesc('fecha')->paginate(9);

        return view('redesign.discusiones', compact('discusiones'));
    }

    public function discusionIndex()
    {
        $discusion = Discusion::orderByDesc('fecha')->first();

        if (! $discusion) {
            abort(404);
        }

        return redirect()->route('redesign.discusion.show', $discusion);
    }

    public function discusionShow(Discusion $discusion)
    {
        $discusion->load('especificaciones');

        return view('redesign.discusion', compact('discusion'));
    }

    public function opinions()
    {
        $opiniones = Opinion::orderByDesc('date_published')->paginate(6);

        return view('redesign.opinions.index', compact('opiniones'));
    }

    public function opinion(Opinion $opinion)
    {
        return view('redesign.opinions.show', compact('opinion'));
    }

    public function studies()
    {
        return view('redesign.studies');
    }

    public function resources()
    {
        return view('redesign.resources');
    }

    public function partnerships()
    {
        return view('redesign.partnerships');
    }

    public function contact()
    {
        return view('redesign.contact');
    }
}
