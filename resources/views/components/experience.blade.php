<section class="border-2 border-neon-green rounded flex flex-col p-1.5 h-full xl:h-[72.5vh] 2xl:h-[89.5vh]">
    <span class="text-neon-green w-full text-2xl text-right">EXPERIENCE</span>
    <div class="flex flex-row justify-between md:w-[27.3em] lg:w-[30em] 2xl:w-[64em] md:mx-auto">
        <div class="flex flex-col xl:flex-row place-items-start lg:justify-between h-full md:w-80 lg:w-full lg:mx-auto py-8 space-y-6">
            <div class="flex flex-col justify-between h-full lg:h-3/5">
                <x-exp-card
                    msg="You? Contact me today!"
                    time="Currently"
                    mode="short"
                />

                <x-exp-card
                    title="Full Stack Web Developer"
                    company="Red Banner Media, LLC [Remote]"
                    from="April 2020"
                    to="April 2022"
                    description="Collaborating with other teams of developers to create a full roadmap for development.
                    Acted as a Scrum master for WriterBoards. Coordinating between a small team to maintain a large
                    catalog of features and bugs presented by users. Reviewed, tested and debugged code from other
                    developers. Co-Designed API backend made with PHP and MySQL. Removed superfluous aspects of the
                    Front-End  codebase to match needs of project and Vue best practices."
                />
            </div>

            <div class="hidden lg:block bg-white w-1.5 h-full"></div>
            <div class="flex flex-col justify-between h-full space-y-6">
                <x-exp-card
                    title="Front-End Web Developer III"
                    company="Productive Edge, Chicago Illinois [Remote]"
                    from="April 2021"
                    to="February 2023"
                    box-class="bg-dark-neon-green size-8 absolute -top-4 md:-right-4 2xl:-left-4"
                    line-class="hidden md:block bg-white h-1.5 w-28 absolute top-1/2 md:-right-28 2xl:-left-28"
                    description="Planned the front-end architecture for development of websites and web applications for
                    clients Coordinated with back-end developers, project managers, and clients to develop solutions and
                    maintain transparency in project progress. Developed websites and web applications based on project
                    needs. Answered questions from junior developers and collaborated on solutions. Reviewed, tested and
                     debugged code from other developers."
                />

                <x-exp-card
                    title="Full Stack Web Developer"
                    company="Eagle Productivity Solutions, [Rochester, NY]"
                    from="August 2017"
                    to="January 2019"
                    box-class="bg-dark-neon-green size-8 absolute -top-4 md:-right-4 2xl:-left-4"
                    line-class="hidden md:block bg-white h-1.5 w-28 absolute top-1/2 md:-right-28 2xl:-left-28"
                    description="Develop websites and web/mobile applications. Coordinate with a team of other
                    developers and programmers, Project Managers, Graphic Designers, and Production Staff. Work with
                    writers and instructional designers to understand content and offer design, layout, and
                    user-interaction/ functionality suggestions as needed. Consult with client and internal team on best
                    use of client infrastructure. (Existing web servers, SharePoint, External platforms)"
                />
            </div>
        </div>
        <div class="xl:hidden bg-white w-2 min-h-full"></div>
    </div>
</section>


