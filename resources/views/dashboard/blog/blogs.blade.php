<x-dashboard.layout>
    <div class="p-4 sm:ml-64">
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

        <div class="p-4 bg-white rounded-lg mt-14">
            <div class="relative overflow-x-auto sm:rounded-lg">

                {{-- <x-dashboard.search></x-dashboard.search> --}}
                <div class="mb-4">
                    <a href="/dashboard/create-blog">
                        <button type="button"
                            class="items-end ml-2 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 12h14m-7 7V5" />
                            </svg>
                        </button>
                </div>

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Slug
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Author
                            </th>
                            <th scope="col" class="px-6 py-3">
                                image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Body
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="blog-data">
                        @foreach ($blogs as $blog)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $blog->title }}
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $blog->slug }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $blog->author }}
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="blog image" class="w-20">
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
                                        <a href="" class="font-medium"><span
                                                class="bg-red-100 text-red-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-red-900 dark:text-red-300"><button
                                                    type="submit"
                                                    onclick="return confirm('Are You Sure?')">Delete</button></span></a>
                                    </form>
                                </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</x-dashboard.layout>
