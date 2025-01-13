<x-layout>

    @if (session('success'))
        <div class="mt-20 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="mt-20 bg-green-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
            {{ session('error') }}
        </div>
    @endif

    <div class="bg-white">
        <div class="container mx-auto mt-24">
            <!-- Form Pencarian dan Filter -->
            <form method="GET" action="{{ route('search.vacancies') }}" class="mb-5">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <input type="text" name="search" placeholder="Search vacancies..."
                            value="{{ request('search') }}" class="w-full border-gray-300 rounded-md py-2 px-4">
                    </div>

                    <div>
                        <select name="category" class="w-full border-gray-300 rounded-md py-2 px-4">
                            <option value="">All Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <select name="type" class="w-full border-gray-300 rounded-md py-2 px-4">
                            <option value="">All Types</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}"
                                    {{ request('type') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="mt-4 text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Search
                    </button>
                </div>
            </form>


            <!-- Daftar Vacancies -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="container mx-auto mt-5 h-[34rem] overflow-y-auto pr-5">
                    <div class="grid grid-cols-1 gap-4">
                        @forelse ($vacancies as $item)
                            <a href="{{ route('search.vacancyDetails', $item->id) }}">
                                <div
                                    class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4 cursor-pointer">
                                    {{-- <img src="{{ $item->organizer->avatar ? asset('storage/' . $item->organizer->avatar) : asset('default-logo.png') }}"
                                        alt="Company Logo" class="h-12 w-12 mb-14"> --}}
                                    <div>
                                        <h3 class="text-lg font-semibold">{{ $item->title }}</h3>
                                        <p class="text-gray-600">{{ $item->organizer->organization_name ?? 'N/A' }}</p>
                                        <p class="text-gray-600">Category: {{ $item->category->name ?? 'N/A' }}</p>
                                        <p class="text-gray-600">Type: {{ $item->type->name ?? 'N/A' }}</p>
                                        <p class="text-gray-600">Lokasi: {{ $item->organizer->address ?? 'N/A' }}</p>
                                        <p class="text-gray-600">Gaji: Rp.
                                            {{ number_format($item->salary, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-center text-gray-500">No active vacancies available.</p>
                        @endforelse
                    </div>
                </div>


                <!-- Detail Vacancy -->
                <div class="container mx-auto h-[34rem] overflow-y-auto">
                    @if (isset($vacancy))
                        <div class="overflow-hidden">
                            <div class="p-10 flex flex-col items-start">
                                <div
                                    class="w-24 h-24 rounded-full border-4 border-gray-200 bg-gray-200 flex items-center justify-center mt-12">
                                    {{-- <img src="{{ $vacancy->organizer->avatar ? asset('storage/' . $vacancy->organizer->avatar) : asset('default-logo.png') }}"
                                        alt="Profile Image" class="w-24 h-24 rounded-full object-cover"> --}}
                                </div>
                            </div>
                            <div class="p-10">
                                <h1 class="text-2xl font-bold mb-2">{{ $vacancy->title }}</h1>
                                <p class="text-black mb-2">{{ $vacancy->organizer->organization_name ?? 'N/A' }}</p>
                                <div class="flex mb-2">
                                    <p class="text-black">
                                        {{ $vacancy->organizer->address ?? 'Location not available' }}
                                    </p>
                                </div>
                                <div class="flex mb-2">
                                    <p class="text-gray-600">Category: {{ $vacancy->category->name ?? 'N/A' }}</p>
                                </div>
                                <div class="flex mb-2">
                                    <p class="text-gray-600">Type: {{ $vacancy->type->name ?? 'N/A' }}</p>
                                </div>
                                <div class="flex mb-2">
                                    <p class="text-gray-600">Gaji: Rp.
                                        {{ number_format($vacancy->salary, 0, ',', '.') }}</p>
                                </div>
                                <div class="mt-20">
                                    <p class="text-black">{{ $vacancy->description }}</p>
                                </div>
                                @auth('web')
                                    <form action="{{ route('vacancies.apply', $vacancy->id) }}" method="POST"
                                        enctype="multipart/form-data" class="mt-4">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="cover_letter" class="block text-gray-700">Cover Letter
                                                (optional)</label>
                                            <textarea name="cover_letter" id="cover_letter" rows="4" class="w-full border-gray-300 rounded-md"></textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label for="resume" class="block text-gray-700">Upload Resume
                                                (optional)</label>
                                            <input type="file" name="resume" id="resume"
                                                class="w-full border-gray-300 rounded-md">
                                        </div>
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Apply
                                        </button>
                                    </form>
                                @else
                                    <div class="text-center mt-4">
                                        <p class="text-gray-600">Please <a href="/login" class="text-blue-500">login</a> to
                                            apply for this vacancy.</p>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    @else
                        <div class="text-center text-gray-500">
                            <p>Select a vacancy to see details.</p>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-layout>
