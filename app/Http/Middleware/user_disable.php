<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class user_disable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $isactive = Auth::user()->isactive;
        
        if ($isactive == 2) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->route('user.disable')->with('error', 'Accès non autorisé.');
   
        } else {
            return $next($request);    
        }
    }
}
