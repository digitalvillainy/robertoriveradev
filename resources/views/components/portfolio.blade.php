<section class="border-2 border-neon-green rounded flex flex-col p-4 w-full h-fit mt-5" id="port">
    <span class="text-neon-green w-full text-2xl text-right">PORTFOLIO</span>
    <div class="flex flex-row flex-wrap space-y-5 justify-between content-start w-full md:w-6/12 md:mx-auto 2xl:w-8/12 2xl:justify-center 3xl:justify-between 3xl:w-11/12">
        <x-port-card
            thumbnail="bg-escriben-img"
            title="Escriben - Markdown Editor"
            description="Escriben is a simple markdown editor centered around note taking.
            Create notebooks to help organize notes. Written with a Laravel back-end and a separate Vue 3 front-end.
            This was a lot of fun to build and challenging."
            :languages="['Laravel', 'Vue3', 'TypeScript', 'TailwindCSS', 'MySql', 'Apache']"
            ghLink="https://github.com/digitalvillainy/escriben_fe"
            siteLink="https://escriben.io/"
        />
        <x-port-card
            thumbnail="bg-rbm-img"
            title="Red Banner Media, LLC"
            description="The official home for Red Banner Media, LLC. Created using the TALL stack, allowing for quick implementation."
            :languages="['Laravel', 'LiveWire', 'Alpine.js', 'TailwindCSS', 'Mail Chimp', 'Apache']"
            ghLink="https://github.com/digitalvillainy/rbmport-2024"
            siteLink="https://redbannermedia.com/"
        />
        <x-port-card
            thumbnail="bg-promanage-img"
            title="ProMange Vision"
            description="While freelancing for Productive Edge, I was a hired off of my abilities with Vue and
            knowledge of PHP. I was responsible for the architecture of the Front-end of the site and how to integrate Vue 3 and Laravel."
            :languages="['Laravel', 'Vue3', 'Axios.js', 'TailwindCSS']"
            siteLink="https://abc.dev.promanageplan.com/user/login"
        />
    </div>
</section>
