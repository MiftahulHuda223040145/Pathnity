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
                <a href="/pdf-report"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Download PDF Report
                </a>
                <!-- Search Input -->
                <x-dashboard.search></x-dashboard.search>


                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Organizer Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Website
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Position
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="organizer-table-body">
                        @foreach ($organizers as $organizer)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $organizer->organization_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $organizer->username }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $organizer->phone_number }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ $organizer->website }}" target="_blank">{{ $organizer->website }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $organizer->position }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $organizer->email }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('organizer.show', $organizer->id) }}" class="font-medium">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Detail</span>
                                    </a>
                                    <a href="{{ route('organizer.edit', $organizer->id) }}" class="font-medium">
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Edit</span>
                                    </a>
                                    <form action="{{ route('organizer.destroy', $organizer->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium">
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-red-900 dark:text-red-300"
                                                onclick="return confirm('Are you sure?')">Delete</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Add this JavaScript to handle live search -->
    <script>
        let debounceTimeout;

        document.getElementById('live-search').addEventListener('input', function() {
            let query = this.value;
            let tableBody = document.getElementById('organizer-table-body');
            tableBody.innerHTML = ''; // Clear current results

            // Clear the previous timeout
            clearTimeout(debounceTimeout);

            // Set a new timeout for debounce
            debounceTimeout = setTimeout(() => {
                // Request the appropriate endpoint depending on the query
                fetch(`/organizer/search?query=${query}`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data && data.organizers) {
                            if (data.organizers.length > 0) {
                                // If organizers are found, display them
                                data.organizers.forEach(organizer => {
                                    let row = `
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">${organizer.organization_name}</td>
                                        <td class="px-6 py-4">${organizer.username}</td>
                                        <td class="px-6 py-4">${organizer.phone_number}</td>
                                        <td class="px-6 py-4"><a href="${organizer.website}" target="_blank">${organizer.website}</a></td>
                                        <td class="px-6 py-4">${organizer.position}</td>
                                        <td class="px-6 py-4">${organizer.email}</td>
                                        <td class="px-6 py-4">
                                            <a href="/dashboard/organizer/${organizer.id}" class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Detail</a>
                                            <a href="/dashboard/organizer/${organizer.id}/edit" class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Edit</a>
                                            <form action="/dashboard/organizer/${organizer.id}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-100 text-red-800 text-xs font-medium px-2 py-0.5 rounded">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                `;
                                    tableBody.insertAdjacentHTML('beforeend', row);
                                });
                            } else {
                                // If no organizers are found, display a message
                                let row =
                                    `<tr><td colspan="7" class="text-center">No organizers found</td></tr>`;
                                tableBody.insertAdjacentHTML('beforeend', row);
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching organizers:', error);
                    });
            }, 300); // Delay in milliseconds (300ms)
        });
    </script>




</x-dashboard.layout>
