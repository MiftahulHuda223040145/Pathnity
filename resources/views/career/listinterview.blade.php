<x-layout>
    <div class="container mx-auto p-6 mt-28">
        <div class="bg-white shadow-md rounded-md overflow-hidden">
            <!-- Background Image -->
            <div class="w-full h-60 bg-cover bg-center" style="background-image: url('{{ asset('img/background/background.jpeg') }}');">
            </div>
            <!-- Profile Images -->
            <div class="p-6 flex flex-col items-center">
                <div class="w-24 h-24 rounded-full border-4 border-gray-200 bg-gray-200 flex items-center justify-center -mt-12">
                    <img src="img/profile/profile.png" alt="Profile Image" class="w-24 h-24 rounded-full object-cover">
                </div>
                <h2 class="text-center text-xl font-bold mt-4">Mr Sugeng</h2>
                <p class="text-center text-sm text-gray-500">Bandung, Indonesia</p>
            </div>
        </div>

        <!-- Experience Section -->
        <div class="bg-white shadow-md rounded-md p-6 mt-6">
            <h2 class="text-xl font-bold mb-4">Detail</h2>
            <div class="space-y-4">

                <!-- First Detail -->
                <div class="items-center space-x-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                       
                    </div>
                        <h3 class="font-semibold">Name      : Mr Sugeng</h3>
                        <br>
                        <h3 class="font-semibold">Email     : Sugeng@gmail.com</h3>
                        <br>
                        <h3 class="font-semibold">Address   : nyaganyagame</h3>
                        <br>
                        <h3 class="font-semibold">Number    : nyaganyagame</h3>
                        <br>
                        <h3 class="font-semibold">CV        : <img src="path/to/image.jpg" alt="cv"></h3>
                </div>
            </div>
        </div>
    </div>
</x-layout>