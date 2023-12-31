<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view("login.index", [
            "title" => "Login Page",
            "active" => "login"
        ]);
    }

    public function authenticate(Request $request){

        $validatedData = $request->validate([
            "email" => ["required", "email:dns"],
            "password" => ["required"]
        ]);

        // jika validate lolos, maka ia akan run semua code di bawahnya

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();

            return redirect()->intended("/dashboard");
        }

        return back()->with("loginError", "Login failed");

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
