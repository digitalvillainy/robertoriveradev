<section class="border-2 border-neon-green rounded flex flex-col p-3 w-full h-[40vh] my-6">
    <span class="text-neon-green w-full text-2xl text-right">PORTFOLIO</span>
    <div class="flex flex-row justify-between">
        @include('components.port-card',  [
                'imgs'=> ['media/escriben.png', 'media/escribenVideo.gif'],
                'title' => 'Escriben - Markdown Editor',
                'description' => 'Escriben is a simple markdown editor centered around note taking.
                Create notebooks to help organize notes. Written with a Laravel back-end and a separate Vue 3 front-end.
                 This was a lot of fun to build and challenging. ',
                'languages' => ['Laravel', 'Vue3', 'TypeScript', 'TailwindCss', 'MySql', 'Apache'],
                'ghLink' => 'https://github.com/digitalvillainy/escriben_fe',
                'siteLink' => 'https://escriben.io/',
           ]
        )
{{--        @include('components.port-card')--}}
{{--        @include('components.port-card')--}}
    </div>
</section>
