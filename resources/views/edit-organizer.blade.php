<?php
$avatarPath = auth('organizer')->user()->avatar;
$avatarUrl = $avatarPath && file_exists(public_path($avatarPath)) ? asset($avatarPath) : asset('/img/profile/avatar_default.png');
?>
<x-layout>
    <div class="flex container mx-auto mt-20">
        <div class="w-3/4 bg-white p-8 shadow-md ml-auto mr-auto">
            <form id="editForm" action="/edit-organizer" method="post" accept="" enctype="multipart/form-data">
                @csrf
                @method('put')

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Profile Picture -->
                <div class="mb-4 text-center">
                    <label class="block text-gray-600 font-semibold mb-2">Organization Logo</label>
                    <div class="relative inline-block">
                        <img id="profilePreview" src="{{ $avatarUrl }}" alt="Profile Picture"
                            class="w-24 h-24 rounded-full border border-gray-300 shadow-md">
                        <label for="logo-organizer"
                            class="absolute bottom-0 right-0 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full cursor-pointer hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
                            Change
                        </label>
                        <input type="file" id="logo-organizer" name="logo-organizer" class="hidden" accept="image/*"
                            onchange="previewProfilePicture(event)">
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="organization_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization
                            Name</label>
                        <input type="text" name="organization_name" id="organization_name"
                            value="{{ old('organization_name', auth('organizer')->user()->organization_name ?? '') }}"
                            required
                            class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        @error('organization_name')
                            <p class="mt-2 text-pink-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                            Name</label>
                        <input type="text" name="username" id="username"
                            value="{{ old('username', auth('organizer')->user()->username ?? '') }}"
                            class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        @error('username')
                            <p class="mt-2 text-pink-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="position" class="block text-gray-600 font-semibold mb-2">Position</label>
                    <select name="position"
                        class="w-full border-gray-300 border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="Manajer"
                            {{ old('position', auth('organizer')->user()->position) == 'Manajer' ? 'selected' : '' }}>
                            Manajer</option>
                        <option value="HRD"
                            {{ old('position', auth('organizer')->user()->position) == 'HRD' ? 'selected' : '' }}>HRD
                        </option>
                        <option value="Admin"
                            {{ old('position', auth('organizer')->user()->position) == 'Admin' ? 'selected' : '' }}>
                            Admin
                        </option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website
                        URL</label>
                    <input type="url" id="website" name="website" placeholder="abc.com" required
                        value="{{ old('website', auth('organizer')->user()->website ?? '') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('website')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                    @error('website')
                        <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="tax_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tax ID / Registration Number
                    </label>
                    <input type="text" id="tax_id" name="tax_id"
                        value="{{ old('tax_id', auth('organizer')->user()->tax_id ?? '') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('tax_id')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                    @error('tax_id')
                        <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="province"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                    <select id="province-select" name="province" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option
                            value="{{ old('province', auth('organizer')->user()->address ? explode(',', auth('organizer')->user()->address)[0] ?? '' : '') }}">
                            Select Province</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="regency"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Regency</label>
                    <select id="city-select" name="regency" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option
                            value="{{ old('province', auth('organizer')->user()->address ? explode(',', auth('organizer')->user()->address)[1] ?? '' : '') }}"
                            disabled selected>Select Regency</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="district"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>
                    <select id="district-select" name="district" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option
                            value="{{ old('province', auth('organizer')->user()->address ? explode(',', auth('organizer')->user()->address)[2] ?? '' : '') }}"
                            disabled selected>Select District</option>
                    </select>
                </div>
                <input type="hidden" name="address" id="address">
                <input type="hidden" id="hidden-province" name="province">
                <input type="hidden" id="hidden-city" name="regency">
                <input type="hidden" id="hidden-district" name="district">
                <div class="mb-6">
                    <label for="address_details"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address
                        Details</label>
                    <input type="address_details" id="address_details" name="address_details"required
                        value="{{ trim(explode(',', auth()->user()->address)[0] ?? '') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('address_details')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                    @error('address_details')
                        <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
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
