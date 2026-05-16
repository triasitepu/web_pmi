@extends('layouts.admin')

@section('title', 'Kelola Pengguna')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- HEADER --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="text-black text-2xl font-bold">Kelola Pengguna</li>
      </ol>
    </div>

    <div>
      <a href="{{ route('admin.admin.create') }}" class="btn btn-soft-danger btn-sm">
        <i class="bi bi-plus-circle me-1"></i> Tambah Admin
      </a>
    </div>
  </div>

  {{-- ALERT --}}
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @elseif(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  {{-- TABLE --}}
  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="text-center" style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">
        <tr>
          <th style="width:5%">No</th>
          <th class="text-start">Nama</th>
          <th class="text-start">Email</th>
          <th class="text-center">Peran</th>
          <th class="text-center">Status</th>
          <th style="width:22%" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody class="border-top-0">
        @forelse($penggunas ?? [] as $key => $pengguna)
        <tr>
          <td class="text-center fw-medium">{{ $key + 1 }}</td>

          {{-- Nama --}}
          <td class="fw-medium">{{ $pengguna->nama_pengguna }}</td>

          {{-- Email --}}
          <td>{{ $pengguna->email }}</td>

          {{-- Peran --}}
          <td class="text-center">
            @if($pengguna->peran == 'superadmin')
              <span class="badge bg-danger px-3 py-2">Superadmin</span>
            @elseif($pengguna->peran == 'admin_donor')
              <span class="badge bg-success px-3 py-2">Admin Donor Darah</span>
            @else
              <span class="badge bg-primary px-3 py-2">Admin</span>
            @endif
          </td>

          {{-- Status --}}
          <td class="text-center">
            @if($pengguna->status == 'Aktif')
              <span class="badge bg-success px-3 py-2">Aktif</span>
            @else
              <span class="badge bg-secondary px-3 py-2">Tidak Aktif</span>
            @endif
          </td>

          {{-- Aksi --}}
          <td class="text-center">
            <div class="d-flex justify-content-center gap-2">
              <!-- Edit -->
              <a href="{{ route('admin.admin.edit', $pengguna->id_pengguna) }}" 
                 class="btn-icon text-warning">
                <i class="bi bi-pencil-square"></i>
              </a>

              <!-- Hapus -->
              <form action="{{ route('admin.admin.destroy', $pengguna->id_pengguna) }}" 
                    method="POST" 
                    class="d-inline"
                    onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-icon text-danger">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="text-center py-5 text-muted">
            <i class="bi bi-inbox display-6 mb-3"></i><br>
            Belum ada data pengguna
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>

</div>
@endsection