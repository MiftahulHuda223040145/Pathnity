<x-layout>
    @if (auth()->check())
        <!-- My Career Section -->
        <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">My Career</h1>
        <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
            <div class="container mx-auto my-5">
                <div class="grid grid-cols-4 gap-4">
                    @forelse ($myCareer as $career)
                        <div
                            class="bg-white rounded-lg shadow-md p-5 border border-gray-300 h-70 w-full items-center gap-4">
                            <div class="place-items-center text-center">
                                {{-- <img src="{{ $career->organizer->avatar ? asset('storage/' . $career->organizer->avatar) : asset('default-logo.png') }}"
                                    alt="Company Logo" class="h-12 w-12 mb-14"> --}}
                                <h3 class="text-lg font-semibold">{{ $career->title }}</h3>
                                <p class="text-gray-600">{{ $career->organizer->organization_name }}</p>
                                <p class="text-gray-600">{{ $career->organizer->address }}</p>
                                <span
                                    class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">{{ $career->type->name }}</span>
                                <p class="text-gray-600">Rp. {{ number_format($career->salary, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="text-center w-full">
                            <h2 class="text-2xl font-bold mb-4">You don’t have any careers yet!</h2>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>


        <!-- Waiting Section -->
        <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">Pending</h1>
        <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
            <div class="container mx-auto my-5">
                <div class="grid grid-cols-4 gap-4">
                    @foreach ($waiting as $vacancy)
                        <div
                            class="bg-white rounded-lg shadow-md p-5 border border-gray-300 h-70 w-full items-center gap-4">
                            <div class="place-items-center text-center">
                                {{-- <img src="{{ $vacancy->organizer->avatar ? asset('storage/' . $vacancy->organizer->avatar) : asset('default-logo.png') }}"
                                    alt="Company Logo" class="h-12 w-12 mb-14"> --}}
                                <h3 class="text-lg font-semibold">{{ $vacancy->title }}</h3>
                                <p class="text-gray-600">{{ $vacancy->organizer->organization_name }}</p>
                                <p class="text-gray-600">{{ $vacancy->organizer->address }}</p>
                                <p class="text-gray-600">Rp. {{ number_format($vacancy->salary, 0, ',', '.') }}</p>
                                @if ($vacancy->applications->isNotEmpty())
                                    <!-- Rute menuju halaman detail dengan ID application -->
                                    <a href="{{ route('career.detail', ['application' => $vacancy->applications->first()->id]) }}"
                                        class="text-blue-500 hover:underline mt-2">
                                        View Details
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- History Section -->
        <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">History</h1>
        <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
            <div class="container mx-auto my-5">
                <div class="grid grid-cols-4 gap-4">
                    @forelse ($history as $past)
                        <div
                            class="bg-white rounded-lg shadow-md p-5 border border-gray-300 h-70 w-full items-center gap-4">
                            <div class="place-items-center text-center">
                                {{-- <img src="{{ $past->organizer->avatar ? asset('storage/' . $past->organizer->avatar) : asset('default-logo.png') }}"
                                    alt="Company Logo" class="h-12 w-12 mb-14"> --}}
                                <h3 class="text-lg font-semibold">{{ $past->title }}</h3>
                                <p class="text-gray-600">{{ $past->organizer->organization_name }}</p>
                                <p class="text-gray-600">{{ $past->organizer->address }}</p>
                                <p class="text-gray-600">Rp. {{ number_format($past->salary, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="text-center w-full">
                            <h2 class="text-2xl font-bold mb-4">No career history available!</h2>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    @else
        <!-- Not Logged In -->
        <div class="flex items-center justify-center h-screen">
            <div
                class="bg-white rounded-lg shadow-md p-8 border border-gray-300 w-1/2 h-1/2 flex flex-col items-center justify-center">
                <p class="text-xl font-semibold mb-4">You Must Login!</p>
                <button class="bg-orange-500 text-white py-2 px-6 rounded"><a href="/login">Login</a></button>
            </div>
        </div>
    @endif
</x-layout>
