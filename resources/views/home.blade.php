@extends('layouts.app')
@section('content')
<div x-data="{mode: 'testing'}" x-init="console.log(mode)" class="mx-2 flex flex-row">
    @include('components.sidebar')
    <div class="flex flex-col w-full">
        @include('components.experience')
        @include('components.portfolio')
    </div>
</div>
@endsection
