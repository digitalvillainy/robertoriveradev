@props(['imgs', 'title', 'description', 'languages', 'ghLink' => false, 'siteLink' => false])
<section class="border-2 border-neon-green rounded flex flex-col p-1.5 max-w-80 h-full my-6">
{{--    <div class="bg-[url('{{asset($imgs[0])}}')] hover:bg-[url('{{asset($imgs[1])}}')]--}}
{{--                bg-cover bg-center bg-no-repeat h-96 w-full"></div>--}}
        <div class="bg-[url('{{asset($imgs[0])}}')]
                    bg-cover bg-center bg-no-repeat h-96 w-full"></div>
    <h5 class="text-2xl text-white">{{$title}}</h5>
    <p class="text-neon-green">{{$description}}</p>
    <div class="flex flex-wrap flex-row text-white max-w-80 justify-between">
        @foreach($languages as $language)
            <div class="border-2 border-dark-neon-green py-0.5 px-7 w-fit rounded-md text-white mx-1 my-1.5">
                {{$language}}
            </div>
        @endforeach
    </div>
    <div class="flex flex-row justify-between">
        <div>
            @if($ghLink)
                <button class="bg-neon-green rounded w-32">
                    <a class="flex flex-row justify-between py-2 px-1 w-full place-items-center" href="{{$ghLink}}"
                       target="_blank">
                        <span class="text-xl">Visit Github</span>
                        @include('components.icons.github')
                    </a>
                </button>
            @endif

        </div>

        <div>
            @if($siteLink)
                <button class="bg-neon-green rounded w-32">
                    <a class="flex flex-row justify-between py-2 px-1 w-full place-items-center" href="{{$siteLink}}"
                       target="_blank">
                        <span class="text-xl">Visit Site</span>
                        @include('components.icons.link')
                    </a>
                </button>
            @endif
        </div>
    </div>
</section>
