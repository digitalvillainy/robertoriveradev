<aside class="flex flex-col w-full lg:w-6/12 xl:w-6/12 lg:mr-5 3xl:w-3/12">
    <div class="border-2 border-neon-green rounded flex flex-col p-1.5 w-full mb-8 mr-4">
        <div class="flex flex-col md:flex-row justify-between w-full">
            <img class="md:size-96 lg:size-56 xl:size-64" src="{{asset('media/profile_pic.jpeg')}}"
                 alt="Roberto Rivera">
            <div
                class="flex flex-row justify-between w-full my-3 md:flex-col md:w-2/12 md:place-items-end lg:w-fit lg:space-y-6 3xl:h-fit
                3xl:justify-between 3xl:place-items-end 3xl:w-4/12 3xl:mx-0">
                <span class="text-neon-green w-fit text-2xl text-right 3xl:text-3xl">ABOUT</span>
                <div class="flex flex-row gap-4 md:flex-col">
                    @include('components.icons.resume')
                    @include('components.icons.email')
                </div>
            </div>
        </div>

        <div class="flex flex-col space-y-8 text-xl w-full mx-1 px-1 font-roboto">
            <p class="text-neon-green">Hello Everyone!</p>
            <p class="text-neon-green">
                Looking for someone that can make something for the web? I love making things for the web!
            </p>
            <p class="text-white">
                I have been a Full Stack Web Developer since 2018, and during that time I have had the privilege to work
                for a variety of clients. From web apps that help streamline a process to websites that bring in
                customers, I not only build the things that clients want, I build the things that their business needs.
            </p>
        </div>
    </div>
    @include('components.techskills')
</aside>
