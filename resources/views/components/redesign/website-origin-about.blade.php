@php
$image = asset('redesign/img/origin/origen_sobrenuestronombre.jpg');
@endphp
<section class="flex flex-col flex-col-reverse md:flex-row items-stretch min-h-[300px] lg:min-h-[500px]">
    <div class="w-full md:w-1/2 bg-primary p-8 flex flex-col items-center justify-center">
        <h3 class="text-white text-lg lg:text-2xl text-center font-medium wow animate__animated animate__fadeInRight">
            {{ __('2026/origin.about.description') }}
        </h3>

        {{--
        <a href="#" class="block text-center text-white border-2 border-white py-4 px-10 mt-16 hover:bg-white hover:text-secondary transition-colors duration-300 wow animate__animated animate__fadeInDown" data-wow-delay="0.4s">
            Conócenos
        </a>
        --}}
    </div>
    <div class="min-h-[250px] md:min-h-0 w-full md:w-1/2 bg-cover bg-center relative overflow-hidden" style="background-image: url('{{ $image }}')">
        <div class="hidden md:block absolute top-0 left-0 bottom-0 w-[150px] bg-primary bg-opacity-30 wow animate__animated animate__fadeInLeft"></div>
        <div class="block md:hidden absolute left-0 bottom-0 right-0 h-[90px] bg-primary bg-opacity-30 wow animate__animated animate__fadeInUp"></div>
    </div>
</section>