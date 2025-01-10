<x-dashboard.layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 bg-white rounded-lg mt-14">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <x-dashboard.search></x-dashboard.search>
                <a href="{{ route('create.blog') }}"
                    class="block w-max items-end ml-2 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                </a>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                slug
                            </th>
                            <th scope="col" class="px-6 py-3">
                                author
                            </th>
                            <th scope="col" class="px-6 py-3">
                                image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    {{ $blog->id }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $blog->title }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $blog->slug }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $blog->author }}
                                </td>
                                <td class="px-6 py-4">
                                    @if (Str::startsWith($blog->image, 'http'))
                                        <img src="{{ $blog->image }}" alt="{{ $blog->image }}">
                                    @else
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->image }}">
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $blog->category->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $blog->description }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('blogs.detail', $blog->id) }}" class="font-medium"><span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Detail</span></a>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="font-medium"><span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Edit</span></a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="bg-red-200 text-red-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-red-900 dark:text-red-300"
                                            type="submit" onclick="return confirm('Are You Sure?')">
                                            Delete
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
    </div>
</x-dashboard.layout>
