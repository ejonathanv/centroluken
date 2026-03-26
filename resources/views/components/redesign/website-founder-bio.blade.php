<section class="py-10">
    <div class="container">
        <div class="text-center">
            <h2>Socios fundadores</h2>
        </div>
    </div>
</section>

<section class="bg-primary py-20">
    <div class="container text-center">
        <h2 class="text-3xl text-white">
            {{ $name }}
        </h2>
    </div>
</section>

<section class="py-20">
    <div class="container flex flex-col md:flex-row items-start space-y-10 md:space-y-0 md:space-x-10">
        <div class="w-full md:w-7/12">
            <img src="{{ $pictureOne }}" alt="Foto de {{ $name }}">
        </div>
        <div class="w-full md:w-5/12">
            <img src="{{ $pictureTwo }}" alt="Foto de {{ $name }}">
            <div class="py-10">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>