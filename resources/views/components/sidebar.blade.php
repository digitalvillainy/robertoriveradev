<aside class="flex flex-col">
<div class="border-2 border-neon-green rounded flex flex-col p-1.5 w-5/12 mb-8">
    <div class="flex flex-row justify-between w-full">
        <img class="size-56 m-1" src="{{asset('media/profile_pic.jpeg')}}" alt="Roberto Rivera">
        <div class="flex flex-col w-fit space-y-4">
            <span class="text-neon-green w-full text-2xl text-right">ABOUT</span>
            @include('components.icons.resume')
            @include('components.icons.email')
        </div>
    </div>

    <div class="flex flex-col space-y-8 text-xl w-full mx-1 px-0.5">
        <p class="text-neon-green">Hello Everyone!</p>
        <p class="text-neon-green">
            Looking for someone that can make something for the web? I love making things for the web!
        </p>
        <p class="text-white">
            I have been a Full Stack Web Developer since 2018, and during that time I have had the privilege to work
            for
            a variety of clients. From web apps that help streamline a process to websites that bring in customers,
            I
            not only build the things that clients want, I build the things that their business needs.
        </p>
    </div>
</div>
@include('components.techskills')
</aside>
