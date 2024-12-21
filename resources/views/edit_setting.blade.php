<x-layout>
    <div class="flex container mx-auto mt-20">
        <div class="w-3/4 bg-white p-8 shadow-md ml-auto mr-auto">
            <form id="editForm" enctype="multipart/form-data" method="post" accept="" enctype="multipart/form-data">
                @csrf
                <!-- Profile Picture -->
                <div class="mb-4 text-center">
                    <label class="block text-gray-600 font-semibold mb-2">Profile Picture</label>
                    <div class="relative inline-block">
                        <img id="profilePreview" src="{{ auth('web')->user()->avatar }}" alt="Profile Picture"
                            class="w-24 h-24 rounded-full border border-gray-300 shadow-md">
                        <label for="profilePicture"
                            class="absolute bottom-0 right-0 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full cursor-pointer hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
                            Change
                        </label>
                        <input type="file" id="profilePicture" name="profilePicture" class="hidden" accept="image/*"
                            onchange="previewProfilePicture(event)">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-600 font-semibold mb-2">Name</label>
                    <input type="text"
                        value="{{ auth('web')->user()->first_name . ' ' . auth('web')->user()->last_name }}"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        id="name" name="name">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Birthday</label>
                    <input type="date" value="{{ auth('web')->user()->birth_date }}"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Gender</label>
                    <select
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Country</label>
                    <input type="text" value="Indonesia"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">City</label>
                    <input type="text" value="Bandung"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="text-right mt-6">
                    <button type="submit"
                        class="bg-green-500 text-white font-bold py-2 px-6 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                        Confirm to Change
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
