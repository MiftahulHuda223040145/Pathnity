<x-layout>
    <div class="flex container mx-auto mt-20">
        <!-- Sidebar -->
        <div class="w-1/4 bg-white p-6 shadow-md">
            <h2 class="text-2xl font-bold mb-4">Settings</h2>
            <ul class="space-y-4">
                <li>
                    <button onclick="showTab('profile')" class="w-full text-left text-gray-700 hover:text-blue-500 font-semibold">
                        Account
                    </button>
                </li>
                <hr class="border-t border-gray-300 my-2">
                <li>
                    <button onclick="showTab('privacy')" class="w-full text-left text-gray-700 hover:text-blue-500 font-semibold">
                        Privacy
                    </button>
                </li>
                <hr class="border-t border-gray-300 my-2">
                <li>
                    <a href="#" class="text-red-500 hover:underline font-semibold">Logout</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 bg-white p-8 shadow-md ml-6">
            <!-- Profile Tab -->
            <div id="profile" class="tab-content">
                <div class="flex items-center space-x-4 mb-6">
                    <img id="profile-picture" src="img/profile/profile.png" alt="Profile Picture" class="w-20 h-20 rounded-full shadow-md">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">Pa Sugeng</p>
                        <p class="text-sm text-gray-500">Bandung, Indonesia</p>
                    </div>
                </div>
                <hr class="border-t border-gray-300 my-4">

                <div class="space-y-4">
                    <div>
                        <p class="font-semibold text-gray-600">Name:</p>
                        <p class="data-name">Pa Sugeng</p>
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div>
                        <p class="font-semibold text-gray-600">Birthday:</p>
                        <p class="data-birthday">12/12/2004</p>
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div>
                        <p class="font-semibold text-gray-600">Gender:</p>
                        <p class="data-gender">Male</p>
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div>
                        <p class="font-semibold text-gray-600">Country:</p>
                        <p class="data-country">Indonesia</p>
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div>
                        <p class="font-semibold text-gray-600">City:</p>
                        <p class="data-city">Bandung</p>
                    </div>
                </div>
                <hr class="border-t border-gray-300 my-4">

                <div class="text-right mt-6">
                    <a href="/edit-setting"
                        class="bg-orange-500 text-white font-bold py-2 px-6 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        Change
                    </a>
                </div>
            </div>

            <!-- Privacy Tab -->
            <div id="privacy" class="tab-content hidden">
                <h3 class="text-xl font-bold mb-6">Privacy Settings</h3>
                <hr class="border-t border-gray-300 my-4">
                <div>
                    <p class="font-semibold text-gray-600">Email:</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700">Sugeng@gmail.com</p>
                        <button onclick="updatePhoneNumber()" class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                            Change
                        </button>
                    </div>

                </div>
                <hr class="border-t border-gray-300 my-4">

                <!-- Phone Number -->
                <div class="mb-6">
                    <p class="font-semibold text-gray-600">Nomor Telephone</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700">+62 812-3456-7890</p>
                        <button onclick="updatePhoneNumber()" class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                            Change
                        </button>
                    </div>
                </div>
                <hr class="border-t border-gray-300 my-4">
                
                <!-- Change Password -->
                <div class="mb-6">
                    <a href="/change-password" class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                        Change Password
                    </a>
                </div>
                <hr class="border-t border-gray-300 my-4">

                <!-- Delete Account -->
                <div>
                    <button onclick="confirmDeleteAccount()" class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">
                        Delete Account
                    </button>
                </div>
                <hr class="border-t border-gray-300 my-4">
            </div>
        </div>
    </div>
</x-layout>
