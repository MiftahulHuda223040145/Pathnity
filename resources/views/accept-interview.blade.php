<x-layout>
    <div class="flex flex-col min-h-screen bg-gradient-to-br from-gray-100 to-gray-300 mt-20">
        <!-- Header Section -->
        <header class="text-white py-10  bg-orange-500 shadow-md">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold">Interview Confirmation</h1>
                <p class="text-lg mt-2">Ensure you're ready for the next step in your career journey!</p>
            </div>
        </header>

        <!-- Main Content Section -->
        <main class="flex-grow p-6">
            <div class="container mx-auto space-y-8">
                <!-- Interview Details Card -->
                <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-1/3 flex justify-center mb-6 md:mb-0">
                        <img src="https://via.placeholder.com/150" alt="Candidate Photo" class="rounded-full shadow-md w-32 h-32 object-cover">
                    </div>
                    <div class="w-full md:w-2/3 text-center md:text-left">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">John Doe</h2>
                        <p class="text-gray-600 text-lg">Position Applied: <span class="font-medium">Software Engineer</span></p>
                        <p class="text-gray-600 text-lg">Interview Date: <span class="font-medium">January 15, 2024</span></p>
                        <p class="text-gray-600 text-lg">Time: <span class="font-medium">10:00 AM</span></p>
                        <p class="text-gray-600 text-lg">Mode: <span class="font-medium">Zoom</span></p>
                        <div class="mt-4">
                            <a href="#" class="text-blue-500 underline">View Zoom Link</a>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4 mt-6">
                            <a href="/confirm-interview" class="bg-green-500 hover:bg-green-600 text-white py-3 px-12 rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105">
                                Accept Interview
                            </a>
                            <a href="/decline" class="bg-red-500 hover:bg-red-600 text-white py-3 px-12 rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105">
                                Decline
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-layout>
