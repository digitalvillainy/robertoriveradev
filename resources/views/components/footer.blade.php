<footer class="flex flex-row w-full my-3 px-2">
    <div class="flex flex-col lg:flex-row justify-between w-full">
        <div class="bg-white rounded-md py-1 px-1 mx-2 md:mx-0 my-2 text-2xl flex flex-row justify-between">
            <ul class="flex flex-row justify-between content-center place-items-center w-full">
                <li>
                    <a href="https://www.threads.net/@xerafenix" target="_blank" class="group">
                        @include('components.icons.threads')
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/xerafenix/" target="_blank" class="group">
                        @include('components.icons.instagram')
                    </a>
                </li>
                <li>
                    <a href="https://www.upwork.com/freelancers/~01dca66f043497b720" target="_blank" class="group">
                        @include('components.icons.upwork')
                    </a>
                </li>
                <li>
                    <a href="https://github.com/digitalvillainy" target="_blank" class="group">
                        @include('components.icons.github')
                    </a>
                </li>
            </ul>
        </div>
        <div class="bg-neon-green rounded-md py-1 px-3 my-2 mx-3 lg:mx-0 md:mx-auto lg:m-2 text-xl text-right w-11/12 lg:w-full md:w-full place-content-center 2xl:ml-4">
            Made By Roberto Rivera &copy; {{date('Y')}}
        </div>
    </div>
</footer>
