@section('title', 'Semblanzas')

<x-guest-layout header="header2">

    <section class="py-10 md:py-24">
        <div class="container">
            <div class="w-10/12 md:w-7/12 mx-auto text-center">
                <h1 class="text-primary title mb-10 !leading-tight">
                    {{ __('about.cover.title') }}
                </h1>

                <h4 class="text-secondary">
                    {{ __('about.cover.subtitle') }}
                </h4>
            </div>
        </div>
    </section>

    <x-split-seccion-info-right img="{{ asset('img/plantatratadora.jpeg') }}">
        <h1 class="mb-7">
            {{ __('about.intro.title') }}
        </h1>
        <h4>
            {{ __('about.intro.description') }}
        </h4>
        <hr class="w-1/2 mt-10 border-t-4 border-secondary mx-auto md:ml-0">
    </x-split-seccion-info-right>

    <section class="py-10 md:py-24">
        <div class="container">
            <div class="w-9/12 text-center mx-auto">
                <h1>
                    {{ __('about.slogan') }}
                </h1>
            </div>
        </div>
    </section>

    <section class="pb-10 md:pb-24">
        <div class="container">
            <div class="w-full md:w-9/12 mx-auto">

                <!-- Biografias del documento enviado por Cynthia Landa -->

                <h2 class="text-center md:text-left text-primary mb-10">
                    {{ __('about.team.partners.title') }}
                </h2>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="{{ __('about.team.partners.one.name') }}"
                        jobtitle="{{ __('about.team.partners.one.jobtitle') }}"
                        img="CELUK_CarlosdelaParra.png"
                        gender="male">
                        {!! __('about.team.partners.one.bio') !!}
                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="{{ __('about.team.partners.two.name') }}"
                        jobtitle="{{ __('about.team.partners.two.jobtitle') }}"
                        img="CELUK_HectorPeterson.png"
                        gender="male">
                        {!! __('about.team.partners.two.bio') !!}
                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="{{ __('about.team.partners.three.name') }}"
                        jobtitle="{{ __('about.team.partners.three.jobtitle') }}"
                        img="CELUK_HectorArias.png"
                        gender="male">
                        {!! __('about.team.partners.three.bio') !!}
                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="{{ __('about.team.partners.four.name') }}"
                        jobtitle="{{ __('about.team.partners.four.jobtitle') }}"
                        img="CELUK_MartinDelgado.jpg"
                        gender="male">
                        {!! __('about.team.partners.four.bio') !!}
                    </x-team-member-card>
                </div>

                <div class="w-full mb-10 relative">
                    <img src="{{ asset('img/luto.png') }}" alt="Moño de luto" class="absolute w-10 z-10" style="top: 10px; left: 10px;">
                    <x-team-member-card 
                        name="{{ __('about.team.partners.five.name') }}"
                        jobtitle="{{ __('about.team.partners.five.jobtitle') }}"
                        img="CELUK_RobertoSalmon.jpg"
                        gender="male">
                        {!! __('about.team.partners.five.bio') !!}
                    </x-team-member-card>
                </div>

                <h2 class="text-center md:text-left text-primary mb-10">
                    {{ __('about.team.collaborators.title') }}
                </h2>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="{{ __('about.team.collaborators.one.name') }}"
                        jobtitle="{{ __('about.team.collaborators.one.jobtitle') }}"
                        img="CELUK_AndreaAlonso.jpg"
                        gender="female">
                        {!! __('about.team.collaborators.one.bio') !!}
                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="{{ __('about.team.collaborators.two.name') }}"
                        jobtitle="{{ __('about.team.collaborators.two.jobtitle') }}"
                        img="CELUK_BerthaSandoval.png"
                        gender="female">
                        {!! __('about.team.collaborators.two.bio') !!}
                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="{{ __('about.team.collaborators.three.name') }}"
                        jobtitle="{{ __('about.team.collaborators.three.jobtitle') }}"
                        img="CELUK_PatriciaPeterson.png"
                        gender="female">
                        {!! __('about.team.collaborators.three.bio') !!}
                    </x-team-member-card>
                </div>

                {{-- No se muestran los asesores pero se dejaran aqui por si es requerido ponerlos nuevamente
                    <h2 class="text-center md:text-left text-primary mb-10">
                        Asesores
                    </h2>

                    <div class="w-full mb-10">
                        <x-team-member-card 
                            name="Alberto Godínez Placencia"
                            jobtitle="Asesor"
                            img="CELUK_AlbertoGodinez.png"
                            gender="male">
                            Doctor en Economía Agrícola por El Colegio de Posgraduados (COLPOS), maestro en Desarrollo Regional por el Colegio de la Frontera Norte (COLEF), e Ingeniero Agrónomo con especialidad en Economía Agrícola por la Universidad Autónoma Chapingo (UACH). <br><br>
                            Cuenta con amplia experiencia en investigación económica cuantitativa aplicando los conceptos y herramientas de Economía Matemática, Matemática Financiera, Econometría y Estadística Matemática. En su carrera se ha especializado en la formulación, implementación, seguimiento, evaluación y mejora de Planes Estratégicos, Programas Operativo-Financieros anuales, así como en la formulación y evaluación de Proyectos de inversión empresarial, tanto en el sector privado, instituciones científico-académicas, agencias gubernamentales y organizaciones no gubernamentales. <br><br>
                            Se ha desempeñado como Agribusiness Intelligence Manager en Gebyacc Agrícola, como director de Planificación Estratégica y Monitoreo de la Inversión Pública en la Secretaría de Desarrollo Agropecuario del Gobierno del Estado de Baja California, y como director académico en Fundación Rafael Preciado Hernández, A.C. También ha sido profesor-investigar en la Universidad Autónoma de Baja California y en El Colegio de la Frontera Norte.
                        </x-team-member-card>
                    </div>

                    <div class="w-full mb-10">
                        <x-team-member-card 
                            name="Alfonso Camberos Urbina"
                            jobtitle="Asesor"
                            img="CELUK_AlfonsoCamberos.png"
                            gender="male">
                            
                            Egresado de la Licenciatura en Arquitectura por el Instituto Tecnológico de Tijuana con especialidad en Diseño urbano y la Maestría en Administración Integral del Ambiente por el Colegio de la Frontera Norte (COLEF) y el Centro de Investigación Científica y Enseñanza Superior de Ensenada (CICESE).  Ha sido consultor asociado en diversos proyectos estudios y programas de desarrollo urbano y ambiental, programas de desarrollo urbano estatales y municipales, así como consultor asociado en planeación, análisis del paisaje, caracterización del ecosistema y Sistemas de Información Geográfica para la certificación de desarrollos urbanos integrales y sustentables.  Durante cinco años condujo la Jefatura del Departamento de Planeación Urbana y Ordenamiento Territorial en el Instituto de Planeación de Desarrollo Municipal en Tecate, Baja California. Actualmente es coordinador de la consultoría Land GIS design dedicada al análisis del paisaje y Sistemas de Información Geográfica.
                            
                        </x-team-member-card>
                    </div>

                    <div class="w-full mb-10">
                        <x-team-member-card 
                            name="Carlos Orozco Riezgo"
                            jobtitle="Asesor"
                            img="CELUK_CarlosOrozco.png"
                            gender="male">
                            
                            Doctor en ciencias agrícolas con maestría en uso y gestión de agua de riego en regiones áridas. Es una autoridad en el uso de tecnologías innovadoras para la mejora de producción de cultivos como forrajes, aceitunas y trigo. Es pionero en la instalación de sistemas de drenaje agrícola subterráneos; en 1997 implementó un programa para instalar un sistema de drenaje subterráneo en el Valle de Mexicali. Ocupó el cargo de Subsecretario en la Secretaría de Agricultura y Ganadería de Baja California, y en dos ocasiones el cargo de director de Agricultura, así como director de Infraestructura de Irrigación Agrícola. En 2003 planificó y supervisó la instalación del "Sistema de Información en el Manejo del Agua de Riego de Baja California" (SIMARBC), para proveer de información actualizada sobre el clima a los agricultores. 
                            
                        </x-team-member-card>
                    </div>

                    <div class="w-full mb-10">
                        <x-team-member-card 
                            name="Efraín Carlos Nieblas Ortiz"
                            jobtitle="Asesor"
                            img="CELUK_EfrainNiebla.png"
                            gender="male">
                            
                            El Dr. Nieblas es Biólogo, maestro en Ingeniería de Sistemas y Doctor en Ciencias, por la Universidad Autónoma de Baja California, donde es investigador de tiempo completo adscrito al Instituto de Ingeniería de la Universidad Autónoma de Baja California. En el Sector Público, ha sido director de Auditoría Ambiental, director de  Gestión Ambiental y secretario de Protección al Ambiente del Gobierno del Estado de Baja California. También fungió como director de Protección al Ambiente del 23ro. Ayuntamiento de Mexicali. Actualmente se desempeña como director Operativo de Consorcio Ambiental S.C., firma de consultoría y asesoría en materia de cumplimiento ambiental, seguridad e higiene y protección civil. <br><br>

                            Ha sido Consejero Honorario de Organismos de la Sociedad Civil dedicados a actividades de educación ambiental y de restauración ecológica, como: Fundación Hélice, Restauremos el Colorado y Proyecto Fronterizo de Educación Ambiental. En el ámbito gremial, ha sido presidente de la Asociación de Biólogos de Mexicali (BIOMAC); y fue presidente del Primer Consejo Directivo del Colegio de Biólogos de Baja California (CBBC) y ocupa en la actualidad la presidencia del Consejo Técnico Consultivo. En noviembre de 2022, el Dr. Nieblas recibió el Reconocimiento Nacional al Mérito Profesional en las Ciencias Biológicas, así como la Medalla Juan Luis Cifuentes Lemus, otorgados por la Federación Mexicana de Colegios de Biólogos (FEMCOBI).
                            
                        </x-team-member-card>
                    </div>

                    <div class="w-full mb-10">
                        <x-team-member-card 
                            name="Joel García Campa"
                            jobtitle="Asesor"
                            gender="male">
                            
                            Es el director general de Estrategias SEGURAGUA, S.C., empresa líder en promover la autorregulación de los derechos y obligaciones de los concesionarios de aguas nacionales y permisionarios de descargas de aguas residuales en México. Asesor Jurídico de la Sección Mexicana de la Comisión Internacional de Límites y Aguas (CILA), tiene licenciatura en Derecho por la Universidad de Sonora y Maestría en Derecho Corporativo por la Universidad Anáhuac Campus Norte, Ciudad de México. Cuenta con más de 20 años de experiencia, ha sido consultor en materia de aguas nacionales para el gobierno federal, gobiernos Estatales y municipales. Laboró en la Comisión Nacional el Agua en la Ciudad de México en el área fiscal y posteriormente como director Jurídico en la Región Noroeste de la misma dependencia (1998-2010).
                            
                        </x-team-member-card>
                    </div>

                    <div class="w-full mb-10">
                        <x-team-member-card 
                            name="Juan Jaime Sánchez Meza"
                            jobtitle="Asesor"
                            img="CELUK_JaimeSanchez.png"
                            gender="male">
                            
                            Es licenciado en Derecho egresado de la Universidad de Sonora. Cuenta además con estudios sobre Población y Desarrollo del Fondo de las Naciones Unidas para Actividades en Materia de Población. Es también especialista en Administración Pública Municipal del Instituto Sonorense de Administración Pública. En el Colegio de Sonora obtuvo una especialidad en la Gestión Integrada de Cuencas Hidrográficas. Posteriormente obtuvo un diplomado en Gobierno y Gestión Local por el Centro de Investigación y Docencia Económica (CIDE) y cursó el diplomado Dr. Jorge Carpizo en Derechos Humanos del Instituto de Investigaciones Jurídicas de la UNAM.
                            
                        </x-team-member-card>
                    </div>
                --}}

                <!-- Terminan biografias del documento enviado por Cynthia Landa -->

            </div>
        </div>
    </section>

</x-guest-layout>