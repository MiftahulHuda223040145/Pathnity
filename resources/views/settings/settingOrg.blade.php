<?php
$organizer = auth('organizer')->user();
$avatarUrl = $organizer && $organizer->avatar && file_exists(public_path($organizer->avatar)) ? asset($organizer->avatar) : asset('/img/profile/avatar_default.png');
?>
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
        <!-- Sidebar -->
        <div class="w-1/4 bg-white p-6 shadow-md">
            <h2 class="text-2xl font-bold mb-4">Settings</h2>
            <ul class="space-y-4">
                <li>
                    <button onclick="showTab('profile')"
                        class="w-full text-left text-gray-700 hover:text-blue-500 font-semibold">
                        Account
                    </button>
                </li>
                <hr class="border-t border-gray-300 my-2">
                <li>
                    <button onclick="showTab('privacy')"
                        class="w-full text-left text-gray-700 hover:text-blue-500 font-semibold">
                        Privacy
                    </button>
                </li>
                <hr class="border-t border-gray-300 my-2">
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" href="/logout"
                            class="text-red-500 hover:underline font-semibold">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 bg-white p-8 shadow-md ml-6">
            <!-- Profile Tab -->
            <div id="profile" class="tab-content">
                <div class="flex items-center space-x-4 mb-6">
                    <img id="profile-picture" src="{{ $avatarUrl }}" alt="Profile Picture"
                        class="w-20 h-20 rounded-full shadow-md">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">
                            {{ auth('organizer')->user()->organization_name }}</p>
                        <p class="text-sm text-gray-500">{{ trim(explode(',', auth()->user()->address)[2] ?? '') }}</p>
                    </div>
                </div>
                <hr class="border-t border-gray-300 my-4">

                <div class="space-y-4">
                    <div>
                        <p class="font-semibold text-gray-600">Username :</p>
                        <p class="data-name">
                            {{ auth('organizer')->user()->username }}</p>
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div>
                        <p class="font-semibold text-gray-600">Position :</p>
                        <p class="data-name">
                            {{ auth('organizer')->user()->position }}</p>
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div>
                        <p class="font-semibold text-gray-600">Website :</p>
                        <p class="data-birthday">{{ auth('organizer')->user()->website }}</p>
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div>
                        <p class="font-semibold text-gray-600">Tax Number :</p>
                        <p class="data-gender">{{ auth('organizer')->user()->tax_id }}</p>
                    </div>
                    <hr class="border-t border-gray-300 my-4">
                    <div>
                        <p class="font-semibold text-gray-600">Address :</p>
                        <p class="data-city">{{ auth()->user()->address }}</p>
                    </div>
                </div>
                <hr class="border-t border-gray-300 my-4">

                <div class="text-right mt-6">
                    <a href="/edit-organizer"
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
                        <p class="text-gray-700">{{ auth()->user()->email }}</p>
                        <button onclick="updatePhoneNumber()"
                            class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                            Change
                        </button>
                    </div>

                </div>
                <hr class="border-t border-gray-300 my-4">

                <!-- Phone Number -->
                <div class="mb-6">
                    <p class="font-semibold text-gray-600">Nomor Telephone</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700">{{ auth()->user()->phone_number }}</p>
                        <button onclick="updatePhoneNumber()"
                            class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                            Change
                        </button>
                    </div>
                </div>
                <hr class="border-t border-gray-300 my-4">

                <!-- Change Password -->
                <div class="mb-6">
                    <a href="/change-password-org"
                        class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                        Change Password
                    </a>
                </div>
                <hr class="border-t border-gray-300 my-4">

                <!-- Delete Account -->
                <div>
                    <button onclick="confirmDeleteAccount()"
                        class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">
                        Delete Account
                    </button>
                </div>
                <hr class="border-t border-gray-300 my-4">
            </div>
        </div>
    </div>
</x-layout>
