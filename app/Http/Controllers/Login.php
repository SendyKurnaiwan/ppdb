<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials)){
            // $request->session()->regenerate();
            // return redirect()->intended('/dashboard');
            if (auth()->user()->is_admin == 1) {

                return redirect()->route('admin.home');

            }else{

                return view('dashboard.index');

            }
        }

        return back()->with('loginError', 'Login Tidak Berhasil');
    }

    public function logout(request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

   
}
