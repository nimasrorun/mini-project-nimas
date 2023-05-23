<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
   public function login(Request $request){

    $admin = Admin::where('username', '=', $request->username)->first();
    if ($admin && $request->password == $admin->password) {
        Auth::guard('admin')->login($admin);
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.list-artikel.index');
        }else{
            return redirect()->route('admin.login');
        }
    }else{
        return redirect()->route('admin.login');
    }
   }

   public function showLoginForm(){
        return view('backend.layouts.loginadmin');
   }

   public function logout(){
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
   }
}
