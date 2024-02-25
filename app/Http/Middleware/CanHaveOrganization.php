<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Traits\HasOrganization;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanHaveOrganization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        abort_unless(User::useTrait(HasOrganization::class) && auth()->user()->canHaveOrganization(), Response::HTTP_FORBIDDEN);

        return $next($request);
    }
}
