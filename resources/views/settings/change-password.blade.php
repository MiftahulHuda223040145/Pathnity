<x-layout>

    <div class="flex items-center justify-center h-screen">
        <div class="w-96 bg-white p-6 shadow-md rounded-md">
            <h2 class="text-2xl font-bold mb-4 text-center">Change Password</h2>
            <form action="/change-password" method="POST" class="space-y-4" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="relative mb-6">
                    <label for="current_password" class="block text-sm font-medium text-gray-700">Current
                        Password</label>
                    <input type="password" id="current_password" name="current_password" required
                        class="block w-full mt-1 p-2 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer mt-8"
                        onclick="togglePasswordVisibility('current_password', this)">
                        <img id="eye-icon-password" src="{{ asset('img/password/hidden.png') }}"
                            alt="Show/Hide Password" class="w-5 h-5">
                    </span>
                </div>
                <div class="relative mb-6">
                    <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="password" id="new_password" name="new_password" required
                        class="block w-full mt-1 p-2 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm 
                        @error('password') invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @enderror">
                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer mt-8"
                        onclick="togglePasswordVisibility('new_password', this)">
                        <img id="eye-icon-password" src="{{ asset('img/password/hidden.png') }}"
                            alt="Show/Hide Password" class="w-5 h-5">
                    </span>
                    @error('password')
                        <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-6">
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New
                        Password</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" required
                        class="block w-full mt-1 p-2 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm
                        @error('new_password_confirmation') invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @enderror">
                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer mt-8"
                        onclick="togglePasswordVisibility('new_password_confirmation', this)">
                        <img id="eye-icon-confirm-password" src="{{ asset('img/password/hidden.png') }}"
                            alt="Show/Hide Password" class="w-5 h-5">
                    </span>
                    @error('password')
                        <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="text-center">
                    <button type="submit"
                        class="bg-orange-500 text-white font-bold py-2 px-6 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
