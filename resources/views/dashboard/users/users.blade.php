<x-dashboard.layout>
    @if (session()->has('success'))
        <div id="notification"
            class="relative isolate flex items-center gap-x-6 overflow-hidden px-6 py-2.5 sm:px-3.5 sm:before:flex-1 bg-green-700 mt-20 w-full max-w-screen-lg mx-auto">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                <p class="text-sm/6 text-white">
                    <strong class="font-semibold">{{ session('success') }}</strong>
                </p>
            </div>
            <div class="flex flex-1 justify-end">
                <button type="button" onclick="document.getElementById('notification').remove();"
                    class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                    <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path
                            d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="p-4 sm:ml-64">
        <div class="p-4 bg-white rounded-lg mt-14">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <x-dashboard.search></x-dashboard.search>
                <!-- Tabel -->
                <div id="users-table">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">First Name</th>
                                <th scope="col" class="px-6 py-3">Last Name</th>
                                <th scope="col" class="px-6 py-3">Gender</th>
                                <th scope="col" class="px-6 py-3">Phone Number</th>
                                <th scope="col" class="px-6 py-3">Birth Date</th>
                                <th scope="col" class="px-6 py-3">Address</th>
                                <th scope="col" class="px-6 py-3">Auth</th>
                                <th scope="col" class="px-6 py-3">Role</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody id="user-data">
                            @foreach ($users as $user)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4">{{ $user->first_name }}</td>
                                    <td class="px-6 py-4">{{ $user->last_name }}</td>
                                    <td class="px-6 py-4">{{ $user->gender }}</td>
                                    <td class="px-6 py-4">{{ $user->phone_number }}</td>
                                    <td class="px-6 py-4">{{ $user->birth_date }}</td>
                                    <td class="px-6 py-4">{{ $user->address }}</td>
                                    <td class="px-6 py-4">{{ $user->auth_provider }}</td>
                                    <td class="px-6 py-4">{{ $user->role == 0 ? 'Admin' : 'User' }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('users.show', $user->id) }}"
                                            class="font-medium text-blue-600 hover:underline">Detail</a>
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="font-medium text-yellow-600 hover:underline">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are You Sure?')"
                                                class="text-red-600 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('live-search').addEventListener('input', function() {
            let query = this.value;
            if (query.length > 0) {
                fetch(`/users/search?query=${query}`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Perbarui data tabel dengan respons
                        let tableBody = document.getElementById('user-data');
                        tableBody.innerHTML = '';
                        data.users.forEach(user => {
                            let row = `
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">${user.first_name}</td>
                        <td class="px-6 py-4">${user.last_name}</td>
                        <td class="px-6 py-4">${user.gender}</td>
                        <td class="px-6 py-4">${user.phone_number}</td>
                        <td class="px-6 py-4">${user.birth_date}</td>
                        <td class="px-6 py-4">${user.address}</td>
                        <td class="px-6 py-4">${user.auth_provider}</td>
                        <td class="px-6 py-4">${user.role == 0 ? 'Admin' : 'User'}</td>
                        <td class="px-6 py-4">
                            <a href="/users/${user.id}" class="font-medium text-blue-600 hover:underline">Detail</a>
                            <a href="/users/${user.id}/edit" class="font-medium text-yellow-600 hover:underline">Edit</a>
                            <form action="/users/${user.id}" method="POST" class="inline">
                                <button type="submit" onclick="return confirm('Are You Sure?')" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                `;
                            tableBody.insertAdjacentHTML('beforeend', row);
                        });
                    });
            } else {
                // Jika query kosong, ambil semua data
                fetch('/users/search', {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Perbarui data tabel dengan semua pengguna
                        let tableBody = document.getElementById('user-data');
                        tableBody.innerHTML = '';
                        data.users.forEach(user => {
                            let row = `
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">${user.first_name}</td>
                        <td class="px-6 py-4">${user.last_name}</td>
                        <td class="px-6 py-4">${user.gender}</td>
                        <td class="px-6 py-4">${user.phone_number}</td>
                        <td class="px-6 py-4">${user.birth_date}</td>
                        <td class="px-6 py-4">${user.address}</td>
                        <td class="px-6 py-4">${user.auth_provider}</td>
                        <td class="px-6 py-4">${user.role == 0 ? 'Admin' : 'User'}</td>
                        <td class="px-6 py-4">
                            <a href="/users/${user.id}" class="font-medium text-blue-600 hover:underline">Detail</a>
                            <a href="/users/${user.id}/edit" class="font-medium text-yellow-600 hover:underline">Edit</a>
                            <form action="/users/${user.id}" method="POST" class="inline">
                                <button type="submit" onclick="return confirm('Are You Sure?')" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                `;
                            tableBody.insertAdjacentHTML('beforeend', row);
                        });
                    });
            }
        });
    </script>
</x-dashboard.layout>
