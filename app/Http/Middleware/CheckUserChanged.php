<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CheckUserChanged
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $currentEmail = $user->email;
            $currentPassword = $user->password;
            
            $storedEmail = session('email');
            $storedPassword = session('password');
            
            if ($currentEmail !== $storedEmail || !Hash::check($storedPassword, $currentPassword)) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                
                return redirect('/admin')->withErrors(['error' => 'Suas informações foram alteradas. Por favor, faça login novamente.']);
            }
        }

        return $next($request);
    }
}
