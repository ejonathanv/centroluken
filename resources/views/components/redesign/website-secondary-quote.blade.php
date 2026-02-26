<section class="bg-secondary py-10 md:py-16">
    <div class="container">
        <div class="w-full md:w-7/12 mx-auto text-center">
            <h2 class="text-center text-white text-lg lg:text-3xl leading-relaxed wow animate__animated animate__fadeInUp mb-4">
                @if($category)
                    {{ $category }}
                @else
                    {{ $quote }}
                @endif
            </h2>
        </div>
    </div>
</section>