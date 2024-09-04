<section class="border-2 border-neon-green rounded flex flex-col p-1.5 w-full">
   <span class="text-neon-green w-full text-2xl text-right">EXPERIENCE</span>
   <div class="border-2 border-dark-neon-green rounded flex flex-row p-1.5 w-96 text-white justify-between text-xl">
       <span>You? Contact me today!</span>
       <span>Currently</span>
   </div>

    @include('components.exp-card', [
        'title' => 'Front-End Web Developer III',
        'company' => 'Productive Edge, Chicago Illinois [Remote]',
        'from' => 'April 2022',
        'to' => 'February 2024',
        'description' => 'Planned the front-end architecture for development of websites and web applications for clients.
        Coordinated with back-end developers, project managers, and clients to develop solutions and maintain transparency in project progress.
        Developed websites and web applications based on project needs. Answered questions from junior developers and collaborated on solutions. Reviewed, tested and debugged code from other developers.'
    ])

    @include('components.exp-card', [
        'title' => 'Full Stack Web Developer',
        'company' => 'Red Banner Media, LLC [Remote]',
        'from' => 'April 2020',
        'to' => 'April 2022',
        'description' => 'Collaborating with other teams of developers to create a full roadmap for development.
        Acted as a Scrum master for WriterBoards. Coordinating between a small team to maintain a large catalog of features and bugs presented by users.
        Reviewed, tested and debugged code from other developers. Co-Designed API backend made with PHP and MySQL.
        Removed superfluous aspects of the Front-End  codebase to match needs of project and Vue best practices.'
    ])

    @include('components.exp-card', [
        'title' => 'Full Stack Web Developer',
        'company' => 'Eagle Productivity Solutions, [Rochester, NY]',
        'from' => 'August 2018',
        'to' => 'January 2020',
        'description' => 'Develop websites and web/mobile applications. Coordinate with a team of other developers and programmers, Project Managers, Graphic Designers, and Production Staff.
        Work with writers and instructional designers to understand content and offer design, layout, and user-interaction/ functionality suggestions as needed.
        Consult with client and internal team on best use of client infrastructure. (Existing web servers, SharePoint, External platforms)'
    ])
</section>


