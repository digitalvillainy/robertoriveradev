@props(['title', 'company', 'from', 'to', 'description'])
<div class="border-2 border-dark-neon-green rounded flex flex-col p-3 w-[30em] text-white justify-between text-xl space-y-3">
    <h3 class="text-3xl">{{ $company }}</h3>
    <div class="flex flex-row justify-between">
        <span>{{ $title }}</span>
        <span>{{ $from }} - {{ $to }}</span>
    </div>
    <p class="text-neon-green">{{ $description }}</p>
</div>
