import './bootstrap';

// 1. jQuery dulu
import $ from 'jquery';
window.$ = window.jQuery = $;

// 2. baru plugin yang butuh jQuery
import 'owl.carousel';

// 3. baru logic kamu
setTimeout(() => {
    console.log('Echo check:', window.Echo);
}, 3000);

$('#home-clients').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    nav: false,
    dots: false,
    responsive: {
        0: { items: 2 },
        600: { items: 3 },
        1000: { items: 5 }
    }
});

window.Echo.channel('visits')
    .listen('.visit.updated', (e) => {
        console.log('🔥 EVENT MASUK:', e);
    });