@extends('layouts.admin')

@section('title', 'Kelola Submenu Relawan')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="text-black text-xl font-bold"> Daftar Submenu Relawan
        </li>
      </ol>
    </div>
    <div>
      <a href="{{ route('admin.relawan-submenu.create') }}" class="btn btn-soft-danger btn-sm">
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
    <table class="table table-striped align-middle">
      <thead class="text-center text-white" style="background-color: #000;">
        <tr>
          <th style="width:5%">No</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>File</th>
          <th>Status</th>
          <th style="width:25%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($submenus as $key => $submenu)
        <tr>
          <td class="text-center">{{ $key + 1 }}</td>
          {{-- Judul --}}
          <td>{{ $submenu->nama_submenu }}</td>

          {{-- Isi dipotong agar tidak terlalu panjang --}}
          <td>
            {{ \Illuminate\Support\Str::limit(strip_tags($submenu->isi), 100) }}
          </td>

        {{-- File --}}
      <td class="text-center">
        @php
          $file = $submenu->foto;
          $ext = $file ? strtolower(pathinfo($file, PATHINFO_EXTENSION)) : null;
        @endphp

        @if($file && in_array($ext, ['jpg','jpeg','png']))
          {{-- 🖼️ Gambar --}}
          <img src="{{ asset('storage/' . $file) }}" 
              alt="File" 
              width="100" 
              class="img-thumbnail">

        @elseif($file && $ext === 'pdf')
          {{-- 📄 PDF --}}
          <a href="{{ asset('storage/' . $file) }}" target="_blank">
            <i class="bi bi-file-earmark-pdf" style="font-size: 2rem; color:red;"></i>
          </a>

        @else
          {{-- ❌ Tidak ada file --}}
          <span class="text-muted">Tidak ada file</span>
        @endif
      </td>

          {{-- Status --}}
          <td class="text-center">
            @if($submenu->is_active)
              <span class="badge bg-success">Aktif</span>
            @else
              <span class="badge bg-secondary">Tidak Aktif</span>
            @endif
          </td>

          {{-- Aksi --}}
          <td class="text-center">

          <!-- Detail -->
          <a href="{{ route('admin.relawan-submenu.show', $submenu->id) }}"
            class="btn-icon text-info">
            <i class="bi bi-eye"></i>
          </a>

          <!-- Edit -->
          <a href="{{ route('admin.relawan-submenu.edit', $submenu->id) }}" 
            class="btn-icon text-warning">
            <i class="bi bi-pencil-square"></i>
          </a>

          <!-- Hapus -->
          <form action="{{ route('admin.relawan-submenu.destroy', $submenu->id) }}" 
                method="POST" 
                class="d-inline"
                onsubmit="return confirm('Yakin ingin menghapus submenu ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-icon text-danger">
              <i class="bi bi-trash"></i>
            </button>
          </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="text-center py-4">
            <i class="bi bi-info-circle me-2"></i>Belum ada data submenu
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mt-3">
    <div>
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