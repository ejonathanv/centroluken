<footer class="py-16 bg-primary relative mt-20 md:mt-36">
    <img src="{{ asset('redesign/svg/footer-curves.svg') }}" 
        alt="Centro Luken - Footer Curva"
        class="hidden md:block absolute left-0 right-0 w-full z-1" style="bottom: 70%">
    <img src="{{ asset('redesign/svg/footer-curves.svg') }}" 
        alt="Centro Luken - Footer Curva"
        class="block md:hidden absolute left-0 right-0 w-full z-1" style="bottom: calc(100% - 10px)">
    <div class="container relative z-5">
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
                        <a href="{{ route('login') }}" class="block text-white font-semibold text-sm opacity-50 hover:opacity-100">
                            Administración
                        </a>
                    </li>
                    <li>
                        <a href="https://sites.google.com/centroluken.org/intranet?usp=sharing" target="_blank" class="block text-white font-semibold text-sm opacity-50 hover:opacity-100">
                            Intranet
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('redesign.contact') }}" class="block border-2 border-white py-3 px-6 text-white font-semibold text-sm opacity-50 hover:opacity-100">
                            Contáctanos
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <p class="text-center md:text-left text-white text-xs mt-16">
            © {{ date('Y') }}, {{ env('APP_NAME') }}, Derechos Reservados.
        </p>
    </div>
</footer>