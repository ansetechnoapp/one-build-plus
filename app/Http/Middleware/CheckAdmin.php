<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {      $emailRecherche = Auth::user()->role;
        // $donnees = User::where('email', $emailRecherche)->get();
        if ($emailRecherche === 'admin') { 
            return $next($request);
        }else{
            // return redirect()->back()->with('error', 'Accès non autorisé.');
            return redirect()->route('home')->with('error', 'Accès non autorisé.');
        }
        
    }
}
