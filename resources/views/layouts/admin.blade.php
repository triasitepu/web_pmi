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
<header class="fixed top-0 left-72 right-0 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 border-b border-slate-200/50 dark:border-slate-800/50 z-40">
<div class="flex items-center gap-8">
<h1 class="font-black text-red-600 dark:text-red-500 font-headline tracking-tight uppercase text-sm">Dashboard Utama</h1>
<nav class="hidden md:flex gap-6">
<a class="text-red-600 border-b-2 border-red-600 pb-1 font-manrope text-sm tracking-tight" href="{{ route('admin.dashboard') }}">Dashboard</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-red-500 transition-all font-manrope text-sm tracking-tight" href="{{ route('admin.profil-submenu.index') }}">Kelola Profil</a>
</nav>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-800">
<div class="text-right">
<p class="text-xs font-bold text-slate-900 dark:text-white leading-none">{{ auth()->user()->nama_pengguna ?? 'Admin' }}</p>
</div>
<img alt="Administrator Profile" class="w-8 h-8 rounded-full object-cover border border-slate-200" data-alt="professional portrait of a confident middle-aged man in business attire, clean grey background, soft studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOh27tdFfyiOjhTq67ooP2rK7W-kusvrkOGenRDQ2TnP7zHmPmJAWolaBYfGThLCj1v-l_4f-cFcpHye2OWih9KX0ZXZpLHGIIEROcrcbgEusxVFU1dd0mlV3zojD5Ejyf8WYK1T2QLmVKDCoQQH5ZqOIq4Iy-UF3gbPzEDKoU6wcpdL4n5YeMgX5ItVy0YIIWs9QMOypZBdIxp0As_sRDRwbEIHWzpRSN2o31IKNK8rT6nrvfABk_O8psWeZUdcwMt4rBBnjzjQ"/>
</div>
</div>
</header>

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