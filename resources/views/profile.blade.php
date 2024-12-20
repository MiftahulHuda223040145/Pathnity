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
                <h2 class="text-center text-xl font-bold mt-4">Pa Sugeng</h2>
                <p class="text-center text-sm text-gray-500">Bandung, Indonesia</p>
            </div>
        </div>

        <!-- Experience Section -->
        <div class="bg-white shadow-md rounded-md p-6 mt-6">
            <h2 class="text-xl font-bold mb-4">Experience</h2>
            <div class="space-y-4">
                <!-- First Experience Item -->
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="img/medsos/linkedin.png" alt="Company Image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="font-semibold">Software Engineer</h3>
                        <p class="text-sm text-gray-500">Tech Company | 2020-01-01 - 2023-01-01</p>
                        <button class="bg-orange-500 text-white px-4 py-2 text-sm rounded mt-2">See More</button>
                    </div>
                </div>
                <!-- Second Experience Item -->
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="img/medsos/ig.png" alt="Company Image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="font-semibold">Senior Developer</h3>
                        <p class="text-sm text-gray-500">Another Tech Company | 2018-01-01 - 2020-01-01</p>
                        <button class="bg-orange-500 text-white px-4 py-2 text-sm rounded mt-2">See More</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="bg-white shadow-md rounded-md p-6 mt-6">
            <h2 class="text-xl font-bold mb-4">Skills</h2>
            <ul class="list-disc pl-6 text-gray-700 space-y-2">
                <li>English Language</li>
                <li>Germany Language</li>   
                <li>Italy Language</li>
            </ul>
            <button class="bg-orange-500 text-white px-4 py-2 text-sm rounded mt-4">See More</button>
        </div>
        
        <div class="bg-white shadow-md rounded-md p-6 mt-6">
            <h2 class="text-xl font-bold mb-4">Education</h2>
            <div class="flex items-center space-x-4">
                <!-- Gambar bulat tanpa background abu-abu -->
                <div class="w-16 h-16 rounded-full overflow-hidden">
                    <img src="img/education/unpas.png" alt="Company Image" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="font-semibold">University of Bandung</h3>
                    <p class="text-sm text-gray-500">Bachelor's Degree | 2016</p>
                    <button class="bg-orange-500 text-white px-4 py-2 text-sm rounded mt-2">See More</button>
                </div>
            </div>
        </div>
        
    </div>
</x-layout>
