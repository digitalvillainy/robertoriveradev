@extends('layouts.app')
@section('content')
    <div class="mx-2 flex flex-col lg:flex-row w-full">
        @include('components.sidebar')
        <div class="flex flex-col w-full">
            @include('components.experience')
            @include('components.portfolio')
        </div>
    </div>
@endsection
