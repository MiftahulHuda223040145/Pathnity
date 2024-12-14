<x-layout>

    @if (session()->has('success'))
        <div id="notification"
            class="relative isolate flex items-center gap-x-6 overflow-hidden px-6 py-2.5 sm:px-3.5 sm:before:flex-1 bg-green-700">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                <p class="text-sm/6 text-white">
                    <strong class="font-semibold">{{ session('success') }}</strong>
                </p>
            </div>
            <div class="flex flex-1 justify-end">
                <button type="button" onclick="document.getElementById('notification').remove();"
                    class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                    <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path
                            d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    @if (session()->has('loginError'))
        <div id="notification"
            class="relative isolate flex items-center gap-x-6 overflow-hidden px-6 py-2.5 sm:px-3.5 sm:before:flex-1 bg-red-700">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                <p class="text-sm/6 text-white">
                    <strong class="font-semibold">{{ session('loginError') }}</strong>
                </p>
            </div>
            <div class="flex flex-1 justify-end">
                <button type="button" onclick="document.getElementById('notification').remove();"
                    class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                    <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path
                            d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div class="flex flex-col min-h-screen">
        <main class="flex-grow flex justify-center items-center bg-gray-100">
            <div class="flex flex-col md:flex-row bg-white shadow-lg w-full max-w-4xl h-full md:h-auto overflow-y-auto">
                <div class="w-full md:w-1/2 bg-purple-700 text-white p-8 flex flex-col justify-center items-center">
                    <h1 class="text-3xl font-bold mb-6 text-center">PATHNITY</h1>
                    <p class="text-lg text-center">Pathnity helps you connect and get a career according to your passion
                    </p>
                </div>
                {{-- Provider --}}
                <div class="w-full md:w-1/2 p-8">
                    <h2 class="text-2xl font-semibold mb-4 text-center md:text-left">Login</h2>
                    <div class="flex flex-col md:flex-row justify-center gap-4 mb-6">
                        <a href="{{ route('redirect', 'google') }}"
                            class="flex items-center justify-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center">
                            <img src="{{ asset('img/google-icon.png') }}" alt="Google" class="w-5 h-5 mr-2">
                            Google
                        </a>
                        <a href="{{ route('redirect', 'facebook') }}"
                            class="flex items-center justify-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center">
                            <img src="{{ asset('img/facebook-icon.png') }}" alt="Facebook" class="w-5 h-5 mr-2">
                            Facebook
                        </a>
                    </div>

                    {{-- Form --}}
                    <form action="/login" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <input autofocus required autocomplete="email" type="email" name="email"
                                placeholder="Enter Email or Username" value="{{ old('email') }}"
                                class="w-full border border-gray-300 p-2 rounded 
                            @error('email') peer invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @enderror">
                            @error('email')
                                <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input required id="password" autocomplete="current-password" type="password"
                                name="password" placeholder="Enter Password"
                                class="w-full border border-gray-300 p-2 rounded">
                        </div>
                        <button type="submit"
                            class="w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600">Login</button>
                        <a href="#" class="text-orange-500 text-sm block text-center mt-2">Forgot your
                            password?</a>
                    </form>

                    {{-- Regis --}}
                    <div class="flex flex-col sm:flex-row justify-center sm:justify-between gap-4 mt-6">
                        <a href="/register"
                            class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 text-center">Register</a>
                        <a href="/register-organizer"
                            class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 text-center">Register for
                            Organizer</a>
                    </div>
                </div>
            </div>
        </main>
    </div>


</x-layout>
