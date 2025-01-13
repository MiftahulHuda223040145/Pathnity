<x-dashboard.layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 bg-white rounded-lg mt-14">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <!-- Include search component here if needed -->
                {{-- <x-dashboard.search></x-dashboard.search> --}}
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Title</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Type</th>
                            <th scope="col" class="px-6 py-3">Salary</th>
                            <th scope="col" class="px-6 py-3">Number Of Worker</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacancies as $vacancy)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $vacancy->title }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $vacancy->category->name ?? 'N/A' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vacancy->type->name ?? 'N/A' }}
                                </td>
                                <td class="px-6 py-4">
                                    Rp. {{ number_format($vacancy->salary, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $vacancy->numberofworker }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Str::limit($vacancy->description, 50) }} <!-- Truncate description -->
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('dashboard.detail-vacancy', $vacancy->id) }}" class="font-medium">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Detail</span>
                                    </a>


                                    <form action="{{ route('vacancies.destroy', $vacancy->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-100 text-red-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-red-900 dark:text-red-300"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard.layout>
