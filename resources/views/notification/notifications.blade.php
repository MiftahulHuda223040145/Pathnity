<x-layout>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-24 h-auto mx-12">  
        <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
            @for ($i = 0; $i < 10; $i++)
            <li class="pb-3 sm:pb-4">
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <div class="flex-shrink-0">
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        Neil Sims
                    </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        email@flowbite.com
                    </p>
                </div>
                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                    </svg> 
                    </button> 
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mark as Read</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                        </li>
                        </ul>
                    </div>                    
                </div>
            </div>
            </li>
            @endfor
        </ul> 
    </div>
</x-layout>