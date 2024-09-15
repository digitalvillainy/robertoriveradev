<aside class="border-2 border-neon-green rounded flex flex-col p-2 w-full space-y-4 mb-5">
    <span class="text-neon-green w-full text-2xl text-right">TECHNOLOGIES & SKILLS</span>
    <div class="space-y-5 lg:place-items-center mx-auto w-11/12">
        <div class="flex flex-col w-full">
        <span class="text-white text-2xl w-full">
            LANGUAGES
        </span>
            <div
                class="bg-dark-neon-green border-2 border-neon-green rounded flex flex-row flex-wrap justify-between p-1.5 w-fit spacey-y-5 lg:space-x-8 place-items-center">
                <div class="flex flex-row justify-between w-full place-items-center">
                    @include('components.icons.techSkills.html')
                    @include('components.icons.techSkills.js')
                    @include('components.icons.techSkills.css')

                </div>
                <div class="flex flex-row justify-between w-full place-items-center">
                    @include('components.icons.techSkills.ts')
                    @include('components.icons.techSkills.phplang')
                    @include('components.icons.techSkills.mysql')

                </div>
            </div>
        </div>
        <div class="flex flex-col w-full">
        <span class="text-white text-2xl w-full">
            LANGUAGES & FRAMEWORKS
        </span>
            <div
                class="bg-dark-neon-green border-2 border-neon-green rounded flex flex-row flex-wrap justify-between p-1.5 w-fit spacey-y-5 lg:space-x-8 place-items-center">
                <div class="flex flex-row justify-between w-full place-items-center">
                    @include('components.icons.techSkills.react')
                    @include('components.icons.techSkills.vue')
                    @include('components.icons.techSkills.laravel')

                </div>
                <div class="flex flex-row justify-between w-full place-items-center">
                    @include('components.icons.techSkills.livewire')
                    @include('components.icons.techSkills.tailwind')
                    @include('components.icons.techSkills.alpine')

                </div>
            </div>
        </div>

        <div class="flex flex-col w-full">
        <span class="text-white text-2xl w-full">
            SOFTWARE & TOOLS
        </span>
            <div
                class="bg-dark-neon-green border-2 border-neon-green rounded flex flex-row flex-wrap p-1.5 w-fit space-x-8 place-items-center">
                <div class="flex flex-row justify-between">
                    @include('components.icons.techSkills.github')
                    @include('components.icons.techSkills.git')
                    @include('components.icons.techSkills.apache')
                </div>
                <div class="flex flex-row justify-between">
                    @include('components.icons.techSkills.docker')
                    @include('components.icons.techSkills.storybook')
                    @include('components.icons.techSkills.figma')
                </div>
            </div>
        </div>
    </div>
</aside>
