<x-layout>
    <div class="bg-white min-h-screen mt-16">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center space-x-4">
                    <form method="GET" action="{{ route('search.vacanciesSearch') }}" class="w-full">
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

            <div class="bg-white rounded-lg shadow-lg p-4 mx-auto">
                <div class="grid grid-cols-2 gap-4">
                    @forelse ($vacancies->take(6) as $vacancy)
                        <div class="container mx-auto mt-5">
                            <div class="grid grid-cols-1 gap-4">
                                <a href="{{ route('search.vacancyDetails', $vacancy->id) }}">
                                    <div
                                        class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                        <!-- Placeholder logo -->
                                        {{-- <img src="{{ $vacancy->organizer->avatar ? asset('storage/' . $vacancy->organizer->avatar) : asset('default-logo.png') }}"
                                            alt="Company Logo" class="h-12 w-12 mb-14"> --}}
                                        <div>
                                            <h3 class="text-lg font-semibold">{{ $vacancy->title }}</h3>
                                            <p class="text-gray-600">Title: {{ $vacancy->title }}</p>
                                            <p class="text-gray-600">Organization:
                                                {{ $vacancy->organizer->organization_name ?? 'N/A' }}</p>
                                            <p class="text-gray-600">Location:
                                                {{ $vacancy->organizer->address ?? 'N/A' }}</p>
                                            <span
                                                class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">
                                                {{ $vacancy->category->name ?? 'N/A' }}
                                            </span>
                                            <span
                                                class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">
                                                {{ $vacancy->type->name ?? 'N/A' }}
                                            </span>
                                            <p class="text-gray-600">Status:
                                                {{ $vacancy->status ? 'Active' : 'Inactive' }}</p>
                                            <p class="text-gray-600">Gaji: Rp.
                                                {{ number_format($vacancy->salary, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500">No vacancies found.</p>
                    @endforelse
                </div>

                @if ($vacancies->count() > 6)
                    <!-- Pesan jika ada lebih dari 6 data -->
                    <div class="text-center mt-4 text-gray-500">
                        <p>There are more vacancies available. Click the button below to see more.</p>
                    </div>
                @endif

                <!-- Tombol Navigasi -->
                <div class="text-center">
                    <a href="/search/vacancies">
                        <button type="button"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-layout>
