<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Traits\HasFamily;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanHaveFamily
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        abort_unless(User::useTrait(HasFamily::class) && auth()->user()->canHaveFamily(), Response::HTTP_FORBIDDEN);

        return $next($request);
    }
}
