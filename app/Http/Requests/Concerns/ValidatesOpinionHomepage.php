<?php

namespace App\Http\Requests\Concerns;

use App\Models\Opinion;
use Illuminate\Validation\Validator;

trait ValidatesOpinionHomepage
{
    protected function validateOpinionHomepage(Validator $validator, ?int $ignoreOpinionId = null): void
    {
        if (! $this->boolean('on_homepage')) {
            return;
        }

        $position = $this->input('position');

        if ($position === null || $position === '') {
            $validator->errors()->add('position', 'Debes seleccionar una posición (1, 2 o 3) para mostrar la opinión en el home.');

            return;
        }

        $position = (int) $position;

        if (! in_array($position, [1, 2, 3], true)) {
            $validator->errors()->add('position', 'La posición debe ser 1, 2 o 3.');

            return;
        }

        $homepageQuery = Opinion::where('on_homepage', true)
            ->when($ignoreOpinionId, fn ($q) => $q->where('id', '!=', $ignoreOpinionId));

        if ((clone $homepageQuery)->count() >= 3) {
            $validator->errors()->add('on_homepage', 'Solo pueden haber 3 opiniones en el home.');

            return;
        }

        if ((clone $homepageQuery)->where('position', $position)->exists()) {
            $validator->errors()->add('position', "La posición {$position} ya está asignada a otra opinión en el home.");
        }
    }
}
