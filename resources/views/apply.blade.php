<x-layout>
    <div class="container mx-auto p-6 mt-12">
        <div class="bg-white shadow-md rounded-md p-6">
            <h1 class="text-xl font-bold mb-4">Apply For Sugeng</h1>

            <form action="{{ route('apply.submit') }}" method="POST">
                @csrf


                <!-- Trix Editor -->
                <div class="mb-4">
                    <label for="details" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <input id="details" type="hidden" name="details">
                    <trix-editor input="details"
                        class="border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-500 trix-content"></trix-editor>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded shadow hover:bg-orange-600">
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-layout>
