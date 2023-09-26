@section('title', 'Semblanzas')

<x-guest-layout header="header2">

    <section class="py-10 md:py-24">
        <div class="container">
            <div class="w-10/12 md:w-7/12 mx-auto text-center">
                <h1 class="text-primary title mb-10 !leading-tight">
                    Nos dedicamos a estudiar, diseñar, proponer e implementar estrategias y acciones.
                </h1>

                <h4 class="text-secondary">
                    Buscamos la preservación, administración responsable y aprovechamiento del agua y los recursos naturales en alianza con entidades públicas y privadas.
                </h4>
            </div>
        </div>
    </section>

    <x-split-seccion-info-right img="{{ asset('img/plantatratadora.jpeg') }}">
        <h1 class="mb-7">
            Talento Interdisciplinario
        </h1>
        <h4>
            Somos un equipo de especialistas con más de 30 años de experiencia en la gestión del agua y los recursos naturales.
        </h4>
        <hr class="w-1/2 mt-10 border-t-4 border-secondary mx-auto md:ml-0">
    </x-split-seccion-info-right>

    <section class="py-10 md:py-24">
        <div class="container">
            <div class="w-9/12 text-center mx-auto">
                <h1>
                    Desarrollamos estrategias a partir de diagnósticos y análisis para el corto, mediano y largo plazos, con base en elementos de las ciencias del medio físico y social.
                </h1>
            </div>
        </div>
    </section>

    <section class="pb-10 md:pb-24">
        <div class="container">
            <div class="w-full md:w-9/12 mx-auto">

                <!-- Biografias del documento enviado por Cynthia Landa -->

                <h2 class="text-primary mb-10">
                    Socios Fundadores
                </h2>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Carlos A. de la Parra Rentería"
                        jobtitle="Socio fundador"
                        img="CELUK_CarlosdelaParra.png"
                        gender="male">

                        Académico con más de 30 años de estudio en temas de agua y medio ambiente en la frontera México-Estados Unidos. Es ingeniero civil con doctorado en Planificación Ambiental por la Universidad de Michigan. Fue profesor investigador en El Colegio de la Frontera Norte, y ha sido Delegado Federal en Baja California y Representante en la Embajada de México en Washington por la Secretaría de Medio Ambiente y Recursos Naturales (SEMARNAT). Preside Restauremos el Colorado, una Asociación Civil que opera en Mexicali en la gestión del agua para la restauración de ecosistemas, y es miembro del Consejo Directivo del Banco de Desarrollo de América del Norte (BDAN) como Representante de la Sociedad Civil Mexicana.

                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Héctor I. Peterson Villalobos"
                        jobtitle="Socio fundador"
                        img="CELUK_HectorPeterson.png"
                        gender="male">

                        Ingeniero Civil formado en el Instituto Tecnológico y de Estudios Superiores de Monterrey (ITESM); realizó la Maestría en Desarrollo Urbano con especialidad en Sistemas de Información Geográfica en la Universidad Iberoamericana (UIA), así como diplomados de Desarrollo de Proyectos de Inversión Publico-Privada, Desarrollo Gerencial, Desarrollo Urbano y Contabilidad Administrativa. Con más de 30 años de experiencia en el desarrollo de proyectos integrales y de infraestructura hidráulica de gran alcance, formó la empresa Libra Ingenieros Civiles S. A. de C. V., desde la cual ha participado en importantes proyectos regionales destacando, entre ellos, los primeros de desalinización para uso público urbano en el país, así como en alianzas para estudios binacionales con Estados Unidos para infraestructura hídrica. También ha participado en diversos planes y proyectos para el manejo del agua en Baja California, Baja California Sur, Sonora, Zacatecas y Quintana Roo. Ha trabajado desde la sociedad civil para impulsar la inversión en infraestructura hídrica desde un enfoque productivo, además de ser impulsor de proyectos bajo la modalidad de asociación público-privada en la región.

                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Héctor Arias"
                        jobtitle="Socio fundador"
                        gender="male">
                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Martín Alberto Delgado Saldívar"
                        jobtitle="Socio fundador"
                        gender="male">

                        Experiencia en presupuestos gubernamentales basados en evaluación por resultados y planeación participativa, evaluación de proyectos, análisis de costo y beneficio y valuación de empresas. Ingeniero Industrial (ITSON) con Maestría en Ingeniería Industrial (Texas A&M University), Diplomado en Alta Dirección de Empresas (IPADE) y Doctor en Desarrollo Regional (CIAD). Actualmente participa como asesor externo del H. Ayuntamiento de Hermosillo y el H. Ayuntamiento de Yécora. Ha realizado trabajos de consultoría para las empresas o instituciones como SICTUHSA, SOLISON, GOODNESS, MERCAMAR, CIAD-CONAGUA, PRODEREM, WWF, CILA, Consejo de Educación de Puebla, US-AID, CONAGUA, PEÑOLES, CONAFOR, CEA-Sonora, y la OMM-ONU entre otras. Fue Jefe del Departamento de Administración en la Universidad de Sonora e imparte materias en las Maestría en Administración y en Comercio Exterior y Aduanas además de las Licenciaturas del Finanzas y Negocios Internacionales. Fue Director General del Instituto del Medio Ambiente y el Desarrollo Sustentable del Estado de Sonora, del Centro de Investigación y Desarrollo de los Recursos Naturales de Sonora y del Centro Ecológico de Sonora, de Blazer Internacional (Cananea-Naco-Besbee), Fábrica de Tubos Vibroprensados S.A, FATUVISA (Hermosillo) y Poliestireno de Sonora (Ciudad Obregón). 

                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Roberto Fernando Salmón Castelo"
                        jobtitle="Socio fundador"
                        gender="male">

                        Asesor de instituciones públicos y privadas en materia de gestión internacional del agua y manejo de recursos hídricos. Egresado de la Universidad de Arizona como ingeniero agrónomo, con maestría en economía agrícola y en proceso de titulación de estudios doctorales en Administración de Recursos Hidráulicos de la misma universidad. Se desempeñó como Comisionado mexicano ante la Comisión Internacional de Límites y Aguas entre México y Estados Unidos (CILA) desde abril de 2009 hasta mayo de 2020. Como líder de negociación del grupo mexicano, logró la firma de 11 acuerdos binacionales (Actas) con Estados Unidos, que son vinculantes y de cumplimiento obligatorio para ambos países. Ha sido funcionario en la Comisión Nacional del Agua como Gerente de la Región II Noroeste (2002 – 2006) y director general del Organismo de Cuenca Noroeste (2006 – 2009) y director de Planeación y Proyectos Especiales en el Centro de Investigaciones y Desarrollo de los Recursos Naturales del Estado de Sonora (CIDESON). 

                    </x-team-member-card>
                </div>

                <h2 class="text-primary mb-10">
                    Colaboradores
                </h2>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Andrea Alonso López"
                        jobtitle="Colaboradora"
                        gender="female">
                        
                        Con más de 10 años de experiencia en la coordinación y supervisión de proyectos,  ha participado en el desarrollo de programas, planes, estudios y proyectos binacionales en materia recursos hídricos y desarrollo urbano. Ingeniera química por la UABC con maestría en ciencias con especialidad en Sistemas Ambientales en el área de acentuación de Manejo Sostenible del Agua en por el Instituto Tecnológico y de Estudios Superiores de Monterrey. Ha trabajado en el sector privado y colaborado con la sociedad civil; se desempeñó como servidora pública en el Instituto Metropolitano de Planeación de Tijuana en el área ambiental del 2019 al 2022. Ha enfocado su carrera a integrar los aspectos sociales y ambientales en el desarrollo de estrategias e implementación de herramientas que fomenten un desarrollo urbano sostenible, a través de esfuerzos participativos y multidisciplinarios.

                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Bertha Alicia Sandoval Franco"
                        jobtitle="Colaboradora"
                        img="CELUK_BerthaSandoval.png"
                        gender="female">
                        
                        Con formación en las áreas de Humanidades y de Administración, cuenta con una vasta experiencia al frente de equipos multidisciplinarios. Fue Coordinadora de Comunicación en El Colegio de la Frontera Norte, y subdirectora de Promoción y Difusión en la Universidad Tecnológica de Tijuana. Previamente tuvo a su cargo el área de Relaciones Públicas de la Cervecería Cuauhtémoc Moctezuma Planta Tecate. En el sistema de Colegios de Estudios Científicos y Tecnológicos de Baja California, fue directora del plantel Cachanilla. Paralelamente, ha sido profesora en la Facultad de Humanidades y Ciencias Sociales en la Universidad Autónoma de Baja California Campus Tijuana. Colabora también en Restauremos El Colorado, A.C. como coordinadora de programas del Consejo Directivo.
                        
                    </x-team-member-card>
                </div>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Patricia Peterson Villalobos"
                        jobtitle="Colaboradora"
                        img="CELUK_PatriciaPeterson.png"
                        gender="female">
                        
                        Tiene más de 30 años de experiencia en la elaboración de proyectos integrales y ha dirigido proyectos de desarrollo urbano, infraestructura y edificación. Arquitecta por la Universidad Autónoma de Baja California (UABC), con Maestría en Desarrollo Urbano por la UIA-Tijuana, y cursos de especialidad en Planeación y Desarrollo de Infraestructura y Desarrollo de Proyectos de Inversión Publico-Privada. Fue secretaria de Desarrollo Territorial, Urbano y Ambiental de Tijuana en el XXIII Ayuntamiento durante 2019-2021. Ha participado en importantes proyectos regionales y en estudios binacionales sobre desalinización, diversos planes maestros para el manejo del agua en Sonora, Zacatecas y Quintana Roo. Fue secretaria de Desarrollo Territorial, Urbano y Ambiental de Tijuana en el XXIII Ayuntamiento durante 2019-2021. Tiene amplia trayectoria gremial, fue presidente del Colegio de Arquitectos de Tijuana (2008-2010), y fundadora de la Sociedad de Urbanismo de la Zona Metropolitana de Tijuana.
                        
                    </x-team-member-card>
                </div>

                <h2 class="text-primary mb-10">
                    Asesores
                </h2>

                <div class="w-full mb-10">
                    <x-team-member-card 
                        name="Alberto Godínez"
                        jobtitle="Asesor"
                        img="CELUK_AlbertoGodinez.png"
                        gender="male">
                        
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
                        
                        Doctor en ciencias agrícolas con maestría en uso y gestión de agua de riego en regiones áridas. Es una autoridad en el uso de tecnologías innovadoras para la mejora de producción de cultivos como forrajes, aceitunas y trigo. Es pionero en la instalación de sistemas de drenaje agrícola subterráneos; en 1997 implementó un programa para instalar un sistema de drenaje subterráneo en el Valle de Mexicali. Ocupó el cargo de Subsecretario en la Secretaría de Agricultura y Ganadería de Baja California, y en dos ocasiones el cargo de director de Agricultura, así como director de Infraestructura de Irrigación Agrícola. En 2003 planificó y supervisó la instalación del “Sistema de Información en el Manejo del Agua de Riego de Baja California” (SIMARBC), para proveer de información actualizada sobre el clima a los agricultores. 
                        
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

                <!-- Terminan biografias del documento enviado por Cynthia Landa -->

            </div>
        </div>
    </section>

</x-guest-layout>