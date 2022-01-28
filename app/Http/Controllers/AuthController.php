<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        try {
            $user = User::where([
                'email' => $request->email,
                'password' => md5($request->password)
            ])->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return redirect('admin/login')->with('error', 'invalid email or password');
        }

        $u = [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name
        ];

        if ($user->role) {
            session(['admin' => $u]);
            return redirect('admin');
        }

        return redirect('admin/login')->with('error', 'invalid email or password');
    }

    public function authClient(Request $request)
    {
        try {
            $user = User::where([
                'email' => $request->email,
                'password' => md5($request->password)
            ])->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return redirect('login')->with('error', 'invalid email or password');
        }


        $u = [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name
        ];

        if (!$user->role) {
            session(['client' => $u]);
            return redirect('profile');
        }

        return redirect('login')->with('error', 'invalid email or password');
    }

    public function loginClient(){
        return view('client.login');
    }
}
