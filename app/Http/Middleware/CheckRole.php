<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->user()) {
            abort(403, 'Unauthorized');
        }

        $userRole = $request->user()->roles_id;
        if (in_array($userRole, [5])) {
            abort(403, 'Unauthorized');
        }

        if (!empty($roles) && !in_array($userRole, $roles)) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
