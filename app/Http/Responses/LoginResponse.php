<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @return mixed
     */
    public function toResponse($request)
    {
        $home = auth()->user()->isAdmin() ? '/admin/dashboard' : '/dashboard';

        return redirect()->intended($home);
    }
}
