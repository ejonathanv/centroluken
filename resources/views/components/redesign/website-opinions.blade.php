<section class="py-10 bg-primary">
    <div class="container">
        <h1 class="text-center text-white">Opinión</h1>
    </div>
</section>

<div class="py-32">
    <div class="container">
        <div class="flex items-center justify-between">
            @foreach($opinions as $opinion)
                <div class="w-1/3 flex flex-col items-center justify-center space-y-12">
                    <a href="#" class="relative inline-block">
                        <div class="w-60 h-60 bg-primary rounded-full absolute right-7"></div>
                        <div class="w-60 h-60 bg-gray-100 rounded-full relative z-2" style="background-image: url('{{ asset($opinion->cover) }}'); background-size: cover; background-position: center;"></div>
                    </a>

                    <h4 class="text-center">{{ $opinion->title }}</h4>
                </div>
            @endforeach
        </div>
    </div>
</div>