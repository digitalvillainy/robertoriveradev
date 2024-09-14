@props(['thumbnail', 'title', 'description', 'languages', 'ghLink' => false, 'siteLink' => false])
<section class="border-2 border-neon-green rounded flex flex-col p-1.5 max-w-96 min-h-full max-w-7/12">
    <div class="{{$thumbnail}} w-full h-60"></div>
    <div class="my-5 space-y-2 grow">
        <h5 class="text-3xl text-white">{{$title}}</h5>
        <p class="text-2xl text-dark-neon-green h-full">{{$description}}</p>
    </div>
    <div class="flex flex-wrap flex-row justify-between text-white w-full">
        @foreach($languages as $language)
            <div class="border-2 border-dark-neon-green py-0.5 w-24 rounded-md text-white my-1.5 text-center">
                {{$language}}
            </div>
        @endforeach
    </div>
    <div class="flex flex-row justify-between">
        <div>
            @if($ghLink)
                <button class="bg-neon-green rounded w-32 h-10 hover:bg-white">
                    <a class="flex flex-row justify-between p-1 w-full place-items-center" href="{{$ghLink}}"
                       target="_blank">
                        <span class="text-base">Visit Github</span>
                        @include('components.icons.github', ['size'=> 'size-5'])
                    </a>
                </button>
            @endif

        </div>

        <div>
            @if($siteLink)
                <button class="bg-neon-green rounded w-32 h-10 px-3 hover:bg-white">
                    <a class="flex flex-row justify-between p-1 w-full place-items-center"
                       href="{{$siteLink}}"
                       target="_blank">
                        <span class="text-base">Visit Site</span>
                        @include('components.icons.link')
                    </a>
                </button>
            @endif
        </div>

    </div>
</section>
