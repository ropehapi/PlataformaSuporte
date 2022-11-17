<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginView()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->first();

        if(isset($user)){
            if(sha1($request->password) === $user->password){
                if($user->profile === User::ROOT){
                    $this->buildRootSession($user);
                    return redirect()->route("home");
                }
                if($user->profile === User::CUSTOMER_ADMIN){
                    $this->buildCustomerAdminSession($user);
                    return redirect()->route("home");
                }
            }
        }

        return redirect()->back()->withErrors(__("Login ou senha inválidos"));
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route("loginView");
    }

    public function buildRootSession(User $user)
    {
        Session::put("profile", $user->profile);
        Session::put("user", $user);
    }

    public function buildCustomerAdminSession(User $user)
    {
        Session::put("profile", $user->profile);
        Session::put("user", $user);
    }
}
