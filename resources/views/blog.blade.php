@extends('layouts.app')
@section('content')
    <section class="w-11/12 mx-auto">
        @markdom($post['content'])
        <div
            class="flex flex-row justify-start w-full text-dark-neon-green hover:text-neon-green cursor-pointer text-2xl">
            <button class="bg-neon-green rounded w-20 h-10 px-3 hover:bg-white">
                <a class="text-black" href="/#blog">BACK</a>
            </button>
        </div>
    </section>
@endsection
