@extends('layouts.admin')

@section('title', 'Kelola Pengguna')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- HEADER --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <ol class="breadcrumb mb-0">
        <li class="text-danger text-2xl font-bold"> Kelola Pengguna </li>
        </li>
      </ol>

    <div>
      <a href="{{ route('admin.admin.create') }}" class="btn btn-danger btn-sm">
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

  {{-- TABLE CARD --}}
  <div class="card border-0 shadow-sm">
    <div class="card-body">

      <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="text-muted mb-0">Daftar Pengguna</h6>
      </div>

      <div class="table-responsive">
  <table class="table table-bordered table-striped align-middle table-hover">
    <thead class="text-center text-white" style="background-color: #d60100;">
      <tr>
        <th style="width:5%">No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Peran</th>
        <th>Status</th>
        <th style="width:25%">Aksi</th>
      </tr>
    </thead>

    <tbody>
      @forelse($penggunas ?? [] as $i => $pengguna)
      <tr>
        {{-- No --}}
        <td class="text-center">{{ $i + 1 }}</td>

        {{-- Nama --}}
        <td>{{ $pengguna->nama_pengguna }}</td>

        {{-- Email --}}
        <td>{{ $pengguna->email }}</td>

        {{-- Peran --}}
        <td class="text-center">
          @if($pengguna->peran == 'superadmin')
            <span class="badge bg-danger">Superadmin</span>
          @else
            <span class="badge bg-primary">Admin</span>
          @endif
        </td>

        {{-- Status --}}
        <td class="text-center">
          @if($pengguna->status == 'Aktif')
            <span class="badge bg-success">Aktif</span>
          @else
            <span class="badge bg-secondary">Tidak Aktif</span>
          @endif
        </td>

        {{-- Aksi --}}
        <td class="text-center">
          

          {{-- Edit --}}
          <a href="{{ route('admin.admin.edit', $pengguna->id_pengguna) }}" class="btn btn-warning btn-sm">
            <i class="bi bi-pencil-square"></i> Edit
          </a>

          {{-- Hapus --}}
          <form action="{{ route('admin.admin.destroy', $pengguna->id_pengguna) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
              <i class="bi bi-trash"></i> Hapus
            </button>
          </form>

        </td>
      </tr>

      @empty
      <tr>
        <td colspan="6" class="text-center py-4">
          <i class="bi bi-info-circle me-2"></i>Belum ada pengguna
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

    </div>
  </div>

</div>
@endsection