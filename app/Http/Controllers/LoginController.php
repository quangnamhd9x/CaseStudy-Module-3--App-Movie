<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin(){
        return view('admin.layout.login');
    }

    public function login(Request $request){
        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role_id = 1,
        ];

        if (!Auth::attempt($user)){
            return redirect()->route('login');
        } else {
            return redirect()->route('view.index');
        }
    }

    public function loginAdmin(Request $request){
        $admin = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role_id = 2,
        ];

        if (!Auth::attempt($admin)){
            return redirect()->route('login');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }

    public function register(){
        return view('admin.layout.register');
    }

    public function postRegister(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 1;
        $user->save();
        return redirect()->route('admin.login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
