<section class="h-[300px] md:h-[80vh] bg-gray-100 relative" x-data="{
    init() {
        const slider = $('.redesign_slider');
        slider.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: false,
            items: 1,
            autoplayHoverPause: true,
        });
        slider.on('changed.owl.carousel', function(e) {
            slider.find('video').each(function() { this.pause(); });
            setTimeout(() => {
                const activeItem = slider.find('.owl-item.active').first();
                const current = activeItem.find('video')[0];
                if (current) {
                    current.currentTime = 0;
                    current.play().catch(() => {});
                }
            }, 50);
        });
        this.$nextTick(() => {
            setTimeout(() => {
                const first = slider.find('.owl-item.active video')[0];
                if (first) first.play().catch(() => {});
            }, 100);
        });
    },
    prev() {
        $('.redesign_slider').trigger('prev.owl.carousel');
    },
    next() {
        $('.redesign_slider').trigger('next.owl.carousel');
    }
}">
    <div class="owl-carousel redesign_slider">
        @php 
            $imageThree = asset('redesign/img/home/slides/1000_F_378132525_33pkqaP9X8a6d8qQmDj2Fy6j4UV9E278.webp');
        @endphp 
        <div class="redesign_slider_item relative overflow-hidden">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto" data-slide-index="0">
                <source src="{{ asset('videos/video_agua.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="redesign_slider_item relative overflow-hidden">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto" data-slide-index="1">
                <source src="{{ asset('videos/video_remo_agua.mp4') }}" type="video/mp4">
            </video>
        </div>
        {{-- Se oculta este slide por el momento
        <div class="redesign_slider_item" 
            style="background-image: url('{{$imageThree}}');">
        </div>
        --}}
    </div>

    <a href="#" @click.prevent="prev()" class="absolute left-2 md:left-16 top-1/2 -translate-y-1/2 z-10 text-primary text-xl bg-white rounded-sm p-2 w-10 h-10 flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-300 shaodw-sm hover:shadow-md">
        <i class="fa-solid fa-arrow-left"></i>
    </a>
    <a href="#" @click.prevent="next()" class="absolute right-2 md:right-16 top-1/2 -translate-y-1/2 z-10 text-primary text-xl bg-white rounded-sm p-2 w-10 h-10 flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-300 shadow-sm hover:shadow-md">
        <i class="fa-solid fa-arrow-right"></i>
    </a>
</section>