<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
            return view('register.index');
    }
    public function store(Request $request)
    {
        // $data=$request->all();
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $password_confirmation=$request->input('password_confirmation');
        $agreement= $request->boolean('agreement');
        


        // $data=$request->only(['name', 'email']);
        // $data=$request->except(['name', 'email']);
         // $agreement= !! $request->input('agreement');
        
        // $avatar= $request->file('avatar');

        // $request->has('name');
        // dd($request->filled('name'));
        // dd($request->missing('name'));
        

        // dd($name, $email, $password, $password_confirmation, $agreement);

        // return 'Запрос на вход в страницу регистрации';

        if (true) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('user');
    }
    
}