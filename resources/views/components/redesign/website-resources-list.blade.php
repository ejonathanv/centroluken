<section class="py-10 md:py-16 bg-white">

    <div class="container">
        <div class="w-full mb-7 px-4">
            <select name="" id="" class="w-full p-2 border-2 border-secondary rounded-md">
                <option value="">Todos</option>
                <option value="">Agua</option>
                <option value="">Agricultura Regenerativa</option>
                <option value="">Agrivoltáica</option>
                <option value="">Rio Colorado</option>
                <option value="">Energía Solar</option>
                <option value="">Cambio Climático</option>
                <option value="">Suelo</option>
                <option value="">Tratamiento y Reutilización de Aguas</option>
                <option value="">Desalinización de Agua y otras fuentes de suministro</option>
            </select>
        </div>
    </div>

    <div class="container flex items-start space-x-0 md:space-x-10">
        <div class="w-1/3 hidden md:block">
            <nav class="flex flex-col space-y-7">
                <x-redesign.website-resources-link item="Agua" />
                <x-redesign.website-resources-link item="Agricultura Regenerativa" />
                <x-redesign.website-resources-link item="Agrivoltáica" />
                <x-redesign.website-resources-link item="Rio Colorado" />
                <x-redesign.website-resources-link item="Energía Solar" />
                <x-redesign.website-resources-link item="Cambio Climático" />
                <x-redesign.website-resources-link item="Suelo" />
                <x-redesign.website-resources-link item="Tratamiento y Reutilización de Aguas" />
                <x-redesign.website-resources-link item="Desalinización de Agua y otras fuentes de suministro" />
            </nav>
        </div>
        <div class="w-full md:w-2/3">
            <div class="flex flex-stretch flex-col md:flex-row flex-wrap">
                <div class="w-full md:w-1/2">
                    <x-redesign.website-resources-card 
                        title="Este es el titulo"
                        description="Este es la descripción"
                        image="https://placehold.co/600x400"/>
                </div>
                <div class="w-full md:w-1/2">
                    <x-redesign.website-resources-card 
                            title="Este es el titulo"
                            description="Este es la descripción"
                            image="https://placehold.co/600x400"/>
                </div>
                <div class="w-full md:w-1/2">
                    <x-redesign.website-resources-card 
                            title="Este es el titulo"
                            description="Este es la descripción"
                            image="https://placehold.co/600x400"/>
                </div>
                <div class="w-full md:w-1/2">
                    <x-redesign.website-resources-card 
                            title="Este es el titulo"
                            description="Este es la descripción"
                            image="https://placehold.co/600x400"/>
                </div>
                <div class="w-full md:w-1/2">
                    <x-redesign.website-resources-card 
                            title="Este es el titulo"
                            description="Este es la descripción"
                            image="https://placehold.co/600x400"/>
                </div>
            </div>
        </div>
    </div>
</section>