<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class member
{
    public function handle(Request $request, Closure $next): Response
    {
        if (empty(session()->get("memberId")))
        {
            return redirect("/member");
            exit;
        }
        return $next($request);
    }
}
