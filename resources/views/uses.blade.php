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
                        I shut off everytime. That and I don't really care about cryptocurrency features, so I shut that
                        off as well.
                    </p>
                </div>

                <div class="my-8">
                    <a class="w-full group cursor-pointer" href="https://www.jetbrains.com/phpstorm/">
                        <h4 class="text-3xl text-white mb-4 group-hover:text-neon-green">
                            Wezterm
                        </h4>
                    </a>
                    <p class="font-roboto text-2xl text-dark-neon-green h-full">
                        I normally use the built-in features of PHPStorm to my advantage, while I'm developing. I use
                        Linux as my daily driver and that requires intimate use of the terminal. I use Wezterm for many
                        reasons, mostly because of the simplicity of the UI. It uses Lua for any customizations, and it
                        doesn't have a lot of features that tend to bloat the experience like warp.
                    </p>
                </div>

                <div class="my-8">
                    <a class="w-full group cursor-pointer" href="https://www.jetbrains.com/phpstorm/">
                        <h4 class="text-3xl text-white mb-4 group-hover:text-neon-green">
                            Postman
                        </h4>
                    </a>
                    <p class="font-roboto text-2xl text-dark-neon-green h-full">
                        When you're working fullstack you sometimes need to strip it all away and just send basic
                        requests. I use Postman to do that. There are times when I've had to work as a Front-end dev and
                        the Back-end dev did not want to consider that there was an issue with their code until I
                        exhausted all options. I've used Postman in these situations to strip away any complaints about
                        my code and get the issue fixed.
                        Sometimes it shows that I was wrong and I need to fix my code, other times I am vindicated and
                        laughing manically in my home office.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-4/12 mx-auto my-4">
            <h3 class="text-4xl text-white mb-4">
                Extensions
            </h3>
            <p class="font-roboto text-2xl text-dark-neon-green h-full">
                Believe it or not, I don't tend to lean heavily on extensions. I do have my trusty batterang in my
                utility belt, but I tend to rely on the built-in tools more than anything.
            </p>
            <div class="mt-8">
                <h4 class="text-3xl text-white mb-4">
                    PHPStorm - Plugins
                </h4>
                <ul class="text-white text-xl list-disc list-inside">
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://plugins.jetbrains.com/plugin/20540-codeium-ai-autocomplete-and-chat-for-python-js-java-go--">
                            Codeium
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://plugins.jetbrains.com/plugin/15251-alpine-js-support">
                            Alpine JS Support
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://plugins.jetbrains.com/plugin/19203-antlers-language-support">
                            Antlers Language Support
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://plugins.jetbrains.com/plugin/164-ideavim">
                            IdeaVim
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://plugins.jetbrains.com/plugin/13441-laravel-idea">
                            Laravel Idea
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://plugins.jetbrains.com/plugin/15418-github-theme">
                            GitHub Theme
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mt-8">
                <h4 class="text-3xl text-white mb-4">
                    Brave Browser - Extension
                </h4>
                <ul class="text-white text-xl list-disc list-inside">
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://www.wappalyzer.com/">
                            Wappalyzer
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://bitwarden.com/">
                            BitWarden
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://github.com/tulios/json-viewer">
                            JSON Viewer
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://chromewebstore.google.com/detail/vuejs-devtools/nhdogjmejiglipccpnnnanhbledajbpd">
                            Vue DevTools
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://chromewebstore.google.com/detail/react-developer-tools/fmkadmapgofadopljbjfkapdkoienihi">
                            React DevTools
                        </a>
                    </li>
                    <li class="group">
                        <a class="group-hover:text-neon-green"
                           href="https://chromewebstore.google.com/detail/yet-another-lorem-ipsum-g/fafiooicgpgnicbbkfgimcofbhpcledk">
                            Yet Another Lorem Ipsum Generator
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
