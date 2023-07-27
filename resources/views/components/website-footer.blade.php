<footer class="website_footer">
    <div class="website_footer_curves" style="background-image: url({{ asset('img/footer-curves.svg') }})"></div>
    <div class="container">
        <div class="flex flex-col md:flex-row items-start md:items-end space-y-6 md:space-y-0 justify-between">
            <div>
                <a href="#">
                    <img src="{{ asset('img/centro-luken-logo-oscuro.svg') }}" class="website_footer_logo" alt="Centro Luken - De Estrategias en Agua y Medio Ambiente">
                </a>

                <p class="text-white mt-7 md:mt-16 text-sm">
                    &copy; {{ date('Y') }} Centro Luken, Derechos Reservados.
                </p>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#">
                    <i class="fab fa-facebook-square text-white text-2xl"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram text-white text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
</footer>