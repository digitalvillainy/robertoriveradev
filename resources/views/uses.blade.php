@extends('layouts.app')
@section('title', 'Tech and Tools Used By Roberto Rivera | Full Stack Web Developer')
@section('content')
    <section class="border-2 border-neon-green rounded flex flex-col p-1.5 h-full mx-2">
        <span class="text-neon-green w-full text-4xl text-right">USES | TECH AND TOOLS</span>
        <div class="flex flex-col place-items-center">
            <div class="w-4/12 mx-auto my-4">
                <h3 class="text-4xl text-white mb-4">
                    Uses
                </h3>
                <p class="font-roboto text-2xl text-dark-neon-green h-full">
                    I'm joining the web developer trend of having a /uses page! If you're unfamiliar, a /uses page
                    is basically a list of tech ranging from software to hardware that a developer might want to use.
                    This was mostly done for tech influencers and tech enthusiasts with a following. I know what you're
                    thinking... but Roberto you don't have a following and calling you an influencer is highly
                    inaccurate.
                    I'm not really looking to be an influencer per se, but I'm trying to get my voice out there. Which
                    is
                    why my portfolio has a blog to begin with. To share ideas and be more active in a community that has
                    done so much for my life. Most importantly though, this page exists for the simple reason that I
                    think
                    it's fun! Tech often changes and so my tool kit is constantly updating. Hopefully you find this
                    helpful.
                </p>
            </div>

            <div class="w-4/12 mx-auto my-4">
                <h3 class="text-4xl text-white mb-4">
                    Software
                </h3>
                <div>
                    <a class="w-full group cursor-pointer" href="https://www.jetbrains.com/phpstorm/">
                        <h4 class="text-3xl text-white mb-4 group-hover:text-neon-green">
                            PHPStorm
                        </h4>
                    </a>
                    <p class="font-roboto text-2xl text-dark-neon-green h-full">
                        I know that VS Code is the go to for most developers, but I love Jetbrains and their products.
                        I've used different editors in the past but PHPStorm just has such a refined experience. In my
                        opinion,
                        a good IDE comes packaged with first party features that are essential for your stack and your
                        workflow.
                        Whenever I hit a problem I can easily reach into the built-in features and find the solution,
                        rather
                        than
                        having to search through a plugin/extension market.

                        Not that plugin/extensions are bad at all, I just like to trust that JetBrains will continue to
                        work
                        on a feature rather than someone who is doing it for free and may drop support after a while.
                    </p>
                </div>

                <div class="my-8">
                    <a class="w-full group cursor-pointer" href="https://www.jetbrains.com/phpstorm/">
                        <h4 class="text-3xl text-white mb-4 group-hover:text-neon-green">
                           Brave Browser
                        </h4>
                    </a>
                    <p class="font-roboto text-2xl text-dark-neon-green h-full">
                        Chrome's dev tools are the best, but I really disliked that they didn't have privacy built in.
                        Enter Brave Browser! Privacy is built in and gives me the best experience on the web while
                        allowing access to Chrome's amazing dev tools.

                        Personally, I wouldn't take it unmodified though. It has a pop-up advertisement alternative that
                        I shut off everytime. That and I really don't really care about the cryptocurrency, so I also
                        shut that off as well.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
