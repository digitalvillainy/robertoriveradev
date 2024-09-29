<section class="border-2 border-neon-green rounded flex flex-col p-4 w-full mt-5 mr-4 h-full" id="blog">
    <span class="text-neon-green w-full text-2xl text-right 3xl:text-3xl">CURRENT BLOG POSTS</span>
    <div class="flex flex-col md:flex-row justify-between mt-4 flex-wrap w-11/12 mx-auto">
        @foreach($posts as $post)
            <a href="./blog/{{$post['slug']}}"
               class="border-2 border-dark-neon-green rounded flex flex-col 2xl:flex-row md:justify-between p-1.5 w-full
                      text-white space-x-4 mx-2 hover:bg-dark-neon-green/30 hover:border-neon-green hover:shadow-2xl
                      hover:shadow-dark-neon-green my-3 md:w-6/12 mb-3"
            >
                <img src="{{@asset($post['thumbnail'])}}" alt="book thumbnail"
                     class="size-44 md:size-32 mx-auto 2xl:mx-0"/>
                <div class="flex flex-col w-9/12">
                    <div class="flex flex-row justify-between text-neon-green">
                        <span class="text-2xl">{{$post['title']}}</span>
                        <span class="text-xl">{{$post['printDate']}}</span>
                    </div>
                    <p>
                        {{$post['excerpt']}}
                    </p>
                    <span class="text-neon-green text-right">Read More</span>
                </div>
            </a>
        @endforeach

    </div>
</section>
