@extends('layouts.app')
@section('title', 'Blog For Roberto Rivera | Full Stack Web Developer')
@section('description', $post['meta']['excerpt'])
@section('content')
    <section class="w-11/12 mx-auto">
        <h1 class="text-4xl text-neon-green">
            {{$post['meta']['title']}}
        </h1>
        <div class="flex flex-row justify-between mb-10">
            <span class="text-xl text-dark-neon-green">
                Written By: {{$post['meta']['author']}}
            </span>
            <span class="text-xl text-white">
            {{$post['printDate']}}
        </span>
        </div>
        <div class="min-w-11/12 max-w-3/12 mx-auto">
            @markdom($post['content'])
        </div>
        <div
            class="flex flex-row justify-start w-full text-dark-neon-green hover:text-neon-green cursor-pointer text-2xl">
            <button class="bg-neon-green rounded w-20 h-10 px-3 hover:bg-white">
                <a class="text-black" href="/#blog">BACK</a>
            </button>
        </div>
    </section>
@endsection
