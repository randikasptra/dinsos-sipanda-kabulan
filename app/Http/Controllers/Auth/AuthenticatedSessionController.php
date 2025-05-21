<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Providers\RouteServiceProvider;

class AuthenticatedSessionController extends Controller
{
    /**
     * Tampilkan halaman login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Proses login user.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi input login
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'role' => ['required', 'string', 'in:admin,operator'],
        ]);

        // Proses login (cek email, password, dan role)
        if (!Auth::attempt(
            $request->only('email', 'password') + ['role' => $request->input('role')],
            $request->filled('remember')
        )) {
            return back()->withErrors([
                'email' => 'Email atau password salah atau role tidak cocok.',
            ])->onlyInput('email');
        }

        // Regenerasi session agar aman
        $request->session()->regenerate();

        // Redirect berdasarkan role
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->intended(RouteServiceProvider::HOME); 
    }

    /**
     * Logout user.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
