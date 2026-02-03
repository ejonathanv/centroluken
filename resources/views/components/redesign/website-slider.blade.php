<section class="h-[300px] md:h-[80vh] bg-gray-100 relative" x-data="{
    init() {
        $('.redesign_slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: true,
            items: 1,
            autoplayHoverPause: true,
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
            $imageOne = asset('redesign/img/home/slides/1000_F_1001285177_usjnvA3zRwVjZbD04zMO6HhoBX74n2Zb.webp');
            $imageTwo = asset('redesign/img/home/slides/1000_F_344077939_A14Tqa3QRye8p4mOWTsDZSK0Anbz6x36.webp');
            $imageThree = asset('redesign/img/home/slides/1000_F_378132525_33pkqaP9X8a6d8qQmDj2Fy6j4UV9E278.webp');
        @endphp 
        <div class="redesign_slider_item" 
            style="background-image: url('{{$imageOne}}');">
        </div>
        <div class="redesign_slider_item" 
            style="background-image: url('{{$imageTwo}}');">
        </div>
        <div class="redesign_slider_item" 
            style="background-image: url('{{$imageThree}}');">
        </div>
    </div>

    <a href="#" @click.prevent="prev()" class="absolute left-2 md:left-16 top-1/2 -translate-y-1/2 z-10 text-primary text-xl bg-white rounded-sm p-2 w-10 h-10 flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-300 shaodw-sm hover:shadow-md">
        <i class="fa-solid fa-arrow-left"></i>
    </a>
    <a href="#" @click.prevent="next()" class="absolute right-2 md:right-16 top-1/2 -translate-y-1/2 z-10 text-primary text-xl bg-white rounded-sm p-2 w-10 h-10 flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-300 shadow-sm hover:shadow-md">
        <i class="fa-solid fa-arrow-right"></i>
    </a>
</section>