<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register', ['title' => 'register']);
    }


    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:users,name',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Coin::create([
        'user_id' => $user->id,
        'name' => $user->name,
    ]);

    return redirect()->route('login.form')->with('success', 'Registrasi berhasil. Silakan login.');
}

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login',['title' => 'login']);
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input login
        $credentials = $request->validate([
            'name' => 'required|string|max:255',  // Validasi name
            'password' => 'required',  // Validasi password
        ]);

        // Mencari user berdasarkan name
        $user = User::where('name', $credentials['name'])->first();

        // Cek apakah user ditemukan dan password cocok
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);  // Login user
            $request->session()->regenerate();  // Regenerasi session untuk keamanan
            
            // Cek apakah user adalah admin
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');  // Arahkan ke halaman admin dashboard
            }
            
            return redirect()->route('user.dashboard');  // Arahkan ke halaman dashboard user biasa
        }

        // Jika login gagal, kembali dengan pesan error
        return back()->withErrors([
            'name' => 'Username atau password salah.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();  // Logout user
        $request->session()->invalidate();  // Menghapus session
        $request->session()->regenerateToken();  // Regenerasi token CSRF
        return redirect('/');  // Arahkan kembali ke halaman utama
    }
}
