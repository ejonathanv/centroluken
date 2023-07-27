<section>
    <div class="flex flex-col md:flex-row items-center justify-start relative">
        <div class="full_bg_section" style="background-image: url({{ $img }})"></div>
        <div class="w-full md:w-1/3 ml-auto text-white relative z-10 p-7 md:p-24 bg-primary bg-opacity-75 text-center md:text-left">
            {{ $slot }}
        </div>
    </div>
</section>