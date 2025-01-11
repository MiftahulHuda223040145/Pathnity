<x-dashboard.layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 bg-white rounded-lg mt-14">
            <div class="container mx-auto my-5">
                <form class="max-w-sm mx-auto" action="{{ route('vacancies.update', $blog->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-5">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $vacancies->title) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                        <input type="text" id="type" name="type" value="{{ old('type', $vacancies->type) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         required />
                    <div class="mb-5">
                        <label for="categories"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Category</label>
                        <select id="categories" name="category_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    selected="@if ($category->id === $vacancies->category_id) true @endif">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-5">
                        @if (Str::startsWith($vacancies->image, 'http'))
                            <img src="{{ $vacancies->image }}" alt="{{ $vacancies->image }}">
                        @else
                            <img src="{{ asset('storage/' . $vacancies->image) }}" alt="{{ $vacancies->image }}">
                        @endif
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="user_avatar">Upload file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="user_avatar_help" id="user_avatar" type="file" name="image"
                            value="{{ old('image', $vacancies->image) }}">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile
                            picture is useful to confirm your are logged into your account</div>
                    </div>
                    <input id="description" type="hidden" name="description" value="">
                    <span>Description</span>
                    <trix-editor input="description">
                        {{ old('description', $vacancies->description) }}
                    </trix-editor>
                    <button type="submit"
                        class="mt-10 text-black bg-[#FFA629] hover:bg-[#FFA629] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-dashboard.layout>
