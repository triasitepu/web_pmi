<aside id="sidebar"
  class="position-fixed top-0 start-0 h-100 bg-danger text-white"
  style="width:260px; padding-top:80px;">

  <div class="px-3">

    {{-- DASHBOARD --}}
    <a href="{{ route('admin.dashboard') }}"
       class="nav-link text-white fw-semibold">
      <i class="bi bi-speedometer2 me-2"></i>
      Dashboard
    </a>

    <hr class="opacity-50">

    {{-- PROFIL PMI --}}
    <div class="nav-item">
      <a class="nav-link text-white"
         href="{{ route('admin.profil-pmi.index') }}">
        <i class="bi bi-building me-2"></i>
        Profil PMI
      </a>

      @if($profilSubmenus->isNotEmpty())
        <ul class="nav flex-column ps-4">
          @foreach($profilSubmenus as $submenu)
            <li class="nav-item">
              <a class="nav-link text-white small"
                 href="{{ route('admin.submenu.show', [$submenu->id_menu, $submenu->id_submenu]) }}">
                <i class="bi bi-file-earmark-text me-2"></i>
                {{ $submenu->judul }}
              </a>
            </li>
          @endforeach
        </ul>
      @endif
    </div>

    <hr class="opacity-50">

    {{-- DONOR DARAH --}}
    <div class="nav-item">
      <a class="nav-link text-white"
         href="{{ route('admin.donor-submenu.index') }}">
        <i class="bi bi-droplet-fill me-2"></i>
        Donor Darah
      </a>

      @if($donorSubmenus->isNotEmpty())
        <ul class="nav flex-column ps-4">
          @foreach($donorSubmenus as $submenu)
            <li class="nav-item">
              <a class="nav-link text-white small"
                 href="{{ route('admin.donor.show', $submenu->slug) }}">
                <i class="bi bi-file-earmark-text me-2"></i>
                {{ $submenu->nama_submenu }}
              </a>
            </li>
          @endforeach
        </ul>
      @endif
    </div>

    <hr class="opacity-50">

    {{-- DIKLAT PMI --}}
    <a href="#" class="nav-link text-white">
      <i class="bi bi-heart-pulse me-2"></i>
      Diklat PMI
    </a>

    {{-- RELAWAN PMI --}}
    <div class="nav-item">
      <a class="nav-link text-white"
         href="{{ route('admin.relawan-submenu.index') }}">
        <i class="bi bi-people me-2"></i>
        Relawan PMI
      </a>

      @if($relawanSubmenus->isNotEmpty())
        <ul class="nav flex-column ps-4">
          @foreach($relawanSubmenus as $submenu)
            <li class="nav-item">
              <a class="nav-link text-white small"
                 href="{{ route('admin.relawan-submenu.index', $submenu->id) }}">
                <i class="bi bi-file-earmark-text me-2"></i>
                {{ $submenu->nama_submenu }}
              </a>
            </li>
          @endforeach
        </ul>
      @endif
    </div>

    <hr class="opacity-50">

    {{-- KEBENCANAAN --}}
    <a href="#" class="nav-link text-white">
      <i class="bi bi-heart-pulse me-2"></i>
      Kebencanaan PMI
    </a>

    {{-- SUPERADMIN --}}
    @if(strtolower(auth()->user()->peran) === 'superadmin')
      <hr class="opacity-50">

      <a href="{{ route('admin.superadmin.users.index') }}"
         class="nav-link text-white fw-semibold">
        <i class="bi bi-people-fill me-2"></i>
        Kelola Pengguna
      </a>
    @endif

  </div>
</aside>