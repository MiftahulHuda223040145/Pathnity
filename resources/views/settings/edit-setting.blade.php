<?php
$avatarPath = auth('web')->user()->avatar;

// Check if avatar is a full URL (in case of Google Auth or external avatar source)
if (filter_var($avatarPath, FILTER_VALIDATE_URL)) {
    $avatarUrl = $avatarPath; // Use the URL directly
} elseif ($avatarPath && file_exists(public_path('storage/' . $avatarPath))) {
    // If avatar exists in storage and is stored locally
    $avatarUrl = asset('storage/' . $avatarPath);
} else {
    // Default avatar if no avatar is found
    $avatarUrl = asset('/img/profile/avatar_default.png');
}
?>

<x-layout>
    <div class="flex container mx-auto mt-20">
        <div class="w-3/4 bg-white p-8 shadow-md ml-auto mr-auto">
            <form id="editForm" action="/edit-setting" method="post" accept="" enctype="multipart/form-data">
                @csrf
                @method('put')
                <!-- Profile Picture -->
                <div class="mb-4 text-center">
                    <label class="block text-gray-600 font-semibold mb-2">Profile Picture</label>
                    <div class="relative inline-block">
                        <img id="profilePreview" src="{{ $avatarUrl }}" alt="Profile Picture"
                            class="w-24 h-24 rounded-full border border-gray-300 shadow-md">
                        <label for="profilePicture"
                            class="absolute bottom-0 right-0 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full cursor-pointer hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
                            Change
                        </label>
                        <input type="file" id="profilePicture" name="profilePicture" class="hidden" accept="image/*"
                            onchange="previewProfilePicture(event)">
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                            Name</label>
                        <input type="text" name="first_name" id="first_name"
                            value="{{ old('first_name', auth('web')->user()->first_name ?? '') }}" required
                            class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        @error('first_name')
                            <p class="mt-2 text-pink-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            Name</label>
                        <input type="text" name="last_name" id="last_name"
                            value="{{ old('last_name', auth('web')->user()->last_name ?? '') }}"
                            class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        @error('last_name')
                            <p class="mt-2 text-pink-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Birthday</label>
                    <input type="date" name="birth_date"
                        value="{{ old('birth_date', auth('web')->user()->birth_date) }}"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="mb-4">
                    <label for="gender" class="block text-gray-600 font-semibold mb-2">Gender</label>
                    <select name="gender"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="Male"
                            {{ old('gender', auth('web')->user()->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female"
                            {{ old('gender', auth('web')->user()->gender) == 'Female' ? 'selected' : '' }}>Female
                        </option>
                    </select>

                </div>

                <div class="mb-6">
                    <label for="province"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                    <select id="province-select" name="province" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option
                            value="{{ old('province', auth('web')->user()->address ? explode(',', auth('web')->user()->address)[0] ?? '' : '') }}">
                            Select Province</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="regency"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Regency</label>
                    <select id="city-select" name="regency" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option
                            value="{{ old('province', auth('web')->user()->address ? explode(',', auth('web')->user()->address)[1] ?? '' : '') }}"
                            disabled selected>Select Regency</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="district"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>
                    <select id="district-select" name="district" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option
                            value="{{ old('province', auth('web')->user()->address ? explode(',', auth('web')->user()->address)[2] ?? '' : '') }}"
                            disabled selected>Select District</option>
                    </select>
                </div>
                <input type="hidden" name="address" id="address">
                <input type="hidden" id="hidden-province" name="province">
                <input type="hidden" id="hidden-city" name="regency">
                <input type="hidden" id="hidden-district" name="district">
                <div class="text-right mt-6">
                    <button type="submit"
                        class="bg-green-500 text-white font-bold py-2 px-6 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                        Confirm to Change
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/fetchLocation.js') }}"></script>

</x-layout>
