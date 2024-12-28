<x-layout>

    @if (session()->has('success'))
        <div id="notification"
            class="relative isolate flex items-center gap-x-6 overflow-hidden px-6 py-2.5 sm:px-3.5 sm:before:flex-1 bg-green-700 mt-20 w-full max-w-screen-lg mx-auto">
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

    <div class="flex container mx-auto mt-20">
        <div class="w-1/4 bg-white p-6 shadow-md">
            <h2 class="text-2xl font-bold mb-4">Settings</h2>
            <ul class="space-y-4">
                <li><a href="#" class="text-gray-700 hover:text-blue-500 font-semibold">Account</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500 font-semibold">Privacy</a></li>
                <li><a href="/change-password" class="text-gray-700 hover:text-blue-500 font-semibold">Change
                        Password</a>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" href="/logout"
                            class="text-red-500 hover:underline font-semibold">Logout</button>
                    </form>
                </li>
            </ul>
        </div>


        <div class="w-3/4 bg-white p-8 shadow-md ml-6">
            <!-- Profile Picture -->
            <div class="flex items-center space-x-4 mb-6">
                <img src="{{ auth('web')->user()->avatar }}" alt="Profile Picture"
                    class="w-20 h-20 rounded-full shadow-md">
                <div>
                    <p class="text-lg font-semibold text-gray-800">{{ auth('web')->user()->first_name }}</p>
                    <p class="text-sm text-gray-500">Bandung, Indonesia</p>
                </div>
            </div>
            <div class="space-y-4">
                <div>
                    <p class="font-semibold text-gray-600">Name:</p>
                    <p>{{ auth('web')->user()->first_name . ' ' . auth('web')->user()->last_name }}</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-600">Birthday:</p>
                    <p>{{ auth('web')->user()->birth_date }}</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-600">Gender:</p>
                    <p>{{ auth('web')->user()->gender }}</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-600">Full Address:</p>
                    <p>{{ auth()->user()->address }}</p> <!-- Tampilkan alamat lengkap -->
                </div>



            </div>
            <div class="text-right mt-6">
                <a href="/edit-setting"
                    class="bg-orange-500 text-white font-bold py-2 px-6 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400">
                    Edit Profile
                </a>
            </div>
        </div>
    </div>


</x-layout>
