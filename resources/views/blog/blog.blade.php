<x-layout>
    <div class="mt-24">
        <div class="mx-auto py-8 place-items-center">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <div class="place-items-center px-12">
                    <!-- Display the blog's image -->
                    <img src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://via.placeholder.com/800x400' }}"
                        alt="Blog Image" class="mb-2">
                </div>
                <div class="px-12">
                    <!-- Display the category -->
                    <a href="" class="no-underline">
                        <span
                            class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $blog->category->name }}</span>
                    </a>
                    <!-- Display the title -->
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $blog->title }}</h1>
                    <!-- Display the description -->
                    <p>{{ $blog->description }}</p>
                </div>
            </article>
        </div>
    </div>
</x-layout>
