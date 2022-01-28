<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{

    public function __construct()
    {
        Paginator::useBootstrap();
    }

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate('20');
        return view('admin.users', compact('users'));
    }


    public function store(Request $request)
    {
        // check age
        $age = floor((time() - strtotime($request->date)) / 31556926);

        if ($age < 18) {
            return redirect()->back()->with('error', __('register.less_18'));
        }

        // check email
        $checkRegis = User::where('email', $request->email)->count();
        if ($checkRegis > 0) {
            return redirect()->back()->with('error', __('register.email_used'));
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->dateOfBirth = $request->date;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('success', __('register.success_add_new'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users-update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($request->password != "") {
            $user->password = md5($request->password);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->dateOfBirth = $request->date;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->update();

        return redirect('admin/users');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->back();
    }

    public function register()
    {
        return view('client.register');
    }

    public function history(){
        $donations = Donation::with('campaign')->paginate(12);
        $user = User::where('id', session('client')['id'])->first();
        return view('client.profile', compact('donations', 'user'));
    }
}
