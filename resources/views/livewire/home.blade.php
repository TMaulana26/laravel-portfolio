<div>
    @extends('app')
    @section('title', 'Home')
    @section('content')

    <div class="flex flex-col items-center justify-center min-h-screen py-2 font-serif"
        style="background-image: url('{{ asset ('img/BG-Home.jpg' )}}')">
        <!-- Overview -->
        <div class="flex flex-col md:flex-row items-center justify-center w-full min-h-screen">
            <div class="p-4">
                <img src="{{ asset('img/PP1.jpg') }}" alt="Profile Image" class="rounded-full w-[300px] ">
            </div>
            <div class="md:w-1/2 text-center p-4">
                <h1 class="text-5xl font-bold mb-4 text-white typing-text">Taufik Maulana</h1>
                <p class="text-xl text-gray-200 typing-text">
                    I'm a passionate php developer with a focus on creating dynamic, responsive, and easy to use
                    back-end
                    web applications. My expertise lies in PHP, Laravel, Livewire, and Tailwind CSS, enabling me to
                    build
                    modern
                    and efficient web solutions.
                </p>
            </div>
        </div>
        <!-- Skills -->
        <div class="flex flex-col md:flex-row items-center justify-center w-full">
            <div class="bg-gray-950 p-4 rounded-lg w-[600px] text-white m-4">
                <div class="text-lg font-bold mb-4 text-center">Hard Skills</div>
                <hr class="border-gray-600 my-4">
                <div class="flex items-center justify-between">
                    <div class="text-sm font-bold">HTML</div>
                    <div class="text-sm font-bold">80%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 80%;"></div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm font-bold">CSS</div>
                    <div class="text-sm font-bold">70%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 70%;"></div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm font-bold">JavaScript</div>
                    <div class="text-sm font-bold">50%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 50%;"></div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm font-bold">PHP</div>
                    <div class="text-sm font-bold">80%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 80%;"></div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm font-bold">Laravel</div>
                    <div class="text-sm font-bold">70%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 70%;"></div>
                </div>
            </div>

            <div class="bg-gray-950 p-4 rounded-lg w-[600px] text-white m-4">
                <div class="text-lg font-bold mb-4 text-center">Soft Skills</div>
                <hr class="border-gray-600 my-4">
                <div class="flex items-center justify-between">
                    <div class="text-sm font-bold">Communication</div>
                    <div class="text-sm font-bold">80%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 80%;"></div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm font-bold">Problem-solving and critical thinking</div>
                    <div class="text-sm font-bold">65%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 65%;"></div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm font-bold">Teamwork and collaboration</div>
                    <div class="text-sm font-bold">65%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 65%;"></div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm font-bold">Adaptability and flexibility</div>
                    <div class="text-sm font-bold">70%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 70%;"></div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="text-sm font-bold">Time management and organization</div>
                    <div class="text-sm font-bold">70%</div>
                </div>
                <div class="h-2 bg-purple-900 rounded-full mt-2">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 70%;"></div>
                </div>
            </div>
        </div>

        @endsection
    </div>
</div>