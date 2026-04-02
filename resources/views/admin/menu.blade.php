@extends('layouts.admin')

@section('title', 'Kelola Profil PMI')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="text-danger text-2xl font-bold"> Daftar Submenu Profil PMI
        </li>
      </ol>
    </div>
    <div>
      <a href="{{ route('admin.submenu.create', $menu->id) }}" class="btn btn-danger btn-sm">
        <i class="bi bi-plus-circle me-2"></i> Tambah Submenu
      </a>
    </div>
  </div>


  {{-- Pesan sukses / error --}}
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @elseif(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  {{-- Tabel Daftar Submenu/Konten --}}
  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle table-hover">
      <thead class="text-center text-white" style="background-color: #d60100;">
        <tr>
          <th style="width:5%">No</th>
          <th>Profil PMI</th>
          <th style="width:15%">Status</th>
          <th style="width:30%">Aksi</th>
        </tr>
      </thead>

      <tbody>
        @forelse($submenus as $index => $submenu)  <!-- Ganti $menus jadi $submenus -->
          <tr>
            <td class="text-center">{{ $index + 1 }}</td>
            <td class="fw-semibold">{{ $submenu->judul }}</td>
            <td class="text-center">
              @if($submenu->is_active)
                <span class="badge bg-success">Aktif</span>
              @else
                <span class="badge bg-secondary">Nonaktif</span>
              @endif
            </td>
            <td class="text-center">

              <!-- Edit Submenu -->
              <a href="{{ route('admin.submenu.edit', [$menu->id, $submenu->id_submenu])}}"
                 class="btn btn-warning btn-sm me-2 shadow-sm">
                <i class="bi bi-pencil-square me-1"></i> Edit
              </a>

              <!-- Hapus Submenu -->
              <form action="{{ route('admin.submenu.destroy', [$menu->id, $submenu->id_submenu]) }}"
                    method="POST"
                    class="d-inline"
                    onsubmit="return confirm('Yakin ingin menghapus subemenu \{{ addslashes($submenu->judul) }}\?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm me-2 shadow-sm">
                  <i class="bi bi-trash me-1"></i> Hapus
                </button>
              </form>

            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center text-muted py-5 fst-italic">
              <i class="bi bi-exclamation-circle-fill me-2 fs-4 text-danger"></i>
              Belum ada konten di kategori Profil PMI.<br>
              <small>Klik "Tambah Konten Baru" untuk menambahkan.</small>
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

</div>
@endsection