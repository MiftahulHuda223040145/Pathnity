<x-layout>

    <div class="flex container mx-auto mt-20">
        <div class="w-1/4 bg-white p-6 shadow-md">
            <h2 class="text-2xl font-bold mb-4">Settings</h2>
            <ul class="space-y-4">
                <li><a href="#" class="text-gray-700 hover:text-blue-500 font-semibold">Account</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500 font-semibold">Privacy</a></li>
                <li><a href="/change-password" class="text-gray-700 hover:text-blue-500 font-semibold">Change Password</a>
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
                    <p class="font-semibold text-gray-600">Country:</p>
                    <p>Indonesia</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-600">City:</p>
                    <p>Bandung</p>
                </div>
            </div>
            <div class="text-right mt-6">
                <a href="/edit-setting"
                    class="bg-orange-500 text-white font-bold py-2 px-6 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400">
                    Edit Settings
                </a>
            </div>
        </div>
    </div>
</x-layout>
