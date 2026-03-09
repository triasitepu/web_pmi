<aside
  id="sidebar"
  class="position-fixed top-0 start-0 h-100"
  style="width:260px; padding-top:80px;">
  <div class="px-3">



    {{-- DASHBOARD --}}
    <a href="{{ route('admin.dashboard') }}"
       class="d-block py-2 fw-semibold">
      <i class="bi bi-speedometer2 me-2"></i> Dashboard
    </a>


    {{-- PROFIL PMI --}}
    <li class="nav-item">
  <a class="nav-link" href="{{ route('admin.profil-pmi.index') }}">
    <i class="bi bi-building me-2"></i> Profil PMI
  </a>

  <!-- Dropdown submenu kalau sudah ada -->
  @if($profilSubmenus->isNotEmpty())
    <ul class="nav flex-column ps-4">
      @foreach($profilSubmenus as $submenu)
        <li class="nav-item">
          <a class="nav-link small" href="{{ route('admin.submenu.show', [$submenu->id_menu, $submenu->id_submenu]) }}">
            <i class="bi bi-file-earmark-text me-2"></i>
            {{ $submenu->judul }}
          </a>
        </li>
      @endforeach
    </ul>
  @endif
</li>

{{-- DONOR DARAH --}}
<li class="nav-item">
  <a class="nav-link" href="{{ route('admin.donor-submenu.index') }}">
    <i class="bi bi-droplet-fill me-2"></i> Donor Darah
  </a>

  {{-- Dropdown submenu kalau sudah ada --}}
  @if($donorSubmenus->isNotEmpty())
    <ul class="nav flex-column ps-4">
      @foreach($donorSubmenus as $submenu)
        <li class="nav-item">
          <a class="nav-link small"
             href="{{ route('admin.donor.show', $submenu->slug) }}">
            <i class="bi bi-file-earmark-text me-2"></i>
            {{ $submenu->nama_submenu }}
          </a>
        </li>
      @endforeach
    </ul>
  @endif
</li>


    {{-- Diklat PMI --}}

    <a href="#" class="d-block py-2 fw-semibold">
      <i class="bi bi-heart-pulse me-2"></i> Diklat PMI
    </a>

    {{-- Relawan PMI --}}

   <li class="nav-item">
  <a class="nav-link" href="{{ route('admin.relawan-submenu.index') }}">
    <i class="bi bi-people me-2"></i> Relawan PMI
  </a>

  {{-- Dropdown submenu kalau sudah ada --}}
  @if($relawanSubmenus->isNotEmpty())
    <ul class="nav flex-column ps-4">
      @foreach($relawanSubmenus as $submenu)
        <li class="nav-item">
          <a class="nav-link small"
             href="{{ route('admin.relawan.show', $submenu->slug) }}">
            <i class="bi bi-file-earmark-text me-2"></i>
            {{ $submenu->nama_submenu }}
          </a>
        </li>
      @endforeach
    </ul>
  @endif
</li>


    {{-- Kebencanaan PMI --}}

    <a href="#" class="d-block py-2 text-white">
      <i class="bi bi-heart-pulse me-2"></i> Kebencanaan PMI
    </a>

    {{-- KHUSUS SUPERADMIN --}}
    @if(strtolower(auth()->user()->peran) === 'superadmin')
      <hr class="opacity-50">

      <a href="{{ route('superadmin.users.index') }}"
         class="d-block py-2 text-white fw-semibold">
        <i class="bi bi-people-fill me-2"></i> Kelola Pengguna
      </a>
    @endif

  </div>
</aside>