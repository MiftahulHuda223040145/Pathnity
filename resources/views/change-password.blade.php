<x-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-96 bg-white p-6 shadow-md rounded-md">
            <h2 class="text-2xl font-bold mb-4 text-center">Change Password</h2>
            <form action="/change-password" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                    <input type="password" id="current_password" name="current_password" required
                        class="block w-full mt-1 p-2 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                </div>
                <div>
                    <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="password" id="new_password" name="new_password" required
                        class="block w-full mt-1 p-2 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                </div>
                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required
                        class="block w-full mt-1 p-2 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-orange-500 text-white font-bold py-2 px-6 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
