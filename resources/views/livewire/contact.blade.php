<div>
    <div>
        @extends('app')
        @section('title', 'Contact')
        @section('content')

        <div class="flex items-center justify-center min-h-screen font-serif"
            style="background-image: url('{{ asset ('img/BG-Home-rev.png' )}}')">
            <div class="flex flex-col lg:flex-row m-3 mb-8">
                <div class="flex flex-col text-white bg-gray-900 w-full rounded">
                    <div class="shadow-md rounded m-4">
                        <h1 class="text-3xl font-bold mb-4">Contact Me</h1>
                        <form action="/contactme" method="POST" class="mb-4">
                            @csrf
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden mr-4 img-hover">
                                    <img src="{{ asset('./img/PP3.jpg')}}" alt="Profile Picture">
                                </div>
                                <div>
                                    <p class="font-bold">Taufik Maulana</p>
                                    <p><i class="text-sm">Will be, master of</i><br> Web Developer</p>
                                </div>
                            </div>
                            <label for="name" class="block mb-2">Name:</label>
                            <input type="text" name="name"
                                class="bg-gray-800 text-white px-3 py-1 mr-1 rounded w-full mb-2"
                                placeholder="Your Name" required>
                            <label for="email" class="block mb-2">Email:</label>
                            <input type="email" name="email"
                                class="bg-gray-800 text-white px-3 py-1 mr-1 rounded w-full mb-2"
                                placeholder="Your Email" required>
                            <label for="message" class="block mb-2">Message:</label>
                            <textarea name="message" class="bg-gray-800 text-white px-3 py-1 mr-1 rounded w-full mb-4"
                                rows="3" placeholder="Your Message" required></textarea>
                            <button type="submit"
                                class="bg-gray-600 text-white px-3 py-1 rounded hover:bg-gray-200">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col bg-white items-center justify-items-center w-full rounded">
                    <div class="shadow-md rounded m-4">
                        <label class="block text-gray-600 text-3xl font-bold mb-4 ml-4" for="pdf">
                            My CV
                        </label>
                        <object class="w-96 h-96" data="{{ asset('./pdf/CV.pdf') }} " type="application/pdf">
                            <p>Unable to display PDF file.</p>
                        </object>
                        <div class="flex items-center justify-end m-4">
                            <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"
                                href="{{asset('./pdf/CV.pdf')}}">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection
</div>