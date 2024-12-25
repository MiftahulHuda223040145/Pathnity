<x-layout>
    <div class="flex flex-col min-h-screen bg-gradient-to-r from-[#0A3981] via-purple-700 to-orange-500">
        <!-- Header Section -->
        <header class="text-white py-16 text-center bg-opacity-90">
            <h1 class="text-5xl font-extrabold mb-6 tracking-wide">Join Us: Be the Change</h1>
            <p class="text-xl font-light">Choose your journey: Become an Employee or Volunteer with us!</p>
        </header>

        <!-- Main Content Section -->
        <main class="flex-grow p-8">
            <div class="container mx-auto space-y-12">
                <!-- Section for Accept Employees -->
                <section class="bg-white shadow-2xl rounded-lg p-6 md:flex md:space-x-8 items-center transition-transform transform hover:scale-105">
                    <div class="w-full md:w-1/5">
                        <img src="{{ asset('img/facebook-icon.png') }}" alt="Accept Employees" class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>
                    <div class="w-full md:w-4/5 text-center md:text-left">
                        <h2 class="text-3xl font-bold text-blue-600 mb-4">Join Our Team</h2>
                        <p class="text-base text-gray-600 mb-6">Ready to take your career to the next level? Join a community of innovators and dreamers making a difference every day.</p>
                        <div class="flex justify-center md:justify-start gap-4">
                            <a href="/employee-apply" class="bg-green-500 text-white py-3 px-8 rounded-full shadow-lg transform transition-all duration-300 hover:bg-green-600 hover:scale-110">
                                Apply Now
                            </a>
                            <a href="/employee-info" class="bg-gray-300 text-gray-700 py-3 px-8 rounded-full shadow-lg transform transition-all duration-300 hover:bg-gray-400 hover:scale-110">
                                Learn More
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Section for Volunteer -->
                <section class="bg-white shadow-2xl rounded-lg p-6 md:flex md:space-x-8 items-center transition-transform transform hover:scale-105">
                    <div class="w-full md:w-1/5">
                        <img src="{{ asset('img/apple.png') }}" alt="Volunteer" class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>
                    <div class="w-full md:w-4/5 text-center md:text-left">
                        <h2 class="text-3xl font-bold text-purple-600 mb-4">Make an Impact</h2>
                        <p class="text-base text-gray-600 mb-6">Passionate about giving back? Volunteer with us and create meaningful change in your community.</p>
                        <div class="flex justify-center md:justify-start gap-4">
                            <a href="/volunteer-apply" class="bg-orange-500 text-white py-3 px-8 rounded-full shadow-lg transform transition-all duration-300 hover:bg-orange-600 hover:scale-110">
                                Volunteer Now
                            </a>
                            <a href="/volunteer-info" class="bg-gray-300 text-gray-700 py-3 px-8 rounded-full shadow-lg transform transition-all duration-300 hover:bg-gray-400 hover:scale-110">
                                Learn More
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</x-layout>
