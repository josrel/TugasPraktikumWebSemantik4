<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function verify(Request $request)
    {
        $username = $request->txtUsername;
        $password = md5($request->txtPassword);
        
        $user = User::where('username',$username)->where('password',$password)->first();
        if($user !=null){
            session(['user' => "true"]);
            return redirect('/');  
        }else{
            session()->flash('notif','Username atau Password yang anda masukkan salah');    
        return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect('/login');
    }
}
