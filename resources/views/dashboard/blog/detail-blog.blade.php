<x-dashboard.layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 bg-white rounded-lg mt-14">
            <div class="mx-auto py-8 place-items-center">
                <article
                    class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <div class="place-items-center px-12">
                        @if (Str::startsWith($blog->image, 'http'))
                            <img src="{{ $blog->image }}" alt="{{ $blog->image }}" class="mb-2">
                        @else
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->image }}" class="mb-2">
                        @endif
                    </div>
                    <div class="px-12">
                        <span
                            class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Category</span>
                        <h1
                            class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                            {{ $blog->title }}</h1>
                            <h2>>{{ $blog->author}}</h2>
                        <p>{{ $blog->description }}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</x-dashboard.layout>
