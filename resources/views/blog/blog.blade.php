<x-layout>
    <div class="bg-white">
        <div class="container mx-auto py-8">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search" class="border rounded-lg p-2 w-72 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <button class="bg-[#FFA629] text-black px-4 py-2 rounded-lg hover:bg-yellow-500 focus:outline-none">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>                          
                    </button>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 focus:outline-none">Filters</button>
                    <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 focus:outline-none">Sort</button>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8 ml-10 place-items-center h-auto max-w-full">  
                <div class="p-4">  
                    <img src="https://via.placeholder.com/1000x800" alt="Gambar 1" class="mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
                <div class="p-4">  
                    <img src="https://via.placeholder.com/1000x800" alt="Gambar 2" class="mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
                <div class="p-4">  
                    <img src="https://via.placeholder.com/1000x800" alt="Gambar 3" class="mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
                <div class="p-4">  
                    <img src="https://via.placeholder.com/1000x800" alt="Gambar 4" class="mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
            </div>  
        </div> 

        <div class="bg-[#0A3981] mt-11">  
            <div class="container mx-auto py-8">  
                <h1 class="text-4xl font-bold text-white py-4 text-left ml-10">Trending</h1>  
                    <div class="p-4 place-items-center ">  
                        <img src="https://via.placeholder.com/800x500" alt="Gambar 4" class="mb-2">  
                        <p>Lorem ipsum lorem lorem.</p>  
                        <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                    </div>  
                </div>  
            </div>  
        </div> 

        <div class="grid grid-cols-2 sm:grid-cols-1 gap-8 mt-8 ml-10 place-items-center h-auto max-w-full">  
            <div class="p-4">  
                <img src="https://via.placeholder.com/1000x800" alt="Gambar 2" class="mb-2">  
                <p>Lorem ipsum lorem lorem.</p>  
                <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
            </div>
            <div class="cols-span-2">
                <div class="p-4">  
                    <img src="https://via.placeholder.com/300x200" alt="Gambar 3" class="mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
                <div class="p-4">  
                    <img src="https://via.placeholder.com/300x200" alt="Gambar 4" class="mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
            </div>
        </div>  
        
    </div>  
</x-layout>