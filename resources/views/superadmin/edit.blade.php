@extends('layouts.admin')

@section('title', 'Edit Pengguna')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

    {{-- Breadcrumb --}}
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.admin.index') }}" 
                       class="text-danger fw-semibold text-decoration-none">
                        <i class="bi bi-arrow-left-circle me-1"></i>
                        Kembali ke Daftar Pengguna
                    </a>
                </li>
                <li class="breadcrumb-item active text-muted">
                    Edit Pengguna
                </li>
            </ol>
        </div>
    </div>

    {{-- Judul --}}
    <h2 class="text-danger text-center fw-bold mb-4">
        Edit Pengguna
    </h2>

    {{-- Alert --}}
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.admin.update', $admin->id_pengguna) }}" method="POST">
        @csrf

        {{-- Nama --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama</label>
            <input type="text"
                   name="nama_pengguna"
                   class="form-control @error('nama_pengguna') is-invalid @enderror"
                   value="{{ old('nama_pengguna', $admin->nama_pengguna) }}"
                   required>

            @error('nama_pengguna')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email"
                   name="email"
                   class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email', $admin->email) }}"
                   required>

            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password (opsional) --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Password Baru</label>
            <input type="password"
                   name="password"
                   class="form-control @error('password') is-invalid @enderror">

            <small class="text-muted">
                Kosongkan jika tidak ingin mengganti password
            </small>

            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Peran --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Peran</label>
            <select name="peran"
                    class="form-select @error('peran') is-invalid @enderror"
                    required>
                <option value="">-- Pilih Peran --</option>
                <option value="Admin" 
                    {{ old('peran', $admin->peran) == 'Admin' ? 'selected' : '' }}>
                    Admin
                </option>
                <option value="Superadmin" 
                    {{ old('peran', $admin->peran) == 'Superadmin' ? 'selected' : '' }}>
                    Superadmin
                </option>
            </select>

            @error('peran')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Status --}}
        <div class="mb-4">
            <label class="form-label fw-semibold d-block">Status</label>
            <div class="form-check form-switch">
                <input class="form-check-input"
                       type="checkbox"
                       name="status"
                       value="Aktif"
                       {{ old('status', $admin->status) == 'Aktif' ? 'checked' : '' }}>
                <label class="form-check-label">Aktif</label>
            </div>
        </div>

        {{-- Tombol --}}
        <div class="text-end mt-4">
            <button type="submit" class="btn btn-danger px-4">
                <i class="bi bi-save me-1"></i>
                Simpan Perubahan
            </button>
        </div>

    </form>
</div>
@endsection