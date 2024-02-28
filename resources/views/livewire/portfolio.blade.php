<div>
    <div>
        @extends('app')
        @section('title', 'Portfolio')
        @section('content')

        <div class="flex items-center justify-center py-2 font-serif min-h-screen"
            style="background-image: url('{{ asset ('img/BG-Home.jpg' )}}')">
            <div class="flex flex-col mx-3 max-w-lg rounded overflow-hidden shadow-lg bg-gray-900">
                <video class="w-full" autoplay loop muted>
                    <source src="{{asset('./video/showcase-simple-post.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="px-6 py-4">
                    <div class="flex flex-row justify-end">
                        <div class="font-bold text-xl mb-2 text-white mr-auto">Simple Pos</div>
                        <a href="https://github.com/TMaulana26/simpel-pos" target="_blank">
                            <i class="text-2xl fab fa-github text-white"></i>
                        </a>
                    </div>
                    <p class="text-gray-300 text-base">
                        This video demonstrates a sample web application I built, showcasing key features of a
                        user-friendly posting
                        platform using Laravel Framework and Tailwind CSS for the Design. <br><br>
                        This video serves as a glimpse into my web development capabilities, highlighting my skills in
                        creating interactive and
                        user-oriented web applications.
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#simplepos</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#laravel</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#portfolio</span>
                </div>
            </div>
            <div class="flex flex-col mx-3 max-w-lg rounded overflow-hidden shadow-lg bg-gray-900">
                <video class="w-full" autoplay loop muted>
                    <source src="{{asset('./video/showcase-simple-tools.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="px-6 py-4">
                    <div class="flex flex-row justify-end">
                        <div class="font-bold text-xl mb-2 text-white mr-auto">Simple Tools</div>
                        <a href="https://github.com/TMaulana26/simpel-tool" target="_blank">
                            <i class="text-2xl fab fa-github text-white"></i>
                        </a>
                    </div>
                    <p class="text-gray-300 text-base">
                        This video demonstrates a sample web application I built, showcasing key features of a
                        simple tools made by using Laravel Framework, Livewire and Tailwind CSS for the Design. <br><br>
                        This video serves as a glimpse into my web development capabilities, highlighting my skills in
                        creating interactive and a simple web applications.
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#simpletools</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#Livewire</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#portfolio</span>
                </div>
            </div>
            <div class="flex flex-col mx-3 max-w-lg rounded overflow-hidden shadow-lg bg-gray-900">
                <img class="w-full" src="{{asset('./img/portfolio3.png')}}" alt="about me image">
                <div class="px-6 py-4">
                    <div class="flex flex-row justify-end">
                        <div class="font-bold text-xl mb-2 text-white mr-auto">Coming Soon</div>
                        <a href="https://github.com/TMaulana26/" target="_blank">
                            <i class="text-2xl fab fa-github text-white"></i>
                        </a>
                    </div>
                    <p class="text-gray-300 text-base">
                        <br><br>I'm going to make more project. <br><br><br>
                        My next project, I will make a presentation for my proposal seminar about making a
                        chatbot.<br><br>
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#comingsoon</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#nextproject</span>
                </div>
            </div>
        </div>

        @endsection
    </div>
</div>
