<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login(){
        
        return view('auth.login');
    }

    public function register(){

        return view('auth.register');
    }

    public function dashboard(){

        return view('auth.testDashboard');

    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',   
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("/login")->with('message', 'Login Gagal Periksa Kembali Email dan Password');
    }

    public function customRegister(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();            
        $check = $this->create($data);
         
        return redirect("dashboard")->with('message', 'Anda Telah Login');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }  

    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/login');
    }
}