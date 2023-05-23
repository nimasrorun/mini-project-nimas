<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenulisAuthController extends Controller
{
    public function login(Request $request){
        $penulis = Penulis::where('username', '=', $request->username)->first();
        if ($penulis && $request->password == $penulis->password){
            Auth::guard('penulis_guard')->login($penulis);
            if(Auth::guard('penulis_guard')->check()){
                return redirect()->route('homepage');
            }else{
                return redirect()->route('penulis.login');
            }
        }else{
            return redirect()->route('penulis.login');
        }
    }

    public function showLoginForm(){
        return view('login');
    }

    public function register(Request $request){
        Penulis::create([
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect()->route('penulis.login');
    }

    public function logout(){
        Auth::guard('penulis_guard')->logout();

        return view('login');
    }
}
