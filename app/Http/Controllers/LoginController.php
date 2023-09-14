<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
         if ($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect()->intended('dashboard');
            }elseif($user->role == 'normal_user'){
                return redirect()->intended('all-product');
            }elseif($user->role == 'supervisor_admin'){
                return redirect()->intended('product-activity');
            }
        }
        return view('login');   
    }

    public function aksilogin(Request $request)
    {
        request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $cek = $request->only('email', 'password');

        if(Auth::attempt($cek)){
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect()->intended('dashboard');
            }elseif($user->role == 'normal_user'){
                return redirect()->intended('all-product');
            }elseif($user->role == 'supervisor_admin'){
                return redirect()->intended('product-activity');
            }

            return redirect()->intended('/');
        }
        session()->flash('notif', 'Periksa Kembali');
        return redirect('/');
    }

    public function aksilogout()
    {
        Auth::logout();
        session()->flash('notif', 'User Logout Berhasil');
        return redirect()->route('login');
    }
}
