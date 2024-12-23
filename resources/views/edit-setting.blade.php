<x-layout>
    <div class="flex container mx-auto mt-20">
        <div class="w-3/4 bg-white p-8 shadow-md ml-auto mr-auto">
            <form id="editForm" enctype="multipart/form-data">
                <!-- Profile Section -->
                <div class="flex items-center justify-center space-x-6 mb-6">
                    <!-- Profile Picture -->
                    <div class="text-center">
                        <label class="block text-gray-600 font-semibold mb-2">Profile Picture</label>
                        <div class="relative inline-block">
                            <img id="profilePreview" src="img/profile/profile.png" alt="Profile Picture"
                                class="w-20 h-20 rounded-full border border-gray-300 shadow-md">
                            <label for="profilePicture"
                                class="absolute bottom-0 right-0 bg-purple-500 text-white text-xs font-bold px-2 py-1 rounded-full cursor-pointer hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
                                Change
                            </label>
                            <input type="file" id="profilePicture" name="profilePicture" class="hidden"
                                accept="image/*" onchange="previewProfilePicture(event)">
                        </div>
                    </div>

                    <!-- Change Background -->
                    <!-- Change Background -->
                    <div class="text-center">
                        <label class="block text-gray-600 font-semibold mb-2">Background</label>
                        <div class="relative inline-block">
                            <img id="backgroundPreview" src="img/background/background.jpeg" alt="Background"
                                class="w-20 h-10 border border-gray-300 shadow-md">
                            <label for="backgroundUpload"
                                class="absolute bottom-0 right-0 bg-purple-500 text-white text-[8px] font-bold px-1 py-0.5 rounded-md cursor-pointer hover:bg-purple-600 focus:ring-2 focus:ring-purple-400">
                                Change
                            </label>
                            <input type="file" id="backgroundUpload" name="backgroundUpload" class="hidden"
                                accept="image/*" onchange="previewBackground(event)">
                        </div>
                    </div>

                </div>

                <!-- Name -->
                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Name</label>
                    <input type="text" value="Pa Sugeng"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Birthday -->
                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Birthday</label>
                    <input type="date" value="2004-12-12"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Gender -->
                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Gender</label>
                    <select
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <!-- Country -->
                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Country</label>
                    <input type="text" value="Indonesia"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- City -->
                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">City</label>
                    <input type="text" value="Bandung"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Submit Button -->
                <div class="text-right mt-6">
                    <button type="submit"
                        class="bg-green-500 text-white font-bold py-2 px-6 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                        Confirm to Change
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewProfilePicture(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profilePreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        function previewBackground(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('backgroundPreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</x-layout>
