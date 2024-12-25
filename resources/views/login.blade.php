<x-layout>
    <div class="flex flex-col min-h-screen">
        <main class="flex-grow flex justify-center items-center bg-gray-100">
            <div class="flex flex-col md:flex-row bg-white shadow-lg w-full max-w-4xl h-full md:h-auto overflow-y-auto">
                <div class="w-full md:w-1/2 bg-[#0A3981] text-white p-8 flex flex-col justify-center items-center">
                    <!-- Ganti teks "PATHNITY" dengan gambar logo -->
                    <img src="{{ asset('img/logo/logo.png') }}" alt="Logo" class="h-36  w-auto mb-6">
                    <p class="text-lg text-center">Pathnity helps you connect and get a career according to your passion</p>
                </div>
    
                <div class="w-full md:w-1/2 p-8">
                    <h2 class="text-2xl font-semibold mb-4 text-center md:text-left">Login</h2>
                    <div class="flex flex-col md:flex-row justify-center gap-4 mb-6">
                        <a href="/" class="flex items-center justify-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center">
                            <img src="{{ asset('img/google-icon.png') }}" alt="Google" class="w-5 h-5 mr-2"> 
                            Google
                        </a>
                        <a href="/" class="flex items-center justify-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center">
                            <img src="{{ asset('img/facebook-icon.png') }}" alt="Facebook" class="w-5 h-5 mr-2"> 
                            Facebook
                        </a>
                    </div>
                    <form action="/login" method="POST" class="space-y-4">
                        @csrf
                        <input type="email" name="email" placeholder="Enter Email or Username" 
                            class="w-full border border-gray-300 p-2 rounded">
                        <input type="password" name="password" placeholder="Enter Password" 
                            class="w-full border border-gray-300 p-2 rounded">
                        <button type="submit" 
                            class="w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600">Login</button>
                        <a href="#" class="text-orange-500 text-sm block text-center mt-2">Forgot your password?</a>
                    </form>
                    <div class="flex flex-col sm:flex-row justify-center sm:justify-between gap-4 mt-6">
                        <a href="/register" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 text-center">Register</a>
                        <a href="/register-organizer" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 text-center">Register for Organizer</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-layout>
