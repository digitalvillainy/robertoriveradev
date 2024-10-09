@props(['thumbnail', 'title', 'description', 'languages', 'ghLink' => false, 'siteLink' => false])
<section class="border-2 border-neon-green rounded flex flex-col p-1.5 max-w-96 min-h-full max-w-7/12 2xl:min-w-10/12">
    <div class="{{$thumbnail}} w-full h-60"></div>
    <div class="my-5 space-y-2 grow">
        <h5 class="text-3xl text-white">{{$title}}</h5>
        <p class="font-roboto text-2xl text-dark-neon-green h-full">{{$description}}</p>
    </div>
    <div class="flex flex-wrap flex-row justify-between text-white w-full">
        @foreach($languages as $language)
            <div class="border-2 border-dark-neon-green py-0.5 w-24 rounded-md text-white my-1.5 text-center">
                {{$language}}
            </div>
        @endforeach
    </div>
    <div class="flex flex-col space-y-3 space-x-2 md:flex-row justify-between w-full place-items-end">
        <div class="w-full md:w-6/12">
            @if($ghLink)
                <button class="bg-neon-green rounded w-full lg:w-32 2xl:w-full h-10 px-3 hover:bg-white">
                    <a class="flex flex-row justify-between w-full place-items-center"
                       href="{{$ghLink}}"
                       target="_blank">
                        <span class="text-md 2xl:text-2xl 2xl:pr-3">Visit Github</span>
                        @include('components.icons.github', ['size'=> 'size-5'])
                    </a>
                </button>
            @endif

        </div>

        <div class="w-full md:w-6/12">
            @if($siteLink)
                <button class="bg-neon-green rounded w-full lg:w-32 2xl:w-full h-10 px-3 hover:bg-white">
                    <a class="flex flex-row justify-between w-full place-items-center"
                       href="{{$siteLink}}"
                       target="_blank">
                        <span class="text-lg 2xl:text-2xl pr-3">Visit Site</span>
                        @include('components.icons.link')
                    </a>
                </button>
            @endif
        </div>

    </div>
</section>
