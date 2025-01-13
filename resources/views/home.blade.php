<x-layout>
    <section class="bg-center bg-cover bg-no-repeat bg-gray-700 bg-blend-multiply h-screen w-full"
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg');">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-36">
            <h1 class="mb-4 text-4xl font-medium tracking-tight leading-none text-white text-left pl-24 mt-32 ml-20">Find
                Job or Volunteer</h1>
            <div class="flex flex-wrap justify-center gap-4 mb-6">
                <form action="{{ route('search.vacancies') }}" method="GET" class="w-full">
                    <div class="flex flex-wrap justify-center gap-4">
                        <input type="text" name="search" placeholder="Title, keywords or company name"
                            class="border border-gray-300 rounded-md p-3 w-96" value="{{ request('search') }}">
                        <input type="text" name="location" placeholder="City, region or province"
                            class="border border-gray-300 rounded-md p-3 w-96" value="{{ request('location') }}">
                        <button type="submit"
                            class="bg-orange-600 text-white rounded-md px-6 py-3 hover:bg-orange-700">
                            Search
                        </button>
                    </div>
                </form>

            </div>
            <p class="text-gray-200 text-left pl-24 ml-20">Or browse job or volunteer by <a href="#jobs"
                    class="text-orange-600 font-medium">Our Recommendation</a></p>
            <p class="text-2xl text-gray-300 text-left pl-24 mt-20 ml-20">We have a large selection of job or volunteer
                vacancies in
                <br> every region of Indonesia.
            </p>
        </div>
    </section>



    <div class="container mx-auto mt-16">
        <div id="jobs" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Jobs Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Jobs for You!</h2>
                <div class="container mx-auto mt-5">
                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($jobs as $job)
                            <a href="{{ route('search.vacancyDetails', $job->id) }}">
                                <div
                                    class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                    <img src="{{ $job->logo ?? 'img/programmer.png' }}" alt="Company Logo"
                                        class="h-12 w-12 mb-14">
                                    <div>
                                        <h3 class="text-lg font-semibold">{{ $job->title }}</h3>
                                        <p class="text-gray-600">{{ $job->organizer->organization_name ?? 'N/A' }}</p>
                                        <p class="text-gray-600">
                                            {{ $job->organizer->location ?? 'Location not available' }}</p>

                                        <!-- Displaying the category name -->
                                        <p class="text-gray-600">
                                            Category: {{ $job->category->name ?? 'N/A' }}
                                        </p>

                                        <!-- Displaying the type name -->
                                        <p class="text-gray-600">
                                            Type: {{ $job->type->name ?? 'N/A' }}
                                        </p>
                                        <p class="text-gray-600">Salary: Rp.
                                            {{ number_format($job->salary, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>


            <!-- Volunteer Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Volunteer Opportunities</h2>
                <div class="container mx-auto mt-5">
                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($volunteers as $volunteer)
                            <a href="{{ route('search.vacancyDetails', $volunteer->id) }}">
                                <div
                                    class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                    <img src="{{ $volunteer->logo ?? 'img/defender.png' }}"
                                        alt="Volunteer Organization Logo" class="h-12 w-12 mb-14">
                                    <div>
                                        <h3 class="text-lg font-semibold">{{ $volunteer->title }}</h3>
                                        <p class="text-gray-600">
                                            {{ $volunteer->organizer->organization_name ?? 'N/A' }}
                                        </p>
                                        <p class="text-gray-600">
                                            {{ $volunteer->organizer->address ?? 'Location not available' }}</p>
                                        {{-- <p class="text-gray-600">Date: {{ $volunteer->date ?? 'Date not available' }}
                                        </p> --}}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="bg-white rounded-lg shadow-2xl p-4 mt-4 h-auto">
        <h2 class="text-xl text-center font-semibold mb-2">The abundance of companies facilitates your job search</h2>
        <div class="flex flex-wrap text-center justify-center">
            @foreach ($logos as $logo)
                <img src="{{ asset('img/' . $logo) }}" alt="Logo Perusahaan" class="h-12 w-12 m-5">
            @endforeach
        </div>
    </div>

    </div>

    <div class="bg-[#0A3981] mt-11">
        <div class="container mx-auto py-8">
            <h1 class="text-4xl font-bold text-white py-4 text-left ml-10">Blog</h1>
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8 place-items-center h-auto max-w-full">
                @foreach ($blogs as $blog)
                    <!-- Loop through the blogs -->
                    <div class="p-4">
                        <a href="{{ route('blog.show', $blog->id) }}"> <!-- Link to individual blog page -->
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://placehold.co/600x400' }}"
                                alt="Blog Image" class="mb-2">
                        </a>
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <span
                                class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
                                {{ $blog->category->name }} <!-- Display category -->
                            </span>
                        </a>
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <p class="text-white">{{ $blog->title }}</p> <!-- Display title -->
                        </a>
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <p class="text-sm text-gray-300">{{ $blog->author }},
                                {{ $blog->created_at->diffForHumans() }}</p> <!-- Author and time -->
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
