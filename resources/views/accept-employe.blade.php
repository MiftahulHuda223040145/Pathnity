<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 text-gray-800">Karyawan Pending</h1>
    
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
                            John Doe
                        </td>
                        <td class="px-6 py-4">
                            john.doe@example.com
                        </td>
                        <td class="px-6 py-4">
                            <a href="https://example.com/cv/john_doe.pdf" target="_blank" class="text-blue-500 hover:underline">Lihat CV</a>  <!-- Ganti dengan URL CV dari backend -->
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded accept-button" data-id="1">
                                Terima
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button" data-id="1">
                                Tolak
                            </button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya di sini -->
                </tbody>
            </table>
        </div>
    </div>
    
    
    
    <script>
        // Contoh sederhana - Ganti dengan AJAX call ke backend Anda
        const acceptButtons = document.querySelectorAll('.accept-button');
        const rejectButtons = document.querySelectorAll('.reject-button');
    
    
        acceptButtons.forEach(button => {
            button.addEventListener('click', () => {
                const employeeId = button.dataset.id;
                alert(`Karyawan dengan ID ${employeeId} diterima.  (Ini simulasi, ganti dengan AJAX call ke backend)`);
            });
        });
    
        rejectButtons.forEach(button => {
            button.addEventListener('click', () => {
                const employeeId = button.dataset.id;
                alert(`Karyawan dengan ID ${employeeId} ditolak. (Ini simulasi, ganti dengan AJAX call ke backend)`);
            });
        });
    </script>
</x-layout>
