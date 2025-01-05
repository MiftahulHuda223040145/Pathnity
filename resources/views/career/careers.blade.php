<x-layout>
    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">My Career</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="container mx-auto my-5">
            <div class="grid grid-cols-4 gap-4">                
                <div class="bg-white rounded-lg shadow-md p-5 border border-gray-300 h-70 w-full items-center gap-4">
                    <div class="place-items-center text-center">
                        <img src="" alt="Company Logo" class="h-12 w-12 mb-14">
                        <h3 class="text-lg font-semibold">Fullstack Developer</h3>
                        <p class="text-gray-600">PT.Pertamina</p>
                        <p class="text-gray-600">Jakarta, Indonesia</p>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">Type</span>
                        <p class="text-gray-600">12.000.000</p>
                    </div>
                </div>
            </div>

            {{-- If Career is empty --}}
            {{-- <div class="text-center place-items-center">
                <h2 class="text-2xl font-bold mb-20">Find Job or Volunteer</h2>
                <button href="/search" class="bg-orange-500 text-white py-2 px-6 rounded text-center">Find
            </div> --}}
        </div>
        <div class="text-center">
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- For Organizer --}}
    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">Waiting</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="container mx-auto my-5">
            <div class="grid grid-cols-4 gap-4">                
                <div class="bg-white rounded-lg shadow-md p-5 border border-gray-300 h-70 w-full items-center gap-4">
                    <div class="place-items-center">
                        <img src="" alt="Company Logo" class="h-12 w-12 mb-14">
                        <h3 class="text-lg font-semibold">Fullstack Developer</h3>
                        <p class="text-gray-600">PT.Pertamina</p>
                        <p class="text-gray-600">Jakarta, Indonesia</p>
                        <p class="text-gray-600">12.000.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4"/>
                </svg>
            </button>
        </div>
    </div>

    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">History</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="container mx-auto my-5">
            <div class="grid grid-cols-4 gap-4">                
                <div class="bg-white rounded-lg shadow-md p-5 border border-gray-300 h-70 w-full items-center gap-4">
                    <div class="place-items-center">
                        <img src="" alt="Company Logo" class="h-12 w-12 mb-14">
                        <h3 class="text-lg font-semibold">Fullstack Developer</h3>
                        <p class="text-gray-600">PT.Pertamina</p>
                        <p class="text-gray-600">Jakarta, Indonesia</p>
                        <p class="text-gray-600">12.000.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4"/>
                </svg>
            </button>
        </div>
    </div>
</x-layout>
