<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function aksireg(Request $request)
    {
        $data_regist = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',
        ]);

        $data_regist['password'] = Hash::make($data_regist['password']);
        User::create($data_regist);
        session()->flash('berhasil', 'Registrasi User Berhasil');
        return redirect()->route('login');
    }
}
