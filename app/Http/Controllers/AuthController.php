<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('pageUser');
    }
    public function authentificate(Request $request){
        $credentials= $request->validate([
            'email'=>'required|email',
            'mot_de_passe'=>'required'
        ]);
        //dd(bcrypt($ request->password));
        $user=[
            'email'=>$request->email,
            'mot_de_passe'=>Hash::make($request->mot_de_passe)
        ];
        $users=User::all();
        foreach ($users as $log) {
            if ($log->email===$request->email) {
                if (Hash::check($request->mot_de_passe, $log->mot_de_passe)===true) {
                    Auth::login($log);
                    $request->session()->regenerate();

                    return redirect()->intended('pageUser');
                }
            }
        }


       //dd(Hash::check($request->mot_de_passe,'$2y$12$oBsEdQYOgX92wcnM4YORr.wiBgc2z20lL3DgRtdNPKYccQOpG/jnC'));
        // dd(Auth::attempt($user));
        //  if (Auth::attempt($request->only('email','mot_de_passe'))) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('dashboard');
        // }

    }
    public function logout(){


    }
}
