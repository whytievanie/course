<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;


    protected $redirectTo = '/';
    protected function redirectTo()
    {
        if (Auth()->user()->role === 'admin') {
            return redirect()->route('/admin');
        } elseif (Auth()->user()->role === 'teacher') {
            return redirect()->route('/teacher');
        } elseif (Auth()->user()->role === 'student') {
            return redirect()->route('/student');
        } else {
            return '/';
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}