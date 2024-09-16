@props([
    'title' => 'Full Stack Web Developer',
    'company' => 'Red Banner Media, LLC [Remote]',
    'from' => 'April 2020',
    'to' => 'April 2022',
    'description' => 'Collaborating with other teams of developers to create a full roadmap for development.',
    'msg' => 'You? Contact me today!',
    'time' => 'Currently',
    'lineClass' => 'hidden md:block bg-white h-1.5 w-28 absolute top-1/2 md:-right-28',
    'boxClass' => 'bg-dark-neon-green size-8 absolute -top-4 md:-right-4',
    'mode'=> 'full'
])

@if($mode === 'full')
    <div class="flex flex-row relative">
        <div class="border-2 border-dark-neon-green rounded flex flex-col p-3 lg:w-[18.2em] xl:w-[30em] 2xl:w-[20em] text-white justify-between text-xl space-y-3">
            <h3 class="text-3xl">{{ $company }}</h3>
            <div class="flex flex-row justify-between">
                <span>{{ $title }}</span>
                <span>{{ $from }} - {{ $to }}</span>
            </div>
            <p class="font-roboto text-neon-green">{{ $description }}</p>
        </div>
        <div @class([
                "hidden md:block bg-white h-1.5 w-28 absolute top-1/2 md:-right-28",
                $lineClass
             ])>
            <div @class([
                "bg-dark-neon-green size-8 absolute -top-4 md:-right-4",
                $boxClass
            ])></div>
        </div>
    </div>
@else
    <div class="border-2 border-dark-neon-green rounded p-1.5 lg:w-[18.2em] xl:w-[30em] 2xl:w-[20em] text-white text-xl relative mb-4">
        <div class="flex flex-row justify-between">
            <span>{{$msg}}</span>
            <span>{{$time}}</span>
        </div>
        <div class="hidden md:block bg-white h-1.5 w-28 absolute top-1/2 md:-right-28">
            <div class="bg-dark-neon-green size-8 absolute -top-4 md:-right-4"></div>
        </div>
    </div>
@endif
