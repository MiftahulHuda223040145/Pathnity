<x-layout>
    <div class="container mx-auto mt-20">
        <div class="bg-white shadow-md rounded-md overflow-hidden">
            <!-- Background Image -->
            <div class="w-full h-60 bg-cover bg-center"
                style="background-image: url('{{ asset('img/background/background.jpg') }}');">
            </div>

            <!-- Detail Vacancy -->
            <div class="p-10 flex flex-col items-start">
                <div
                    class="w-24 h-24 rounded-full border-4 border-gray-200 bg-gray-200 flex items-center justify-center mt-12">
                    {{-- <img src="{{ $application->vacancy->organizer->avatar ? asset('storage/' . $application->vacancy->organizer->avatar) : asset('default-logo.png') }}"
                        alt="Company Logo" class="w-24 h-24 rounded-full object-cover"> --}}
                </div>
            </div>
            <div class="p-10">
                <h1 class="text-2xl font-bold mb-2">{{ $application->vacancy->title }}</h1>
                <p class="text-black mb-2">{{ $application->vacancy->organizer->organization_name }}</p>
                <div class="flex mb-2">
                    <p class="text-black">{{ $application->vacancy->organizer->address }}</p>
                </div>
                <div class="flex mb-2">
                    <p class="text-gray-600">Category: {{ $application->vacancy->category->name }}</p>
                </div>
                <div class="flex mb-2">
                    <p class="text-gray-600">Type: {{ $application->vacancy->type->name }}</p>
                </div>
                <div class="flex mb-2">
                    <p class="text-gray-600">Gaji: Rp. {{ number_format($application->vacancy->salary, 0, ',', '.') }}
                    </p>
                </div>
                <div class="mt-20">
                    <p class="mr-2 text-black">{{ $application->vacancy->description }}</p>
                </div>
            </div>
        </div>

        <!-- Progress Section -->
        @if ($application->status === 'pending')
            {{-- Progress 1 --}}
            <div class="container mx-12 mb-5 mt-24 w-auto h-auto place-items-center">
                <img class="w-auto h-24" src="{{ asset('img/progress/progress-1.png') }}" alt="Progress Pending">
            </div>
            <p class="text-2xl text-black text-center mt-20 mb-20 font-semibold">
                Please wait. Your job application will be reviewed immediately.
            </p>
        @elseif ($application->status === 'rejected')
            {{-- Progress 1 Alternative --}}
            <div class="container mx-12 mb-5 mt-24 w-auto h-auto place-items-center">
                <img class="w-auto h-24" src="{{ asset('img/progress/progress-1-alternative-.png') }}"
                    alt="Progress Rejected">
            </div>
            <p class="text-2xl text-black text-center mt-20 mb-20 font-semibold">
                Sorry, your job application has been rejected.
            </p>
        @elseif ($application->status === 'interview')
            {{-- Progress 2 --}}
            <div class="container mx-12 mb-5 mt-24 w-auto h-auto place-items-center">
                <img class="w-auto h-24" src="{{ asset('img/progress/progress-2.png') }}" alt="Progress Interview">
            </div>
            <p class="text-2xl text-black text-center mt-20 mb-20 font-semibold">
                Congratulations, you will be interviewed.
            </p>
        @elseif ($application->status === 'interview-rejected')
            {{-- Progress 2 Alternative --}}
            <div class="container mx-12 mb-5 mt-24 w-auto h-auto place-items-center">
                <img class="w-auto h-24" src="{{ asset('img/progress/progress-2-alternative-.png') }}"
                    alt="Interview Rejected">
            </div>
            <p class="text-2xl text-black text-center mt-20 mb-20 font-semibold">
                Sorry, you weren't accepted. Keep your spirits up.
            </p>
        @elseif ($application->status === 'accepted')
            {{-- Progress 3 --}}
            <div class="container mx-12 mb-5 mt-24 w-auto h-auto place-items-center">
                <img class="w-auto h-24" src="{{ asset('img/progress/progress-3.png') }}" alt="Progress Accepted">
            </div>
            <p class="text-2xl text-black text-center mt-20 mb-20 font-semibold">
                Congratulations, you are accepted!
            </p>
        @endif

        <!-- Message Section -->
        <div class="bg-white rounded-lg shadow p-4 mt-5 mb-10 h-auto mx-12">
            @if ($application->status === 'interview' && $application->interview_message)
                {{-- Tampilkan pesan interview hanya jika statusnya interview --}}
                <p class="p-5">
                    <strong>Interview Message:</strong><br>
                    {{ $application->interview_message }}
                </p>
            @elseif ($application->status === 'accepted' && $application->accept_message)
                {{-- Tampilkan pesan acceptance hanya jika statusnya accepted --}}
                <p class="p-5">
                    <strong>Acceptance Message:</strong><br>
                    {{ $application->accept_message }}
                </p>
            @elseif ($application->status === 'pending' || $application->status === 'rejected')
                {{-- Tidak ada pesan khusus untuk pending/rejected --}}
                <p class="p-5">No additional message provided.</p>
            @else
                {{-- Fallback jika tidak ada kondisi yang terpenuhi --}}
                <p class="p-5">No additional message provided.</p>
            @endif
        </div>



    </div>
</x-layout>
