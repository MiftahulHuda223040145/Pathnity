<x-layout>
    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">Applicants</h1>
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
                            Want Position
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
                            HR
                        </td>
                        <td class="px-6 py-4">
                            No
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <button class="bg-[#FFA629] hover:bg-[#e59525] text-white font-bold py-2 px-4 rounded accept-button" data-id="1">
                                Apply
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
                            <button class="bg-[#FFA629] hover:bg-[#e59525] text-white font-bold py-2 px-4 rounded accept-button" data-id="1">
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
</x-layout>