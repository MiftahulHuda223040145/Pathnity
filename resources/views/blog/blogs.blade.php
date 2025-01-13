<x-layout>
    <div class="bg-white mt-16">
        <div class="container mx-auto py-8">
            <div class="flex justify-between items-center mb-6">
                <!-- Search Bar -->
                <div class="flex items-center space-x-4">
                    <form method="GET" action="{{ route('blogs.indexMainPage') }}" class="w-full">
                        <input type="text" name="search" placeholder="Search blogs..." value="{{ request('search') }}"
                            class="border rounded-lg p-2 w-full sm:w-72 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <button type="submit"
                            class="bg-[#FFA629] text-black px-4 py-2 rounded-lg hover:bg-yellow-500 focus:outline-none">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Blog Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                @foreach ($blogs as $blog)
                    <div class="p-4">
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://via.placeholder.com/1000x800' }}"
                                alt="Blog Image" class="mb-2">
                        </a>
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <span
                                class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
                                {{ $blog->category->name }}
                            </span>
                        </a>
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <p>{{ $blog->title }}</p>
                        </a>
                        <p class="text-sm text-gray-300">{{ $blog->author }}, {{ $blog->created_at->diffForHumans() }}
                        </p>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</x-layout>
