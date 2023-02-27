<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    
    public function index() {
        return view('auth.login', [
            'title' => "Login"
        ]);
    }

    public function create() {
        return view('auth.register', [
            'title' => "Register"
        ]);
    }

    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);


        return redirect('/login');

    }


    public function login(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            return redirect()->route('home');
        }

        return redirect('/login');
    }

    public function logout() {

        Auth::logout();

        return redirect('/');

    }
    

}
