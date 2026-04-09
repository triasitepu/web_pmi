<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Template -->
    <link href="{{ asset('css/animate.min_1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home-main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/czm-chat-support.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    <title>Palang Merah Indonesia | Magetan</title>

    <!-- Custom CSS untuk perbaiki panah dropdown Bootstrap 5 -->
    <style>
        /* Pastikan panah dropdown tampil normal di Bootstrap 5 */
        .navbar .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-left: .3em solid transparent;
        }
    </style>
</head>

<body>

    <!-- Header -->
    @include('partials.header')

    <!-- Konten Halaman -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')


    <!-- chatbox -->
    @include('partials.chatbox')

    <!-- chat -->
    <button id="chatToggle"
class="fixed bottom-6 right-6 w-14 h-14 bg-red-600 text-white rounded-full shadow-lg z-50">
💬
</button>

    <!-- JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app-functions.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jflickrfeed.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/site-custom.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/moment-timezone-with-data.min.js') }}"></script>
    <script src="{{ asset('js/jqueryTimeago_en.js') }}"></script>
    <script src="{{ asset('js/czm-chat-support.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/home-slider.js') }}"></script>

    <script>
document.addEventListener("DOMContentLoaded", function(){

const toggle = document.getElementById('chatToggle');
const box = document.getElementById('chatBox');
const closeBtn = document.getElementById('closeChat');
const content = document.getElementById('chatContent');

if(toggle){
    toggle.onclick = () => box.classList.toggle('hidden');
}

if(closeBtn){
    closeBtn.onclick = () => box.classList.add('hidden');
}

// function tetap sama...
});
</script>

</body>
</html>
