@section('title', 'Contáctanos')


<x-guest-layout header="header2">

    <section class="py-10 md:py-24">
        <div class="container">
            <div class="w-10/12 md:w-7/12 mx-auto text-center">
                <h1 class="text-primary title mb-10 !leading-tight">
                    Contáctanos para más información
                </h1>

                <h4 class="text-secondary">
                    Envíanos un mensaje y nos pondremos en contacto contigo.
                </h4>

                <hr class="w-1/2 mx-auto mt-10 border-t-4 border-secondary">

                <form action="{{ route('send-message') }}" method="POST" class="mt-10 w-full md:w-9/12 mx-auto text-left" onsubmit="document.getElementById('submit').disabled=true;document.getElementById('submit').innerText='Enviando...'">

                    @csrf

                    @if (session('success'))
                        <div class="bg-green-100 text-green-700 px-4 py-3 rounded relative mb-7" role="alert">
                            <span class="bold block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="form-group mb-7">
                        <label for="name">
                            ¿Cuál es tu nombre completo?
                        </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-7">
                        <label for="" class="text-secondary text-sm font-bold">
                            ¿Cuál es tu correo electrónico?
                        </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-7">
                        <label for="" class="text-secondary text-sm font-bold">
                            ¿Cuál es tu número de teléfono?
                        </label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Teléfono" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-7">
                        <label for="" class="text-secondary text-sm font-bold">
                            Escribe tu mensaje
                        </label>
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Mensaje">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block w-full md:w-1/2 mx-auto disable:opacity-50 disable:cursor-not-allowed !disable:bg-primary-dark"
                        id="submit" 
                        type="submit">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i>
                            <span>Enviar mensaje</span>
                        </span>
                    </button>

                </form>

            </div>
        </div>
    </section>
    
    <section class="section_divider"></section>

</x-guest-layout>