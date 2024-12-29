<x-layout>
    <div class="container mx-auto mt-20">
        <div class="bg-white shadow-md rounded-md overflow-hidden">
            <!-- Background Image -->
            <div class="w-full h-60 bg-cover bg-center" style="background-image: url('{{ asset('img/background/background.jpeg') }}');">
            </div>
            <!-- Profile Images -->
            <div class="p-10 flex flex-col items-start">
                <div class="w-24 h-24 rounded-full border-4 border-gray-200 bg-gray-200 flex items-center justify-center mt-12">
                    <img src="img/profile/profile.png" alt="Profile Image" class="w-24 h-24 rounded-full object-cover">
                </div>
            </div>
            <div class="p-10">
                <h1 class="text-2xl font-bold mb-2">Fullstack Developer</h1>
                <p class="text-black mb-2">PT.Pertamina</p>
                <div class="flex mb-2">   
                    <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                    </svg> 
                    <p class="text-black">Jakarta, Indonesia</p>
                </div>
                <div class="flex mb-2">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd"/>
                    </svg>                      
                    <p class="text-black">IT</p>
                </div>
                <div class="flex mb-2">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" clip-rule="evenodd"/>
                        <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"/>
                    </svg>                      
                    <p class="text-gray-600">12.000.000</p>
                </div>
                <div class="mt-20">
                    <p class="mr-2 text-black"></p>
                </div>

                <!-- Karyawan Pending Section -->
                <h1 class="text-xl font-semibold mb-4 text-gray-800">Your Applicant</h1>
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark-mode:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark-mode:bg-gray-700 dark-mode:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    CV
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
                                    <a href="https://example.com/cv/john_doe.pdf" target="_blank" class="text-blue-500 hover:underline">Lihat CV</a>  <!-- Ganti dengan URL CV dari backend -->
                                </td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded accept-button" data-id="1">
                                       Interview
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button" data-id="1">
                                        Reject
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
                                    <a href="https://example.com/cv/john_doe.pdf" target="_blank" class="text-blue-500 hover:underline">Lihat CV</a>  <!-- Ganti dengan URL CV dari backend -->
                                </td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded accept-button" data-id="1">
                                        Interview
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button" data-id="1">
                                        Reject
                                    </button>
                                </td>
                            </tr>
                            <!-- Tambahkan baris lainnya di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
