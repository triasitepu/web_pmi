<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Panel')</title>

  {{-- Bootstrap & Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  {{-- Tailwind --}}
  <script src="https://cdn.tailwindcss.com"></script>

<style>

body{
  background-color:#f9fafb;
}

/* ======================
   NAVBAR
====================== */

.navbar{
  background-color:white;
  height:80px;
}

/* ======================
   SIDEBAR
====================== */

#sidebar{
  width:260px;
  top:80px;
  background:white;
  border-right:1px solid #e5e5e5;
  height:100vh;
  overflow-y:auto;
}

/* menu link */

#sidebar a,
#sidebar .nav-link{
  color:#333;
  text-decoration:none;
  padding:10px 14px;
  display:flex;
  align-items:center;
  border-radius:8px;
  transition:all .2s ease;
}

/* hover */

#sidebar a:hover,
#sidebar .nav-link:hover{
  background:#dc3545;
  color:white;
}

#sidebar a:hover i{
  color:white;
}

/* submenu */

#sidebar ul .nav-link{
  font-size:14px;
  padding-left:32px;
}

/* garis */

#sidebar hr{
  margin:12px 0;
  opacity:.2;
}

/* ======================
   CONTENT
====================== */

.main-content{
  margin-left:260px;
  padding:100px 30px 30px;
}

/* underline */

.underline{
  width:220px;
  height:3px;
  background-color:#dc2626;
  border-radius:2px;
  margin-top:6px;
}

/* ======================
   RESPONSIVE
====================== */

@media(max-width:1024px){

  #sidebar{
    position:relative;
    width:100%;
    height:auto;
  }

  .main-content{
    margin-left:0;
    padding:1rem;
  }

}

/* menu aktif */
#sidebar .nav-link.active{
  background:#dc3545;
  color:white;
}

#sidebar .nav-link.active i{
  color:white;
}

/* icon panah */
#sidebar .bi-chevron-down{
  transition: transform .3s ease;
}

/* panah berputar saat terbuka */
#sidebar .nav-link[aria-expanded="true"] .bi-chevron-down{
  transform: rotate(180deg);
}

</style>

@stack('styles')

</head>

<body class="bg-gray-50">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top py-2 shadow-sm">
  <div class="container d-flex justify-content-between align-items-center">

    <a class="navbar-brand fw-bold text-dark d-flex align-items-center" href="{{ route('admin.dashboard') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Logo PMI" width="100" class="me-2">

      <div class="d-flex flex-column">
        <span style="font-size:0.95rem;font-weight:600;">
          PMI Kabupaten Magetan
        </span>
        <small style="font-size:0.75rem;color:#555;">
          Palang Merah Indonesia
        </small>
      </div>

    </a>

    <form method="POST" action="{{ route('logout') }}" class="m-0">
      @csrf
      <button type="submit"
              class="rounded-pill bg-red-600 hover:bg-red-700 text-white px-4 py-2 fw-semibold border-0">
        <i class="bi bi-box-arrow-right me-1"></i> Logout
      </button>
    </form>

  </div>
</nav>

{{-- Sidebar --}}
@include('admin.sidebar')

{{-- Konten --}}
<main class="main-content">
  @yield('content')
</main>

@stack('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>