<div>
    <div>
        @extends('app')
        @section('title', 'About Me')
        @section('content')

        <div class="flex items-center min-h-screen justify-center py-2 font-serif"
            style="background-image: url('{{ asset ('img/BG-Home-rev.png' )}}')">
            <div class="flex flex-col mx-3 max-w-lg rounded overflow-hidden shadow-lg bg-gray-900">
                <img class="w-full" src="{{asset('./img/PP2.jpg')}}" alt="Placeholder image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-white">About Me</div>
                    <p class="text-gray-300 text-base">
                        Greetings, everyone! 🙌 I'm Taufik Maulana, a university student specializing in Information
                        System. 💡 Passionate about
                        coding, I find joy in working with PHP and utilizing Laravel as my go-to framework.
                        <br><br> 🖥️ I will continue to expand my
                        knowledge and skills, my ultimate goal is to become a proficient web developer. Let's connect
                        and embark on this coding
                        adventure together!
                        <br><br>#InformationSystemStudent #PHPEnthusiast #LaravelFramework
                        #WebDevelopmentJourney
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#aboutme</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#personal</span>
                </div>
            </div>

            <div class="flex flex-col mx-3 max-w-lg rounded overflow-hidden shadow-lg bg-gray-900">
                <img class="w-full" src="{{asset('./img/ABM2.jpg')}}" alt="about me image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-white">My Journey</div>
                    <p class="text-gray-300 text-base">
                        Hello there! 🌟 I'm on a journey to explore the world of web development. 🚀 With a passion for
                        coding and a love for creativity, I start my coding journey quite late but,
                        I am constantly learning and growing in this field.
                        <br><br>Join me as I navigate through different technologies
                        and frameworks to become a skilled developer. I going to make my dream come true of becoming an
                        expert of back-end web developer.
                        <br><br>#WebDevelopment
                        #CodingJourney
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#webdevelopment</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#codingjourney</span>
                </div>
            </div>

        </div>

        @endsection
    </div>
</div>
