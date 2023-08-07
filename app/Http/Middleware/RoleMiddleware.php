<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if ($request->user() && $request->user()->role == $role) {
            return $next($request);
        }

        switch ($role) {
            case 'admin':
                $message = "Hmph, no way you're an admin. Don't try to act important when you're not.";
                break;
            case 'guru':
                $message = "Tch, like a student can be a teacher.";
                break;
            case 'siswa':
                $message = "What a joke, trying to sneak in as a student? Don't make me laugh.";
                break;
            default:
                $message = "Geez, you can't access this. Did you really think you could pretend to be a $role? Pathetic.";
                break;
        }

        return response()->view('errors.403', ['message' => $message]);
    }
}
