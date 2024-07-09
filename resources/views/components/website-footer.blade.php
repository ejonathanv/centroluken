<section class="bg-white pt-10 md:pt-10 pb-10 md:pb-24">

</section>

<footer class="website_footer">
    <img src="{{ asset('img/footer-curves.svg') }}" alt="Footer Curves" class="footerCurves">
    <div class="container relative z-10">
        <div class="flex flex-col md:flex-row items-start md:items-end space-y-6 md:space-y-0 justify-between">
            <div>
                <a href="#">
                    <img src="{{ asset('img/centro-luken-logo-oscuro.svg') }}" class="website_footer_logo" alt="Centro Luken - De Estrategias en Agua y Medio Ambiente">
                </a>

                <p class="text-white mt-7 md:mt-16 text-sm">
                    &copy; {{ date('Y') }} {{ __('global.footer') }}
                </p>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}" class="text-white text-sm font-bold">
                    Administración
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
                {{--
                <a href="#">
                    <i class="fab fa-facebook-square text-white text-2xl"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram text-white text-2xl"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin text-white text-2xl"></i>
                </a>
                --}}
            </div>
        </div>
    </div>
</footer>