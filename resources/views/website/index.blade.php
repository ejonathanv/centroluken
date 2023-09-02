<x-guest-layout header="header2">

    <section class="py-10 md:py-24">
        <div class="container">
            <div class="w-10/12 md:w-8/12 mx-auto text-center">
                <h1 class="text-primary title mb-10 !leading-tight">
                Imaginamos un futuro sostenible, de un desarrollo en armonía con la naturaleza, el agua y el medio ambiente
                </h1>

                <h4 class="text-secondary">
                Por eso creamos vínculos entre la ciencia, la política y la práctica para influir en la toma de decisiones y promover soluciones innovadoras para la coexistencia armónica de la humanidad con el agua y los recursos naturales.
                </h4>
            </div>
        </div>
    </section>

    <x-split-seccion-info-left img="{{ asset('img/riegogota.jpeg') }}">
        <h1 class="mb-7">
            ¿Qué Hacemos?
        </h1>
        <h4>
            Empleamos conocimiento técnico con base en experiencia práctica e investigación aplicada para crear proyectos colaborativos que faciliten la toma de decisiones de entidades públicas y privadas.
        </h4>
        <hr class="w-1/2 mt-10 border-t-4 border-secondary mx-auto md:ml-0">
    </x-split-seccion-info-left>

    <section class="py-10 md:py-20">
        <div class="container">

            <h1 class="text-center mb-10 md:mb-12 text-primary">
                Nos guíamos por:
            </h1>

            <div class="flex flex-col md:flex-row items-center md:items-stretch space-y-6 md:space-y-0 md:space-x-10">
                <div class="w-9/12 md:w-1/3">
                    <div class="border-4 border-secondary px-7 py-16 text-center h-full rounded-md">
                        <i class="fas fa-atom text-gray-200 mb-10" style="font-size: 80px;"></i>
                        <h2 class="text-secondary mb-5">
                            Ciencia
                        </h2>
                        <p>
                            Conocimiento riguroso y basado en evidencia científica para abordar desafíos ambientales.
                        </p>
                    </div>
                </div>

                <div class="w-9/12 md:w-1/3">
                    <div class="border-4 border-secondary px-7 py-16 text-center h-full rounded-md">
                        <i class="fas fa-users text-gray-200 mb-10" style="font-size: 80px;"></i>
                        <h2 class="text-secondary mb-5">
                            Experiencia
                        </h2>
                        <p>
                            Equipo multidisciplinario de especialistas con más de 30 años de experiencia en la gestión del agua y el medio ambiente.
                        </p>
                    </div>
                </div>

                <div class="w-9/12 md:w-1/3">   
                    <div class="border-4 border-secondary px-7 py-16 text-center h-full rounded-md">
                        <i class="fas fa-bullhorn text-gray-200 mb-10" style="font-size: 80px;"></i>
                        <h2 class="text-secondary mb-5">
                            Agencia
                        </h2>
                        <p>
                            Poder de influencia en la toma de decisiones para promover soluciones en beneficio de las generaciones presente y futuras y su coexistencia con el agua y el medio ambiente.
                        </p>
                    </div>
                </div>
            </div>

            <h1 class="text-center mt-10 md:mt-12 text-primary">
                Promovemos soluciones innovadoras
            </h1>

        </div>
    </section>

    <section class="py-10 md:py-32 relative">

        <div class="slider_bg_block" style="background-image: url('{{ asset('img/sembradios.jpeg') }}');"></div>

        <div class="container flex flex-col md:flex-row items-center justify-between relative z-10 space-y-10 md:space-y-0">
            <div class="w-full md:w-1/3 text-center md:text-left">
                <h1 class="text-primary mb-10 !leading-tight">
                    Nuestros Objetivos
                </h1>
                <p>
                    En Centro Luken, estamos comprometidos con la promoción de un futuro sostenible y equilibrado en el manejo del agua y los recursos naturales. A través de nuestros objetivos, buscamos abordar los desafíos actuales y futuros relacionados con la gestión del agua, la preservación del medio ambiente y el desarrollo sostenible.
                </p>
            </div>

            <div class="w-full md:w-7/12 relative">
                <div class="slider relative md:top-10">
                    <div class="text-white owl-carousel rounded-md overflow-hidden bg-gray-100 shadow-xl">
                        <div class="slide_item" style="background-image: url('{{ asset('img/influir.jpeg') }}')">
                            <div class="flex items-end justify-between w-full">
                                <div class="w-9/12">
                                    <h1 class="text-base md:text-xl font-bold m-0 !leading-tight">
                                        Influir en la conceptualización de los planes y programas en materia de agua y recursos naturales de los gobiernos nacionales y subnacionales, grupos intermedios de la sociedad civil y cámaras empresariales.
                                    </h1>
                                </div>
                                <div class="w-3/12 text-right">
                                    <h1 class="text-2xl md:text-6xl font-bold m-0">
                                        01
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="slide_item" style="background-image: url('{{ asset('img/contribuir.jpeg') }}')">
                            <div class="flex items-end justify-between w-full">
                                <div class="basis-9/12">
                                    <h1 class="text-base md:text-xl font-bold m-0 !leading-tight">
                                        Contribuir a la continuidad de los programas encaminados a la captación, el almacenamiento, tratamiento y reúso del agua.
                                    </h1>
                                </div>
                                <div class="basis-3/12 text-right">
                                    <h1 class="text-2xl md:text-6xl font-bold m-0">
                                        02
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="slide_item" style="background-image: url('{{ asset('img/abogar.jpeg') }}')">
                            <div class="flex items-end justify-between w-full">
                                <div class="basis-9/12">
                                    <h1 class="text-base md:text-xl font-bold m-0 !leading-tight">
                                        Abogar porque los principios de eficiencia y justicia sean los pilares de la gobernanza del agua.
                                    </h1>
                                </div>
                                <div class="basis-3/12 text-right">
                                    <h1 class="text-2xl md:text-6xl font-bold m-0">
                                        03
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="slide_item" style="background-image: url('{{ asset('img/apoyar.jpeg') }}')">
                            <div class="flex items-end justify-between w-full">
                                <div class="basis-9/12">
                                    <h1 class="text-base md:text-xl font-bold m-0 !leading-tight text-left w-full">
                                        Apoyar el desarrollo y la implementación de programas integrales de desarrollo sustentable para ahorrar y preservar los recursos naturales.
                                    </h1>
                                </div>
                                <div class="basis-3/12 text-right">
                                    <h1 class="text-2xl md:text-6xl font-bold m-0">
                                        04
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="slide_item" style="background-image: url('{{ asset('img/guiar.jpeg') }}')">
                            <div class="flex items-end justify-between w-full">
                                <div class="basis-9/12">
                                    <h1 class="text-base md:text-xl font-bold m-0 !leading-tight text-left w-full">
                                        Guiar a las autoridades y ciudadanía para consolidar proyectos de sustentabilidad y resiliencia hídrica.
                                    </h1>
                                </div>
                                <div class="basis-3/12 text-right">
                                    <h1 class="text-2xl md:text-6xl font-bold m-0">
                                        05
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <div class="slide_item" style="background-image: url('{{ asset('img/servircomopuente.jpeg') }}')">
                            <div class="flex items-end justify-between w-full">
                                <div class="basis-9/12">
                                    <h1 class="text-base md:text-xl font-bold m-0 !leading-tight text-left w-full">
                                        Servir como un puente entre las naciones en búsqueda de las mejores prácticas y acuerdos para satisfacer la demanda mundial de recursos. 
                                    </h1>
                                </div>
                                <div class="basis-3/12 text-right">
                                    <h1 class="text-2xl md:text-6xl font-bold m-0">
                                        06
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2 absolute -bottom-12 left-0">
                        <a href="#" class="slider_control left">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a href="#" class="slider_control right">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section_divider"></section>

</x-guest-layout>