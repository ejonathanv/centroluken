<x-mail::message>
# Se ha recibido un nuevo mensaje de contacto

## Nombre completo

{{ $name }}

## Correo electrónico

{{ $email }}

## Teléfono

{{ $phone }}

## Mensaje

{{ $message }}

No olvides responder a la brevedad.

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
