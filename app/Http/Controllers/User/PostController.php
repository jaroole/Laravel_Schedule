<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

      
            $post=(object)[
                'id'=>'123',
                'title'=>'Lorem ipsum dolor sit amet.',
                'content'=>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Amet, fugit?',
            ];
            $posts=array_fill(0,10, $post);
           
        
        return view('user.posts.index', compact('posts'));
    }
    public function create(){
        return view('user.posts.create');
    }
    public function store(Request $request){

        $title=$request->input('title');
        $content=$request->input('content');
      

        //dd($title, $content);
        return redirect()->route('user.posts.show', 123);
    }
    public function show($post){

        $post=(object)[
            'id'=>'123',
            'title'=>'Lorem ipsum dolor sit amet.',
            'content'=>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Amet, fugit?',
        ];
            
        return view('user.posts.show', compact('post'));
    }
    public function edit($post){
        $post=(object)[
            'id'=>'123',
            'title'=>'Lorem ipsum dolor sit amet.',
            'content'=>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Amet, fugit?',
        ];
       
        return view('user.posts.edit', compact('post'));

     
       
    }
    public function update(Request $request, $post){

        $title=$request->input('title');
        $content=$request->input('content');
      

        // dd($title, $content);
        // return 'Страница обновления постов';

        // return redirect()->route('user.posts.show', $post);
        return redirect()->back();
    }
    public function delete($post){
        // return 'Страница удаления постов';
        return redirect()->route('user.posts');

    }
    public function like(){
        return ' лайка+1';
    }
    // public function create(){
    //     return 'Страница списка постов';
    // }

}

