<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DeductCredit
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Check if the user has sufficient credits
        if ($user->credits > 0) {
            // Deduct 1 credit if the user is trying to access pages beyond the first
            if ($request->query('page') && $request->query('page') > 1) {
                $user->decrement('credits');
            }
            return $next($request);
        } 

        // If the user is trying to access pages beyond the first with zero credits
        if ($request->query('page') && $request->query('page') > 1 && $user->credits == 0) {
            // Redirect to route indicating insufficient credits
            return Redirect::route('insufficient.credits');
        }

        // If none of the conditions are met, pass the request to the next middleware or route handler
        return $next($request);
    }
}
