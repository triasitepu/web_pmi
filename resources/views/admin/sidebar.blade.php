<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PMI Kabupaten Magetan - Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-high": "#e8e8e8",
                    "surface-container": "#eeeeee",
                    "surface-container-highest": "#e2e2e2",
                    "inverse-surface": "#2f3131",
                    "primary-fixed": "#ffdad6",
                    "on-primary-fixed-variant": "#93000e",
                    "surface-tint": "#c00016",
                    "primary": "#ba0015",
                    "surface-container-low": "#f3f3f3",
                    "on-secondary-container": "#646464",
                    "secondary-fixed": "#e4e2e2",
                    "surface-bright": "#f9f9f9",
                    "tertiary-container": "#007ab3",
                    "primary-container": "#e21f26",
                    "inverse-primary": "#ffb4ac",
                    "tertiary-fixed": "#cae6ff",
                    "on-surface-variant": "#5d3f3c",
                    "outline-variant": "#e7bdb8",
                    "on-secondary-fixed-variant": "#474747",
                    "error-container": "#ffdad6",
                    "on-primary-container": "#fffaf9",
                    "surface-dim": "#dadada",
                    "outline": "#926f6b",
                    "secondary": "#5e5e5e",
                    "on-error-container": "#93000a",
                    "on-background": "#1a1c1c",
                    "secondary-fixed-dim": "#c8c6c6",
                    "secondary-container": "#e4e2e2",
                    "on-surface": "#1a1c1c",
                    "background": "#f9f9f9",
                    "surface-variant": "#e2e2e2",
                    "primary-fixed-dim": "#ffb4ac",
                    "on-tertiary-fixed": "#001e30",
                    "tertiary-fixed-dim": "#8ecdff",
                    "surface": "#f9f9f9",
                    "on-tertiary": "#ffffff",
                    "on-secondary": "#ffffff",
                    "on-error": "#ffffff",
                    "tertiary": "#00608e",
                    "surface-container-lowest": "#ffffff",
                    "inverse-on-surface": "#f1f1f1",
                    "error": "#ba1a1a",
                    "on-secondary-fixed": "#1b1c1c",
                    "on-primary": "#ffffff",
                    "on-primary-fixed": "#410003",
                    "on-tertiary-container": "#f8faff",
                    "on-tertiary-fixed-variant": "#004b70"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Manrope"],
                    "body": ["Inter"],
                    "label": ["Inter"]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-headline { font-family: 'Manrope', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen">
<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-full flex flex-col bg-slate-50 dark:bg-slate-900 h-screen w-72 border-r-0 z-50">
<div class="p-8">
<div class="flex items-center gap-3 mb-10">
<div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
</div>
<div>
<div class="text-lg font-bold text-slate-900 dark:text-white leading-tight">PMI Magetan</div>
<div class="text-xs text-slate-500 font-medium">Admin Portal</div>
</div>
</div>
<nav class="space-y-1">
<!-- Dashboard Active -->
<a class="flex items-center gap-3 px-4 py-3 text-red-600 dark:text-red-500 font-bold border-r-4 border-red-600 bg-slate-100 dark:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
href="{{ route('admin.dashboard') }}">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
{{-- PROFIL PMI --}}
<div class="flex flex-col">
    <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium"
       href="{{ route('admin.profil-submenu.index') }}">
       
        <span class="material-symbols-outlined">account_circle</span>
        Kelola Profil PMI
    </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium"
       href="{{ route('admin.donor-submenu.index') }}">
<span class="material-symbols-outlined" data-icon="bloodtype">bloodtype</span>
                    Donor Darah
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
      href="{{ route('admin.relawan-submenu.index') }}">
<span class="material-symbols-outlined" data-icon="groups">groups</span>
                    Kelola Relawan
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
      href="#">
<span class="material-symbols-outlined" data-icon="school">school</span>
                    Diklat PMI
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
      href="{{ route('admin.kebencanaan-submenu.index') }}">
<span class="material-symbols-outlined" data-icon="volcano">volcano</span>
                    Kelola Kebencanaan
                </a>


    {{-- SUPERADMIN --}}
    @if(strtolower(auth()->user()->peran) === 'superadmin')

      <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
      href="{{ route('admin.admin.index') }}">
<span class="material-symbols-outlined" data-icon="people">people</span>
                    Kelola Pengguna
                </a>
    @endif

  </div>
  </nav>
</div>
  <div class="mt-auto p-8">
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit"
        class="w-full flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-red-200 dark:hover:bg-red-800 transition-colors font-manrope text-sm font-medium text-left">
        
        <span class="material-symbols-outlined">logout</span>
        Logout
    </button>
</form>
</div>
</aside>