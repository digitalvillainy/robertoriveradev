@extends('layouts.app')
@section('content')
    <div class="flex flex-row justify-between">
        <aside class="mx-2 flex flex-col lg:flex-row w-3/12">
            <div
                class="border-2 border-neon-green rounded flex flex-col p-1.5 w-full mb-8 mr-4 overflow-y-auto">
                <span class="text-neon-green w-full text-2xl text-right 3xl:text-3xl">CURRENT BLOG POSTS</span>
                @foreach($posts as $post)
                    <a href="./blog/{{$post['title']}}"
                       class="border-2 border-dark-neon-green rounded flex flex-row justify-between p-1.5 w-11/12 mb-3 text-white space-x-4">
                        <img src="{{@asset($post['thumbnail'])}}" alt="book thumbnail" class="size-32"/>
                        <div class="flex flex-col w-9/12">
                            <div class="flex flex-row justify-between text-neon-green">
                                <span class="text-2xl">{{$post['title']}}</span>
                                <span class="text-xl">{{$post['printDate']}}</span>
                            </div>
                            <p>
                                {{$post['excerpt']}}
                            </p>

                        </div>
                    </a>
                @endforeach
            </div>
        </aside>

        <main class="mx-2 flex flex-col lg:flex-row w-9/12">

        </main>
    </div>
@endsection

