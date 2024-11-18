@extends('layouts.app')
@section('title', 'Blog For Roberto Rivera | Full Stack Web Developer')
@section('description', $post['meta']['excerpt'])
@section('content')
    <section class="mx-3 flex flex-col lg:flex-row justify-between">
        <aside class="flex flex-col w-full lg:w-6/12 xl:w-6/12 lg:mr-5 3xl:w-3/12">
            <div class="border-2 border-neon-green rounded flex flex-col p-1.5 w-full mb-8 mr-4">
                <div class="flex flex-col md:flex-row justify-between w-full">
                    <img class="md:size-96 lg:size-56 xl:size-64" src="{{asset('media/profile_pic.jpeg')}}"
                         alt="Roberto Rivera">
                    <div
                        class="flex flex-row justify-between w-full my-3 md:flex-col md:w-2/12 md:place-items-end lg:w-fit lg:space-y-6 3xl:h-fit
                3xl:justify-between 3xl:place-items-end 3xl:w-4/12 3xl:mx-0">
                        <span class="text-neon-green w-fit text-2xl text-right 3xl:text-3xl">ABOUT THE AUTHOR</span>
                        <div class="flex flex-row gap-4 md:flex-col">
                            @include('components.icons.resume')
                            @include('components.icons.email')
                        </div>
                    </div>
                </div>

                <div class="flex flex-col space-y-8 text-xl w-full mx-1 px-1 font-roboto">
                    <p class="text-neon-green">Hello Everyone!</p>
                    <p class="text-neon-green">
                        Looking for someone that can make something for the web? I love making things for the web!
                    </p>
                    <p class="text-white">
                        I have been a Full Stack Web Developer since 2018, and during that time I have had the privilege
                        to work
                        for a variety of clients. From web apps that help streamline a process to websites that bring in
                        customers, I not only build the things that clients want, I build the things that their business
                        needs.
                    </p>
                </div>
            </div>
        </aside>
        <div class="w-full lg:w-9/12 border-2 border-neon-green rounded p-4">
            <div class="flex flex-row justify-between mb-8">
                <h1 class="text-4xl text-neon-green">
                    {{$post['meta']['title']}}
                </h1>
                <span class="text-neon-green w-fit text-2xl text-right 3xl:text-4xl">BLOG</span>
            </div>
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
                <button class="bg-neon-green rounded w-20 h-10 px-3 mt-8 mb-3 hover:bg-white">
                    <a class="text-black" href="/#blog">BACK</a>
                </button>
            </div>

        </div>
    </section>
@endsection
