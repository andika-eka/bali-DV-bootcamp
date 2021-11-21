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

        if(Auth::check()){        
            //check apakah user id di todo sama dengan user id yang login    
            $user = Auth::user();                                                                                                                                             
            return view('auth.testDashboard', ['user' => $user,                                    
                                    ]);
        }
  
        return redirect("/login")->withSuccess('Anda Belum Login Silahkan Login Terlebih dahulu');
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
        $confirm = $request->confirmPass;
                
        if ($request->password != $confirm){

            return redirect("/register")->with('message', 'Konfirmasi Password Tidak Sesuai');
            
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();            
        $check = $this->create($data);
         
        return redirect("/login")->with('message', 'Anda Telah Register Silahkan Login');
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