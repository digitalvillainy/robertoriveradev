@extends('layouts.app')
@section('content')
    <div class="mx-2 flex flex-col lg:flex-row ">
        @include('components.sidebar')
        <div class="flex flex-col w-full h-full">
            @include('components.experience')
            @include('components.portfolio')
            @include('components.blogs', ['posts' => $posts])
        </div>
    </div>
@endsection
