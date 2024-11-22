<section class="border-2 border-neon-green rounded flex flex-col p-1.5 h-full" id="exp">
    <span class="text-neon-green w-full text-2xl text-right">EXPERIENCE</span>
    <div
        class="flex flex-row justify-between md:w-[27.3em] lg:w-[30em] xl:w-[44.6em] 2xl:w-[32em] 3xl:w-[51.1em] md:mx-auto">
        <div
            class="flex flex-col place-items-start lg:justify-between h-full md:w-80 lg:w-full lg:mx-auto py-8 space-y-6">
            <div class="flex flex-col justify-between h-full lg:h-3/5 3xl:h-4/5">
                <x-exp-card
                    msg="You? Contact me today!"
                    time="Currently"
                    mode="short"
                />

                <x-exp-card
                    title="Front-End Web Developer III"
                    company="Productive Edge, Chicago Illinois [Remote]"
                    from="April 2021"
                    to="February 2023"
                    box-class="bg-dark-neon-green size-8 absolute -top-4 md:-right-4"
                    line-class="hidden md:block bg-white h-1.5 w-28 absolute top-1/2 md:-right-28"
                    :description="[
                        'Developed full stack solution, where I used Laravel-mix to render Blade
                        and Vue components for quick page renders. In addition, this sped up the
                        site as there wasn’t a need to wait on an API end-point before rendering.
                        Styled with Tailwind each component followed a figma design.',
                        'I created an MVP using Caspio as a backend API and vanilla HTML, CSS,
                        and JavaScript. After reaching an MVP, I designed the architecture for the
                        front end. Using Vue 3, SCSS, and Axios.js (for better API calls), we
                        created a feature-rich front-end experience for their customers.',
                        'On a tight deadline, we updated a health insurance company’s website
                        from an old HTML table structure to a modern mobile responsive
                        website. I was also collaborating with a mobile developer to use the
                        website as the front end for the mobile app. We were able to iterate
                        quickly using HTML, CSS, and Alpine.js.',
                        'Collaborating with a team of developers, I created the structure for the
                        front-end using Vue, Vuetify, Vuelidate, and Axios.js, Using Vuetify and
                        Vuelidate to speed up validation and the UI development we were quickly
                        able to create the website.'
                    ]"
                />
            </div>

            {{--            <div class="hidden lg:block bg-white w-1.5 h-full"></div>--}}
            <div class="flex flex-col justify-between h-full space-y-6 3xl:h-full">
                <x-exp-card
                    title="Full Stack Web Developer"
                    company="Red Banner Media, LLC [Remote]"
                    from="April 2020"
                    to="April 2022"
                    :description="[
                        'A delivery driving company needed a dashboard that was easy to handle
                        and mobile responsive. Having been the architect for the front end, I
                        leveraged knowledge of Vue 3 and Tailwind CSS.',
                       'I was originally hired as a freelancer and then brought on full-time to
                       Productive Edge. I leveraged my skills as a full-stack developer working
                       on a Laravel, Vue, and Tailwind project.',
                    ]"
                />

                <x-exp-card
                    title="Full Stack Web Developer"
                    company="Eagle Productivity Solutions, [Rochester, NY]"
                    from="August 2017"
                    to="January 2019"
                    box-class="bg-dark-neon-green size-8 absolute -top-4 md:-right-4"
                    line-class="hidden md:block bg-white h-1.5 w-28 absolute top-1/2 md:-right-28"
                    :description="[
                        'In collaboration with copywriters and product managers, I created
                        widgets for Inkling LMS ranging from word matches to drag-and-drop
                        cards.',
                        'Developed internal websites using SharePoint as the server for several
                        clients. Using Angular.js, Vue, Bootstrap, and vanilla JavaScript.',
                        'Automated updating of text, links, and images for Inkling books, using a
                        mixture of PHP, Bash, and SVN.',
                        'Created several pages and widgets for an October CMS site. Utilizing
                        HTML, CSS, Twig, JavaScript, and PHP.'
                    ]"
                />
            </div>
        </div>
        <div class="hidden md:block bg-white w-2 min-h-full"></div>
    </div>
</section>


