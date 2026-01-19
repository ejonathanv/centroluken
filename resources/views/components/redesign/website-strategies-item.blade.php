<div class="flex flex-col md:flex-row items-stretch min-h-[300px] lg:min-h-[500px]">
    <div class="min-h-[250px] md:min-h-0 w-full md:w-1/2 bg-cover bg-center relative overflow-hidden" style="background-image: url('{{ $image }}')">
        <div class="hidden md:block absolute top-0 right-0 bottom-0 w-[75px] lg:w-[150px] bg-primary bg-opacity-30 wow animate__animated animate__fadeInRight" data-wow-delay="0.4s"></div>
        <div class="block md:hidden absolute right-0 bottom-0 h-[90px] w-full bg-primary bg-opacity-30 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s"></div>
    </div>
    <div class="w-full md:w-1/2">
        <div class="bg-primary p-4 lg:p-10 relative top-0 lg:-top-10 z-10">
            <div class="hidden md:block absolute top-0 -left-[75px] lg:-left-[150px] bottom-0 w-[75px] lg:w-[150px] bg-primary"></div>
            <h3 class="text-white text-lg lg:text-2xl font-medium">
                {{ $title }}
            </h3>
        </div>
        <div class="p-4 lg:p-10 wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
            {{ $description }}
        </div>
    </div>
</div>