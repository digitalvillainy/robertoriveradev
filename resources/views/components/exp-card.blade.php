@props([
    'title' => 'Full Stack Web Developer',
    'company' => 'Red Banner Media, LLC [Remote]',
    'from' => 'April 2020',
    'to' => 'April 2022',
    'description' => 'Collaborating with other teams of developers to create a full roadmap for development.',
    'msg' => 'You? Contact me today!',
    'time' => 'Currently',
    'position' => 'left',
    'mode'=> 'full'
])

@if($mode === 'full')
    <div class="flex flex-row relative">
        <div class="border-2 border-dark-neon-green rounded flex flex-col p-3 lg:w-[30em] text-white justify-between text-xl space-y-3">
            <h3 class="text-3xl">{{ $company }}</h3>
            <div class="flex flex-row justify-between">
                <span>{{ $title }}</span>
                <span>{{ $from }} - {{ $to }}</span>
            </div>
            <p class="text-neon-green">{{ $description }}</p>
        </div>
        <div @class([
            'hidden bg-white h-1.5 w-28 absolute top-1/2',
            '-left-28' => $position === 'left',
             '-right-28' => $position === 'right'
         ])>
            <div @class([
                'bg-dark-neon-green size-8 absolute -top-4',
                '-left-4 justify-self-end' => $position === 'left',
                '-right-4 justify-self-start' => $position === 'right'
            ])></div>
        </div>
    </div>
@else
    <div class="border-2 border-dark-neon-green rounded p-1.5 lg:w-[30em] text-white text-xl relative mb-4">
        <div class="flex flex-row justify-between">
            <span>{{$msg}}</span>
            <span>{{$time}}</span>
        </div>
        <div @class([
            'hidden bg-white h-1.5 w-28 absolute top-1/2',
            '-left-28' => $position === 'left',
             '-right-28' => $position === 'right'
         ])>
            <div @class([
                'bg-dark-neon-green size-8 absolute -top-4',
                '-left-4 justify-self-end' => $position === 'left',
                '-right-4 justify-self-start' => $position === 'right'
            ])></div>
        </div>
    </div>
@endif
