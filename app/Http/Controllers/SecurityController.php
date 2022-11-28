<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function formLogin()
    {
        return view("form-login");
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->get ("username");
        $password = $request->get ("password");
        $user = User::where('username' ,$username)->where("password",$password)->first();
        if ($user != null){
            Auth::login($user);
            return redirect ("tampil-semua-user");
        }else{
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("login"));
    }
}
