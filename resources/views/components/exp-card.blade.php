@props(['title', 'company', 'from', 'to', 'description', 'position' => 'left'])
<div class="flex flex-row relative">
    <div
        class="border-2 border-dark-neon-green rounded flex flex-col p-3 w-[30em] text-white justify-between text-xl space-y-3">
        <h3 class="text-3xl">{{ $company }}</h3>
        <div class="flex flex-row justify-between">
            <span>{{ $title }}</span>
            <span>{{ $from }} - {{ $to }}</span>
        </div>
        <p class="text-neon-green">{{ $description }}</p>
    </div>
    <div @class([
        'bg-white h-1.5 w-28 absolute top-1/2',
        '-left-28' => $position === 'left',
         '-right-28' => $position === 'right'
     ])
    >
        <div @class([
        'bg-dark-neon-green size-8 absolute -top-4',
        '-left-4 justify-self-end' => $position === 'left',
        '-right-4 justify-self-start' => $position === 'right'
        ])></div>
    </div>
</div>
