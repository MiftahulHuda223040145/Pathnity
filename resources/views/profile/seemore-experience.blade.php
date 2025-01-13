<x-layout>
    <div class="container mx-auto px-4 py-6 mt-12">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Search"
                    class="border rounded-lg p-2 w-72 focus:outline-none focus:ring-2 focus:ring-purple-500">
                <button class="bg-[#FFA629] text-black px-4 py-2 rounded-lg hover:bg-yellow-500 focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </button>
            </div>
            <div class="flex space-x-2">
                <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 focus:outline-none">Filters</button>
                <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 focus:outline-none">Sort</button>
            </div>
        </div>


        <h1 class="text-2xl font-bold mb-4">Experience</h1>
        <div class="space-y-4">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-white shadow rounded-lg p-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <img src="img/gas.png" alt="Company Logo" class="h-12 w-12 object-cover rounded-full">
                        <div>
                            <h2 class="text-lg font-medium">Product Developer</h2>
                            <p class="text-sm text-gray-600">PT. Pertamina</p>
                            <p class="text-sm text-gray-600">Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">13/02/2024 - 13/04/2024</p>
                    </div>
                </div>
            @endfor
        </div>

        <div class="mt-6 flex justify-center">
            <nav class="inline-flex shadow-sm">
                <button class="px-4 py-2 border rounded-l-lg bg-white text-gray-700 hover:bg-gray-100">Previous</button>
                <button class="px-4 py-2 border-t border-b bg-gray-100 text-gray-700">1</button>
                <button class="px-4 py-2 border-t border-b bg-white text-gray-700 hover:bg-gray-100">2</button>
                <button class="px-4 py-2 border-t border-b bg-white text-gray-700 hover:bg-gray-100">3</button>
                <button class="px-4 py-2 border rounded-r-lg bg-white text-gray-700 hover:bg-gray-100">Next</button>
            </nav>
        </div>
    </div>
</x-layout>
