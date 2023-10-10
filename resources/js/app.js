import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function(){
    var owlCarousel = $('.owl-carousel');
    owlCarousel.owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots: false,
        autoplay: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1200:{
                items:1
            }
        }
    });
    $('.slider_control.left').click(function() {
        event.preventDefault();
        owlCarousel.trigger('prev.owl.carousel');
    });

    $('.slider_control.right').click(function() {
        event.preventDefault();
        owlCarousel.trigger('next.owl.carousel');
    });
});


const { createApp } = Vue;

createApp({
    data() {
        return {
            showMobileMenu: false,
            showLanguage: false
        }
    },
    methods: {
        toggleMobileMenu() {
            this.showMobileMenu = !this.showMobileMenu;
        },
        toggleLanguage(){
            this.showLanguage = !this.showLanguage;
        }
    }
}).mount('#app')