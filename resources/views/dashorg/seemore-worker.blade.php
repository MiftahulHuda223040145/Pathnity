<x-layout>
    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">Worker</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark-mode:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark-mode:bg-gray-700 dark-mode:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CV
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Profil
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Position
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Access
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark-mode:bg-gray-800 dark-mode:border-gray-700">
                        <td class="px-6 py-4">
                            Sugeng
                        </td>
                        <td class="px-6 py-4">
                            Sugeng@example.com
                        </td>
                        <td class="px-6 py-4">
                            Sugeng@example.com
                        </td>
                        <td class="px-6 py-4">
                            <a href="https://example.com/cv/john_doe.pdf" target="_blank" class="text-blue-500 hover:underline">Lihat CV</a>  <!-- Ganti dengan URL CV dari backend -->
                        </td>
                        <td class="px-6 py-4">
                            <a href="https://example.com/cv/john_doe.pdf" target="_blank" class="text-blue-500 hover:underline">Lihat Profil</a>  <!-- Ganti dengan URL CV dari backend -->
                        </td>
                        <td class="px-6 py-4">
                            Fullstack Developer
                        </td>
                        <td class="px-6 py-4">
                            No
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Change Access<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="multi-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
                                <li>
                                    <button class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yes</button>
                                </li>
                                <li>
                                    <button class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">No</button>
                                </li>
                                </ul>
                            </div>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button" data-id="1">
                                Fired
                            </button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya di sini -->
                </tbody>
                <tbody>
                    <tr class="bg-white border-b dark-mode:bg-gray-800 dark-mode:border-gray-700">
                        <td class="px-6 py-4">
                            PPN 12%
                        </td>
                        <td class="px-6 py-4">
                            CintaRakyat@example.com
                        </td>
                        <td class="px-6 py-4">
                            CintaRakyat@example.com
                        </td>
                        <td class="px-6 py-4">
                            <a href="https://example.com/cv/john_doe.pdf" target="_blank" class="text-blue-500 hover:underline">Lihat CV</a>  <!-- Ganti dengan URL CV dari backend -->
                        </td>
                        <td class="px-6 py-4">
                            <a href="https://example.com/cv/john_doe.pdf" target="_blank" class="text-blue-500 hover:underline">Lihat Profil</a>  <!-- Ganti dengan URL CV dari backend -->
                        </td>
                        <td class="px-6 py-4">
                            HR
                        </td>
                        <td class="px-6 py-4">
                            Yes
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Change Access<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="multi-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
                                <li>
                                    <button class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yes</button>
                                </li>
                                <li>
                                    <button class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">No</button>
                                </li>
                                </ul>
                            </div>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button" data-id="1">
                                Fired
                            </button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya di sini -->
                </tbody>
            </table>
        </div>
</x-layout>