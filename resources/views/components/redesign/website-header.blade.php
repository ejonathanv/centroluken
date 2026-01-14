<header class="bg-white shadow relative z-50">
    <div class="bg-primary w-[35%] md:w-[40%] lg:w-[50%] h-full absolute top-0 right-0 z-1">
        <img src="{{ asset('img/redesign/header-curvas.png') }}" 
            alt="" 
            class="absolute w-auto left-[-70px] lg:left-[-270px] h-full w-auto bottom-0">
    </div>
    <div class="container" x-data="{
        mobileMenu: false,
    }">
        <div class="flex items-center justify-between">
            <div class="w-2/3 lg:w-1/3">
                <a href="#">
                    <img src="{{ asset('img/centro-luken-logo.svg') }}" 
                        alt="Centro Luken - De Estrategias en Agua y Medio Ambiente"
                        class="h-12 w-auto">
                </a>
            </div>

            <nav class="lg:flex items-center justify-end redesign-nav bg-primary py-8 w-1/3 lg:w-2/3 relative z-2">
                <ul class="hidden lg:flex items-center space-x-10">
                    <li>
                        <a href="#" class="text-white font-semibold text-sm hover:text-secondary">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-semibold text-sm hover:text-secondary">
                            Filosofía
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-semibold text-sm hover:text-secondary">
                            Origen
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-semibold text-sm hover:text-secondary">
                            Equipo
                        </a>
                    </li>
                    <li class="submenu">
                        <span href="#" class="text-white font-semibold text-sm cursor-pointer flex items-center space-x-2">
                            <span>Materiales</span>
                            <i class="lni lni-chevron-down"></i>
                        </span>
                        <div class="submenu-content">
                            <ul>
                                <li>
                                    <a href="#">
                                        Estudios
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">
                                        Recursos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="text-white font-semibold text-sm hover:text-secondary">
                            Alianzas
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white font-semibold text-sm hover:text-secondary">
                            Contacto
                        </a>
                    </li>
                </ul>

                <ul class="flex lg:hidden items-center justify-end space-x-4">
                    <li>
                        <a href="#" class="text-white font-semibold text-sm hover:text-secondary relative"
                            style="z-index: 1001;"
                            @click.prevent="mobileMenu = !mobileMenu">
                            <i x-show="!mobileMenu" class="lni lni-menu-hamburger-1 text-2xl md:text-3xl"></i>
                            <i x-show="mobileMenu" class="lni lni-xmark text-2xl md:text-3xl"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="mobile-menu" :class="{ 'active': mobileMenu }">
            
        </div>
    </div>
</header>
