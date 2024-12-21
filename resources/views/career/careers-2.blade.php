<x-layout>
    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">My Career</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="container mx-auto my-5">
            <div class="grid grid-cols-4 gap-4">  
                @for ($i = 0; $i < 10; $i++)              
                <div class="bg-white rounded-lg shadow-md p-5 border border-gray-300 h-70 w-full items-center gap-4">
                    <div class="place-items-center text-center">
                        <img src="" alt="Company Logo" class="h-12 w-12 mb-14">
                        <h3 class="text-lg font-semibold">Fullstack Developer</h3>
                        <p class="text-gray-600">PT.Pertamina</p>
                        <p class="text-gray-600">Jakarta, Indonesia</p>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">Category</span>
                        <p class="text-gray-600">12.000.000</p>
                    </div>
                </div>
                @endfor
            </div>
        </div>
</x-layout>