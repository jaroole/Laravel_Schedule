@extends('layouts.main')
@section('page.title', 'Просмотр поста')
@section('main.content')
       

        <x-title>
            <x-slot name="link">
                    <a href="{{route('user.posts')}}">
                        {{__('Назад')}}
                    </a>
            </x-slot>
        </x-title>


        <x-title>
            {{__('Просмотр поста')}}
            <x-slot name="right">
                    <x-button-link href="{{route('user.posts.edit', $post->id)}}">
                        {{__('Изменить')}}
                    </x-button-link>
            </x-slot>
        </x-title>

            <h2 class="h4">
               
                    {{$post->title}}

               


            </h2>
            <div class="small text-muted">
                {{now()->format('d.m.y h:i:s')}}
            </div>

            <div class="pt-3">
                {!!$post->content!!}
        
        
               </div>
        </div>
       
   

@endsection
   