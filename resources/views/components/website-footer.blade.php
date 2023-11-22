<section class="bg-white pt-10 md:pt-10 pb-10 md:pb-24">

</section>

{{--
<section class="bg-gray-100 pt-10 md:pt-20 pb-32 md:pb-64" style="border-top: 15px solid #eceff4">
    <div class="container">
        <div class="flex flex-wrap md:flex-no-wrap items-center -mx-3">
            <div class="w-4/12 md:w-2/12 p-3">
                <img src="https://placehold.co/250x160" class="partner-logo" alt="">
            </div>
            <div class="w-4/12 md:w-2/12 p-3">
                <img src="https://placehold.co/250x160" class="partner-logo" alt="">
            </div>
            <div class="w-4/12 md:w-2/12 p-3">
                <img src="https://placehold.co/250x160" class="partner-logo" alt="">
            </div>
            <div class="w-4/12 md:w-2/12 p-3">
                <img src="https://placehold.co/250x160" class="partner-logo" alt="">
            </div>
            <div class="w-4/12 md:w-2/12 p-3">
                <img src="https://placehold.co/250x160" class="partner-logo" alt="">
            </div>
            <div class="w-4/12 md:w-2/12 p-3">
                <img src="https://placehold.co/250x160" class="partner-logo" alt="">
            </div>
        </div>
    </div>
</section>
--}}

<footer class="website_footer">
    <div class="website_footer_curves" style="background-image: url({{ asset('img/footer-curves.svg') }})"></div>
    <div class="container">
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