<x-redesign.website-layout header="header2">
    <section class="py-32">
        <div class="container relative" style="z-index: 101;">
            <div class="w-6/12 mx-auto">

                <h3>
                    Iniciar sesión
                </h3>

                <p class="mb-7">
                    Acceso restrigido a usuarios registrados.
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="">
                            {{ __('Usuario') }}
                        </label>             
                        <input type="text" class="form-control" name="email" id="email" placeholder="Correo electrónico" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror           
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="">
                            {{ __('Contraseña') }}
                        </label>

                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">

                        @error('password')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-start mt-7">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Ingresar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-redesign.website-layout>
