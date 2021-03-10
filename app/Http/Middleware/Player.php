<?php
declare(strict_types = 1);

namespace App\Http\Middleware;

use Auth;
use Closure;

class Player
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request Return a request.
     * @param   \Closure                 $next    Next is Closure.
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role === 'admin') {
            return redirect()->route('/admin');
        }

        if (Auth::user()->role === 'teacher') {
            return redirect()->route('/teacher');
        }

        if (Auth::user()->role === 'student') {
            return redirect()->route('/student');
        }
    }
}
