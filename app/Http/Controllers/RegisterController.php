<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\flash;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'

        ]);

        $validatedData['password'] = Hash::make($validatedData ['password']);

        User::create($validatedData);
        return redirect('/dashboard/register')->with('success', 'Yey.. Berhasil Menambahkan Akun !');

        // $request->session()->flash('success', 'Registrasi berhasil! silahkan Login');


        return redirect('/login')->with('success', 'Registrasi berhasil! silahkan Login');
    }

}
