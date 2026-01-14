<footer class="py-16 bg-primary">
    <div class="container">
        <div class="flex flex-col md:flex-row items-center justify-center md:justify-between space-y-16 md:space-y-0">
            <div class="w-full md:w-5/12 flex items-center justify-center md:justify-start">
                <a href="#" class="relative left-[15px] md:left-0">
                    <img src="{{ asset('img/centro-luken-logo-oscuro.svg') }}" 
                        alt="Centro Luken - De Estrategias en Agua y Medio Ambiente"
                        class="h-14 w-auto">
                </a>
            </div>
            <div class="w-full md:w-7/12 flex items-center justify-center md:justify-end">
                <ul class="flex flex-col md:flex-row items-center space-x-0 md:space-x-10 space-y-7 md:space-y-0">
                    <li>
                        <a href="#" class="block text-white font-semibold text-sm hover:text-secondary">
                            Administración
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block text-white font-semibold text-sm hover:text-secondary">
                            Intranet
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block border-2 py-3 px-6 text-white font-semibold text-sm hover:text-secondary">
                            Contáctanos
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <p class="text-center md:text-left text-white/50 text-xs font-semibold mt-16">
            © {{ date('Y') }}, {{ env('APP_NAME') }}, Derechos Reservados.
        </p>
    </div>
</footer>