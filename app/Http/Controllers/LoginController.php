<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        // session()->put('foo','bar');
        // session()->flush(); 
        // session()->forget('foo');     
        // dd(session()->has('foo'));
        // dd(session()->all());

        return view('login.index');
        
    }
    public function store(Request $request)
    {

        //session(['alert'=>__('Добро пожаловать')]);
        alert(__('Добро пожаловать'));
        
        
        // $session = app()->make('session');
        // $session = app('session');
        // $session = Session::get('key');
        // $session = Session::put('key');
        // session()->put('foo','bar');


        
        
        
        
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
    // if (true) {
    //     return redirect()->back()->withInput();
    // }

    return redirect()->route('user');

    }
    
}
