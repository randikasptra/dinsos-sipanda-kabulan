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
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi input login, termasuk role
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'role' => ['required', 'string', 'in:admin,operator'],
        ]);

        // Cek login dengan email, password, dan role
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

        $user = Auth::user();

        // Redirect berdasarkan role user
        if ($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        }

        // Untuk operator dan role lain, redirect ke HOME (bisa kamu sesuaikan)
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Cek user sudah logout
        if (!Auth::check()) {
            // user sudah logout
            return redirect('/login');
        } else {
            // user masih login
            return redirect('/dashboard');
        }
    }
}
