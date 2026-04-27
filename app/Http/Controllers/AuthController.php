<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengguna;
use App\Models\Menu;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AuthController extends Controller
{
    
    public function index()
{
    if (strtolower(auth()->user()->peran) !== 'superadmin') {
        abort(403);
    }

    $penggunas = Pengguna::all();
    return view('admin.users.index', compact('penggunas'));
}

    // 🔐 Tampilkan halaman login
    public function showLogin()
    {
        if (Auth::check()) {
            $role = strtolower(Auth::user()->peran);
            if ($role === 'superadmin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            }
        }

        return view('login');
    }

    // 🔑 Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $pengguna = Pengguna::where('email', $request->email)->first();

        if (!$pengguna) {
            return back()->withErrors(['email' => 'Akun tidak ditemukan.']);
        }

        if ($pengguna->status !== 'Aktif') {
            return back()->withErrors(['email' => 'Akun Anda tidak aktif.']);
        }

        if (!Hash::check($request->password, $pengguna->kata_sandi)) {
            return back()->withErrors(['password' => 'Kata sandi salah.']);
        }

        Auth::login($pengguna);
        $request->session()->regenerate();
        $role = strtolower($pengguna->peran);


        if ($role === 'superadmin') {
            return redirect()->route('admin.dashboard');
        } elseif ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        Auth::logout();
        return back()->withErrors(['email' => 'Akun tidak memiliki akses']);
            }

    // 🚪 Logout
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('login');
    }

    // 📊 Dashboard Admin
    public function dashboard()
    {
        $menus = Menu::all()->groupBy('url');
        return view('admin.dashboard', compact('menus'));
    }

    // 👤 Halaman Tambah Admin (khusus superadmin)
    public function addAdmin()
    {
        $penggunas = Pengguna::whereIn('peran', ['admin', 'superadmin'])->get();
        return view('superadmin.addAdmin', compact('penggunas'));
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required|string|max:45',
            'email' => 'required|email|unique:pengguna,email',
            'kata_sandi' => 'required|string|min:6',
            'peran' => 'required|in:admin,superadmin',
        ]);

        Pengguna::create([
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'kata_sandi' => Hash::make($request->kata_sandi),
            'peran' => strtolower($request->peran),
            'status' => 'Aktif',
        ]);

        return redirect()->back()->with('success', 'Pengguna berhasil ditambahkan!');
    }


    // Toggle status admin
    public function toggleStatusAdmin($id_pengguna)
        {
            // 🔐 hanya superadmin
            if (strtolower(Auth::user()->peran) !== 'superadmin') {
                return redirect()->back()->with('error', 'Akses ditolak.');
            }

            $pengguna = Pengguna::findOrFail($id_pengguna);

            // 🚫 tidak bisa ubah diri sendiri
            if ($pengguna->id_pengguna === Auth::user()->id_pengguna) {
                return redirect()->back()->with('error', 'Tidak bisa menonaktifkan akun sendiri.');
            }

            // ✅ hanya admin & superadmin
            if (!in_array(strtolower($pengguna->peran), ['admin', 'superadmin'])) {
                return redirect()->back()->with('error', 'Role tidak valid.');
            }

            // 🔄 toggle status
            $pengguna->status = $pengguna->status === 'Aktif' ? 'Tidak Aktif' : 'Aktif';
            $pengguna->save();

            return redirect()->back()->with('success', 'Status pengguna berhasil diperbarui!');
        }

    public function deletePengguna($id_pengguna)
    {
        $pengguna = Pengguna::findOrFail($id_pengguna);

        // Cek apakah superadmin mencoba menghapus dirinya sendiri
        if ($pengguna->id_pengguna === Auth::user()->id_pengguna) {
            return redirect()->back()->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        // Hanya izinkan penghapusan untuk admin dan superadmin
        if (!in_array(strtolower($pengguna->peran), ['admin', 'superadmin'])) {
            return redirect()->back()->with('error', 'Hanya admin dan superadmin yang dapat dihapus.');
        }

        $pengguna->delete();

        return redirect()->back()->with('success', ucfirst($pengguna->peran) . ' berhasil dihapus.');
    }

        public function updatePasswordAdmin(Request $request)
        {
            // 🔐 hanya superadmin
            if (strtolower(Auth::user()->peran) !== 'superadmin') {
                return redirect()->back()->with('error', 'Akses ditolak.');
            }

            // ✅ validasi
            $request->validate([
                'id_pengguna' => 'required|exists:pengguna,id_pengguna',
                'kata_sandi' => 'required|string|min:6',
            ]);

            $pengguna = Pengguna::findOrFail($request->id_pengguna);

            // 🚫 tidak boleh ubah diri sendiri
            if ($pengguna->id_pengguna === Auth::user()->id_pengguna) {
                return redirect()->back()->with('error', 'Tidak bisa mengubah password sendiri di sini.');
            }

            // 🔑 update password
            $pengguna->kata_sandi = Hash::make($request->kata_sandi);
            $pengguna->save();

            return redirect()->back()->with('success', 'Password admin berhasil diperbarui!');
        }
        public function updatePengguna(Request $request, $id_pengguna)
        {
            if (strtolower(Auth::user()->peran) !== 'superadmin') {
                return redirect()->back()->with('error', 'Akses ditolak.');
            }

            $request->validate([
                'nama_pengguna' => 'required|string|max:45',
                'email' => 'required|email',
                'peran' => 'required|in:admin,superadmin',
                'kata_sandi' => 'nullable|string|min:6',
            ]);

            $pengguna = Pengguna::findOrFail($id_pengguna);

            if ($pengguna->id_pengguna === Auth::user()->id_pengguna) {
                return redirect()->back()->with('error', 'Gunakan menu profil untuk edit diri sendiri.');
            }

            $pengguna->nama_pengguna = $request->nama_pengguna;
            $pengguna->email = $request->email;
            $pengguna->peran = $request->peran;
            $pengguna->status = $request->has('status') ? 'Aktif' : 'Tidak Aktif';

            if ($request->filled('kata_sandi')) {
                $pengguna->kata_sandi = Hash::make($request->kata_sandi);
            }

            $pengguna->save();

            return redirect()->back()->with('success', 'Pengguna berhasil diperbarui!');
        }
    
}