<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        // return app('view')->make('login.index');
        // return view()->make('login.index');
        // return View::make('login.index');

        // $ip=$request->ip();
        // $path=$request->path();
        // $url=$request->url();
        // $fullurl=$request->fullurl();


        // dd($ip, $path, $url, $fullurl);


        return view('login.index');
    }
    public function store(Request $request)
    {

        // $ip=$request->ip();
        // $path=$request->path();
        // $url=$request->url();


        // dd($ip, $path, $url);

        // $email=$request->input('email');
        // $password=$request->input('password');
        // $remember= $request->boolean('remember');

        // dd($email, $password, $remember);
        
        
        // return 'Запрос на вход';

    // return response()->redirectToRoute('user');
    // return redirect()->route('user');
    if (true) {
        return redirect()->back()->withInput();
    }

    return redirect()->route('user');

    }
    
}
