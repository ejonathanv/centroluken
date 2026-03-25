<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscusionEspecRequest;
use App\Http\Requests\UpdateDiscusionEspecRequest;
use App\Models\Discusion;
use App\Models\DiscusionEspec;

class DiscusionEspecController extends Controller
{
    public function index(Discusion $discusion)
    {
        $especificaciones = $discusion->especificaciones()->orderBy('orden')->get();

        return view('dashboard.discusiones.especificaciones.index', compact('discusion', 'especificaciones'));
    }

    public function create(Discusion $discusion)
    {
        return view('dashboard.discusiones.especificaciones.create', compact('discusion'));
    }

    public function store(StoreDiscusionEspecRequest $request, Discusion $discusion)
    {
        $espec = new DiscusionEspec();
        $espec->discusion_id = $discusion->id;
        $espec->titulo = $request->titulo;
        $espec->descripcion = $request->descripcion ?? '';
        $espec->orden = $request->orden;
        $espec->save();

        return redirect()
            ->route('discusiones.especificaciones.index', $discusion)
            ->with('status', 'La especificación se creó con éxito.');
    }

    public function edit(Discusion $discusion, DiscusionEspec $discusionEspec)
    {
        $this->guardEspecBelongsToDiscusion($discusion, $discusionEspec);

        return view('dashboard.discusiones.especificaciones.edit', [
            'discusion' => $discusion,
            'discusionEspec' => $discusionEspec,
        ]);
    }

    public function update(UpdateDiscusionEspecRequest $request, Discusion $discusion, DiscusionEspec $discusionEspec)
    {
        $this->guardEspecBelongsToDiscusion($discusion, $discusionEspec);

        $discusionEspec->titulo = $request->titulo;
        $discusionEspec->descripcion = $request->descripcion ?? '';
        $discusionEspec->orden = $request->orden;
        $discusionEspec->save();

        return redirect()
            ->route('discusiones.especificaciones.index', $discusion)
            ->with('status', 'La especificación se actualizó con éxito.');
    }

    public function destroy(Discusion $discusion, DiscusionEspec $discusionEspec)
    {
        $this->guardEspecBelongsToDiscusion($discusion, $discusionEspec);

        $discusionEspec->delete();

        return redirect()
            ->route('discusiones.especificaciones.index', $discusion)
            ->with('status', 'La especificación se eliminó con éxito.');
    }

    protected function guardEspecBelongsToDiscusion(Discusion $discusion, DiscusionEspec $discusionEspec): void
    {
        abort_if($discusionEspec->discusion_id !== $discusion->id, 404);
    }
}
