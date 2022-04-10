<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
   
    public function index(){
        return view('login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function indexDashboard(){
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
           'email' => 'required|email:dns',
           'password' => 'required' 
        ]);

        if(Auth::attempt($credentials)){
            if (auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return view('dashboard.index');
            }else{
                // menghindari hacking
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        } else {
            return back()->with('loginError', 'Login failed!'); 
        }
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
