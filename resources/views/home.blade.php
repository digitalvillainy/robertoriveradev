@extends('layouts.app')
@section('title', 'Roberto Rivera | Full Stack Web Developer')
@section('description', 'Full Stack Web Developer, located in New York State. Specializing in PHP and JavaScript. Available for freelancing or full time hire.')
@section('content')
    <div class="mx-2 flex flex-col lg:flex-row ">
        @include('components.sidebar')
        <div class="flex flex-col w-full h-full 3xl:w-9/12">
            @include('components.experience')
            @include('components.portfolio')
            @include('components.blogs', ['posts' => $posts])
        </div>
    </div>
@endsection
