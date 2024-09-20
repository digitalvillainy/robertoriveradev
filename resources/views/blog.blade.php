@extends('layouts.app')
@section('title', 'Blog For Roberto Rivera | Full Stack Web Developer')
@section('description', 'Full Stack Web Developer, located in New York State. Specializing in PHP and JavaScript. Available for freelancing or full time hire.')
@section('content')
    <section class="w-11/12 mx-auto">
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
