<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;


    protected $redirectTo = '/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function redirectTo()
    {
        if (auth()->user()->role === 'admin') {
            return '/admin';
        } elseif (auth()->user()->role === 'teacher') {
            return '/teacher';
        } elseif (auth()->user()->role === 'student') {
            return '/student';
        } else {
            return '/';
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request array $data Data is a array.
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required', 'int', 'min:10'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request array $data Data is a array.
     * @return \Illuminate\Http\Response
     */
    protected function create(array $data)
    {
        dd($data);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
        ]);
    }
}
