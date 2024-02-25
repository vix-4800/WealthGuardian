<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Traits\HasOrganization;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
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
        abort_unless(
            auth()->user()->can('have_organization'),
            Response::HTTP_FORBIDDEN,
            'You can not have an organization'
        );

        return $next($request);
    }
}
