@extends('layouts.admin')

@section('title', 'Kelola Submenu Diklat')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="text-black text-2xl font-bold"> Daftar Submenu Diklat
        </li>
      </ol>
    </div>
    <div>
      <a href="{{ route('admin.diklat-submenu.create') }}" class="btn btn-soft-danger btn-sm">
        <i class="bi bi-plus-circle me-2"></i> Tambah Submenu
      </a>
    </div>
  </div>

  {{-- Alert --}}
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

  {{-- Table --}}
  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="text-center" style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">
        <tr>
          <th style="width:5%">No</th>
          <th class="text-start">Judul</th>
          <th class="text-start">Isi</th>
          <th class="text-center">Foto</th>
          <th class="text-center">Status</th>
          <th style="width:22%" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody class="border-top-0">
        @forelse($submenus as $key => $submenu)
        <tr>
          <td class="text-center fw-medium">{{ $key + 1 }}</td>
          
          {{-- Judul --}}
          <td class="fw-medium">{{ $submenu->nama_submenu }}</td>

          {{-- Isi --}}
          <td>
            <small class="text-muted">
              {{ \Illuminate\Support\Str::limit(strip_tags($submenu->isi), 120) }}
            </small>
          </td>

          {{-- Foto --}}
          <td class="text-center">
            @if($submenu->foto)
              <img src="{{ asset('storage/' . $submenu->foto) }}" 
                   alt="Foto" 
                   width="85" 
                   height="55"
                   class="img-thumbnail shadow-sm"
                   style="object-fit: cover;">
            @else
              <span class="text-muted small">—</span>
            @endif
          </td>

          {{-- Status --}}
          <td class="text-center">
            @if($submenu->is_active)
              <span class="badge bg-success px-3 py-2">Aktif</span>
            @else
              <span class="badge bg-secondary px-3 py-2">Tidak Aktif</span>
            @endif
          </td>

          {{-- Aksi --}}
          <td class="text-center">
            <div class="d-flex justify-content-center gap-2">
              <!-- Detail -->
              <a href="{{ route('admin.diklat-submenu.show', $submenu->id) }}" 
                 class="btn-icon text-primary">
                <i class="bi bi-eye"></i>
              </a>

              <!-- Edit -->
              <a href="{{ route('admin.diklat-submenu.edit', $submenu->id) }}" 
                 class="btn-icon text-warning">
            <i class="bi bi-pencil-square"></i>
              </a>

              <!-- Hapus -->
              <form action="{{ route('admin.diklat-submenu.destroy', $submenu->id) }}" 
                    method="POST" 
                    class="d-inline"
                    onsubmit="return confirm('Yakin ingin menghapus submenu ini?')">
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
            Belum ada data submenu
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center mt-4">
      <div class="text-muted small">
        Menampilkan {{ $submenus->firstItem() }} - {{ $submenus->lastItem() }} 
        dari {{ $submenus->total() }} data
      </div>
      <div>
        {{ $submenus->links() }}
      </div>
    </div>
  </div>

</div>
@endsection