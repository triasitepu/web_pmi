<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f4f2;
            padding: 90px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm">
    <div class="container d-flex justify-content-between">
        <strong>Dashboard Superadmin</strong>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-sm btn-danger">Logout</button>
        </form>
    </div>
</nav>

<h2 class="text-center mt-3">Manajemen Pengguna</h2>
<p class="text-center fw-bold">
    Selamat datang, {{ auth()->user()->nama_pengguna ?? 'Superadmin' }}
</p>

<div class="card p-4 mb-4">
    <h5>Tambah Pengguna</h5>

    {{-- FORM DUMMY --}}
    <form onsubmit="alert('Backend belum aktif'); return false;">
        <div class="mb-2">
            <label>Nama</label>
            <input type="text" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Email</label>
            <input type="email" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Password</label>
            <input type="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Peran</label>
            <select class="form-control" required>
                <option value="">-- Pilih --</option>
                <option>admin</option>
                <option>superadmin</option>
            </select>
        </div>

        <button class="btn btn-success w-100">Tambah</button>
    </form>
</div>

<div class="card p-4">
    <h5>Daftar Pengguna</h5>

    <table class="table table-bordered mt-3">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Peran</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            {{-- AMAN WALAU KOSONG --}}
            @forelse($penggunas ?? [] as $i => $pengguna)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $pengguna->nama_pengguna }}</td>
                    <td>{{ $pengguna->email }}</td>
                    <td>{{ $pengguna->peran }}</td>
                    <td>{{ $pengguna->status }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">
                        Belum ada pengguna
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>

</body>
</html>
