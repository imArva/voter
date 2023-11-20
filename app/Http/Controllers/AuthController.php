<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    // public function register() {
    //     return view('register');
    // }

    public function loginAction(Request $request) {

        $credentials = $request->only(['nis', 'password']);
        if (Auth::check()) {
            return redirect('/');
        }

        if (Auth::attempt($credentials, true)) {
            return redirect('/dashboard');
        }

        Session::flash('error', 'Nis atau password salah');
        return redirect()->back()->withInput();
    }

    // public function registerAction(Request $request){

    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required',
    //         'username' => 'required|min:3|unique:users,username',
    //         'password' => 'min:6'
    //     ]);

    //     if ($validator->fails()){
    //         return redirect()->back()->withInput()->withErrors($validator);
    //     }

    //     User::create([
    //         'email' => $request->email,
    //         'username' => strtolower($request->username),
    //         'password' => Hash::make($request->password)
    //     ]);

    //     return redirect('/login');

    // }

    public function logout() {

        Auth::logout();

        return redirect('/');
        
    }
}
