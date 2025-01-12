<x-layout>
    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">Active Vacancies</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <!-- Karyawan Pending Section -->
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark-mode:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark-mode:bg-gray-700 dark-mode:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Salary
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Number of Worker
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark-mode:bg-gray-800 dark-mode:border-gray-700">
                        <td class="px-6 py-4">
                            Human Resouches
                        </td>
                        <td class="px-6 py-4">
                            Social
                        </td>
                        <td class="px-6 py-4">
                            Fulltime
                        </td>
                        <td class="px-6 py-4">
                            Rp. 12.000.000
                        </td>
                        <td class="px-6 py-4">
                            10
                        </td>
                        <td class="px-6 py-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, hic harum quas veniam error assumenda magnam repudiandae itaque dicta necessitatibus sapiente nesciunt eligendi voluptatem culpa. Distinctio tempore quidem accusantium ad.
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded accept-button" data-id="1">
                                Detail
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button" data-id="1">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya di sini -->
                </tbody>
                <tbody>
                    <tr class="bg-white border-b dark-mode:bg-gray-800 dark-mode:border-gray-700">
                        <td class="px-6 py-4">
                            FullStack Developer
                        </td>
                        <td class="px-6 py-4">
                            Technology
                        </td>
                        <td class="px-6 py-4">
                            Online, Fulltime
                        </td>
                        <td class="px-6 py-4">
                            Rp. 22.000.000
                        </td>
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, voluptatem pariatur minima id cumque recusandae itaque placeat labore quod nihil earum ipsum. Nobis id est, asperiores deleniti ad eveniet enim.
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded accept-button" data-id="1">
                                Detail
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button" data-id="1">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya di sini -->
                </tbody>
            </table>
        </div>
</x-layout>