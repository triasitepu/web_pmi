import './bootstrap';
$('#home-clients').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    nav: false,
    dots: false,
    responsive:{
        0:{ items:2 },
        600:{ items:3 },
        1000:{ items:5 }
    }
});
