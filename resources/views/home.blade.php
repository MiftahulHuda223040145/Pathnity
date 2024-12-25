<x-layout>
    <section class="bg-center bg-cover bg-no-repeat bg-gray-700 bg-blend-multiply h-screen w-full"
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg');">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-36 ">
            <h1 class="mb-4 text-4xl font-medium tracking-tight leading-none text-white text-left pl-24 mt-32 ml-20">Find
                Job or Volunteer</h1>
            <div class="flex flex-wrap justify-center gap-4 mb-6">
                <input type="text" placeholder="Title, keywords or company name"
                    class="border border-gray-300 rounded-md p-3 w-96">
                <input type="text" placeholder="City, region or province"
                    class="border border-gray-300 rounded-md p-3 w-96">
                <button class="bg-orange-600 text-white rounded-md px-6 py-3 hover:bg-orange-700">Search</button>
            </div>
            <p class="text-gray-200 text-left pl-24 ml-20 ">Or browse job or volunteer by <a href="#"
                    class="text-orange-600 font-medium">Our Recommendation</a></p>
            <p class=" text-2xl text-gray-300 text-left pl-24 mt-20 ml-20">We have a large selection of job or volunteer
                vacancies in
                <br> every region of Indonesia.
            </p>
        </div>
        </div>
    </section>

    <div class="container mx-auto mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Jobs Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Jobs for You!</h2>
                <div class="container mx-auto mt-5">
                    <div class="grid grid-cols-1 gap-4">
                        @foreach($jobs as $job)
                            <div class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                <img src="{{ $job['logo'] }}" alt="Company Logo" class="h-12 w-12 mb-14">
                                <div>
                                    <h3 class="text-lg font-semibold">{{ $job['title'] }}</h3>
                                    <p class="text-gray-600">{{ $job['company_name'] }}</p>
                                    <p class="text-gray-600">{{ $job['location'] }}</p>
                                    <p class="text-gray-600">Status: {{ $job['status'] }}</p>
                                    <p class="text-gray-600">Gaji: Rp {{ number_format($job['salary'], 0, ',', '.') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>

            <!-- Volunteer Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Volunteer Spotlight</h2>
                <div class="container mx-auto mt-5">
                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($volunteers as $volunteer)
                        <div class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                            <img src="{{ $volunteer['logo'] }}" alt="Company Logo" class="h-12 w-12 mb-14">
                            <div>
                                <h3 class="text-lg font-semibold">{{ $volunteer['title'] }}</h3>
                                <p class="text-gray-600">{{ $volunteer['organization'] ?: 'Tidak disebutkan' }}</p>
                                <p class="text-gray-600">{{ $volunteer['location'] }}</p>
                                <p class="text-gray-600">Tanggal: {{ $volunteer['date'] }}</p>
                            </div>
                        </div>
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

    <div class="bg-[#241365] mt-12 py-12">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-white mb-8 text-left ml-10">Our Blog</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([['src' => 'career.png', 'title' => 'Explore Career Opportunities'],
                          ['src' => 'search-job.png', 'title' => 'Job Search: Tips & Tricks'],
                          ['src' => 'career1.png', 'title' => 'Advance Your Career with Us'],
                          ['src' => 'btc.png', 'title' => 'Bitcoin: Opportunities in Tech']] as $blog)
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <a href="/login">
                            <img src="img/blog/{{ $blog['src'] }}" alt="{{ $blog['title'] }}" class="rounded mb-4">
                            <p class="font-semibold text-center">{{ $blog['title'] }}</p>
                        </a>
                        <p class="text-sm text-gray-500 text-center mt-2">Sugeng, 56 minutes ago</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
