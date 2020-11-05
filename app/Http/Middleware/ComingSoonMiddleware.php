<?php

namespace App\Http\Middleware;

use Closure;
use DateTime;

class ComingSoonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $openDateEnv = env('EDUSIANA_OPEN_COMING_SOON');

        if ($request->path() !== 'comingsoon' && $openDateEnv) {
            $now = new DateTime('today');
            $openDate = new DateTime($openDateEnv);

            if ($now < $openDate) {
                return redirect()->route('comingsoon');
            }
        }

        return $next($request);
    }
}
