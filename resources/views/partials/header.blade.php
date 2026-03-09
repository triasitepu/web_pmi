<header>
    <div class="top-bar-right d-flex align-items-center text-md-left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col d-flex align-items-center contact-info">
                    <div>
                        <i data-feather="phone"></i> (021) 775 6643
                    </div>
                    <div>
                        <i data-feather="mail"></i>
                        <a style="color: black;">info@pmimagetan.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg header-fullpage sticky-top">
        <div class="container text-nowrap">
            <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                <a class="navbar-brand rounded-bottom light-bg" href="/">
                    <img src="{{ asset('images/logo.png') }}" height="100" alt="PMI Logo">
                    <span class="ms-3 fw-bold">Magetan</span>
                </a>
            </div>

            <div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center">
                <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>


                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('layanan.ambulans') }}">Ambulans</a></li>
                            <li><a class="dropdown-item" href="{{ route('layanan.bencana') }}">Penanggulangan Bencana</a></li>
                            <li><a class="dropdown-item" href="#">Diklat Bersertifikat</a></li>
                            <li><a class="dropdown-item" href="#">Donor Darah</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('relawan') }}">Relawan</a>
                    </li>
                     <!-- LOGIN ADMIN -->
                    <li class="nav-item ms-lg-3">
                        <a href="{{ route('login') }}"
                           class="btn btn-danger px-4 py-2 rounded-pill fw-semibold">
                            <i class="bi bi-person-lock me-1"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.header-fullpage');
        if (window.scrollY > 0) { // scroll lebih dari 0
            header.classList.add('fixed');
        } else {
            header.classList.remove('fixed');
        }
    });
</script>

</header>
