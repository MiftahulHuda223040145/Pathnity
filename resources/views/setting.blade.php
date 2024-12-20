<x-layout>

    <div class="flex container mx-auto mt-20">
        <div class="w-1/4 bg-white p-6 shadow-md">
            <h2 class="text-2xl font-bold mb-4">Settings</h2>
            <ul class="space-y-4">
                <li><a href="#" class="text-gray-700 hover:text-blue-500 font-semibold">Account</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500 font-semibold">Privacy</a></li>
                <li><a href="/change-password" class="text-gray-700 hover:text-blue-500 font-semibold">Change Password</a></li>
                <li><a href="#" class="text-red-500 hover:underline font-semibold">Logout</a></li>
            </ul>
        </div>

        <div class="w-3/4 bg-white p-8 shadow-md ml-6">
            <!-- Profile Picture -->
            <div class="flex items-center space-x-4 mb-6">
                <img id="profile-picture" src="img/profile/profile.png" alt="Profile Picture" class="w-20 h-20 rounded-full shadow-md">
                <div>
                    <p class="text-lg font-semibold text-gray-800">Pa Sugeng</p>
                    <p class="text-sm text-gray-500">Bandung, Indonesia</p>
                </div>
            </div>
            <div class="space-y-4">
                <div>
                    <p class="font-semibold text-gray-600">Name:</p>
                    <p>Pa Sugeng</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-600">Birthday:</p>
                    <p>12/12/2004</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-600">Gender:</p>
                    <p>Male</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-600">Country:</p>
                    <p>Indonesia</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-600">City:</p>
                    <p>Bandung</p>
                </div>

                <!-- Change Background Section -->
                <div class="flex items-center space-x-4 mt-4">
                    <p class="font-semibold text-gray-600">Change Background:</p>
                    <div class="border-dashed border-2 border-gray-300 p-2 rounded-md flex items-center">
                        <input type="file" id="background-upload" name="background-upload" class="hidden" accept="image/*">
                        <label for="background-upload" class="cursor-pointer inline-block bg-purple-500 text-white font-bold py-1 px-4 text-sm rounded-md hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-400">
                            Choose File
                        </label>
                        <span id="file-name" class="ml-4 text-gray-500 text-sm"></span>
                    </div>
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

    <!-- Modal Popup -->
    <div id="uploadModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-8 rounded-md shadow-lg w-96">
            <h2 class="text-xl font-semibold mb-4">Upload Background</h2>
            <div class="mb-4">
                <p class="font-semibold text-gray-600">Are you sure you want to upload a new background?</p>
                <p id="file-name-modal" class="text-sm text-gray-500"></p>
            </div>
            <div class="flex justify-between">
                <button id="cancel-upload" class="bg-red-500 text-white font-bold py-2 px-6 rounded-md hover:bg-red-600">Cancel</button>
                <button id="confirm-upload" class="bg-green-500 text-white font-bold py-2 px-6 rounded-md hover:bg-green-600">Upload</button>
            </div>
        </div>
    </div>

</x-layout>
