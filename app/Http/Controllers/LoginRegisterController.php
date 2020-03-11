<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginRegister;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    public function register ()
    {
           return view('login_register.register');
    }
    public function registerprocess (Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->input('username'),
            'email' => strtolower($request->input('email')),
            'password' =>bcrypt($request->input('password')),
        ];
        LoginRegister::create($data);
        session()->flash('message', 'Successfully Register!');
        session()->flash('type', 'success');
        return redirect()->route('login');

    }
    public function login ()
    {
           return view('login_register.login');
    }
    public function loginprocess (Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
            session()->flash('message', 'Successfully login!');
            session()->flash('type', 'success');
        }

            session()->flash('message', 'Something went wrong!!!!');
            session()->flash('type', 'danger');
            return redirect()->back();

    }
}
