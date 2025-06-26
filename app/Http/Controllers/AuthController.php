<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function showLogin(){
        return view('auth.login');
    }
    public function login(Request $r){
        $creds=$r->validate(['email'=>'required|email','password'=>'required']);
        if(Auth::attempt($creds)){
            $r->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }
        return back()->withErrors(['email'=>'Email atau password salah']);
    }
    public function logout(Request $r){
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();
        return redirect('/login');
    }
}
