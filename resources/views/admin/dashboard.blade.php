<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin PMI</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body { background-color: #ffffff; }

    .navbar {
      background-color: #ffffff;
    }

    .main-content {
    margin-left: 260px;
    padding: 100px 30px;
    }

    .underline {
      width: 220px;
      height: 3px;
      background-color: #dc2626; /* merah PMI */
      border-radius: 2px;
      margin-top: 6px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top py-2 shadow-sm">
  <div class="container d-flex justify-content-between align-items-center">

    <a class="navbar-brand fw-bold text-dark d-flex align-items-center" href="{{ route('admin.dashboard') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Logo PMI" width="100" class="me-2">
      <div class="d-flex flex-column">
        <span style="font-size: 0.95rem; font-weight: 600;">
          PMI Kabupaten Magetan
        </span>
        <small style="font-size: 0.75rem; color: #555;">
          Palang Merah Indonesia
        </small>
      </div>
    </a>

    <form method="POST" action="{{ route('logout') }}" class="logout-btn m-0">
        @csrf
     <button type="submit" class="rounded-pill bg-red-600 hover:bg-red-700 text-white px-4 py-2 fw-semibold border-0">
          <i class="bi bi-box-arrow-right me-1"></i> Logout
        </button>
      </form>
    
  </div>
</nav>

<!-- Sidebar -->
@include('admin.sidebar')

<!-- Konten Utama -->
<main class="main-content">

  <h4 class="fw-bold text-red-700" style="font-size: 28px;">
    DASHBOARD ADMIN PMI
  </h4>

  <p style="font-size: 18px; font-weight: 500; color: #374151;">
    Selamat datang,
    <span class="text-red-600 fw-semibold">
      {{ auth()->user()->nama_pengguna ?? 'Admin' }}
    </span>
  </p>

  <div class="underline mb-6"></div>

  <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
    <h5 class="fw-bold mb-3 text-red-700">
      Sistem Informasi PMI Kabupaten Magetan
    </h5>
    <p class="text-gray-600">
      Silakan pilih menu pada sidebar untuk mengelola data PMI.
    </p>
  </div>
  

</main>

</body>
</html>
