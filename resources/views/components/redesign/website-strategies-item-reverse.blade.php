<div class="flex items-stretch min-h-[500px]">
    <div class="w-1/2">
        <div class="bg-primary p-10 relative -top-10 z-10">
            <div class="absolute top-0 -right-[150px] bottom-0 w-[150px] bg-primary"></div>
            <h3 class="text-white text-2xl font-medium">
                {{ $title }}
            </h3>
        </div>
        <div class="p-10 wow animate__animated animate__fadeInLeft" data-wow-delay="0.4s">
            {{ $description }}
        </div>
    </div>
    <div class="w-1/2 bg-cover bg-center relative overflow-hidden" style="background-image: url('{{ $image }}')">
        <div class="absolute top-0 left-0 bottom-0 w-[150px] bg-primary bg-opacity-30 wow animate__animated animate__fadeInLeft" data-wow-delay="0.4s"></div>
    </div>
</div>