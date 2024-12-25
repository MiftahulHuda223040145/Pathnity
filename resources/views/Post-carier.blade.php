<x-layout>
    <div class="container mx-auto mt-24 mb-10">
        <h2 class="text-xl font-bold mb-6">Post Carrier</h2>
        <div class=" p-6 bg-white shadow-md border border-gray-200 rounded-md">
 
            
            <form>
                <!-- Title -->
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold mb-1">Title</label>
                    <input type="text" id="title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none" placeholder="Enter title">
                </div>
        
                <!-- Category -->
                <div class="mb-4">
                    <label for="category" class="block text-gray-700 font-semibold mb-1">Category</label>
                    <select id="category" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
                        <option value="" disabled selected>Select category</option>
                        <option>Category 1</option>
                        <option>Category 2</option>
                    </select>
                </div>
        
                <!-- Type -->
                <div class="mb-4">
                    <label for="type" class="block text-gray-700 font-semibold mb-1">Type</label>
                    <select id="type" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
                        <option value="" disabled selected>Select type</option>
                        <option>Type 1</option>
                        <option>Type 2</option>
                    </select>
                </div>
        
                <!-- Company/Group -->
                <div class="mb-4">
                    <label for="company" class="block text-gray-700 font-semibold mb-1">Company/Group</label>
                    <select id="company" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none">
                        <option value="" disabled selected>Select company/group</option>
                        <option>Company 1</option>
                        <option>Company 2</option>
                    </select>
                </div>
        
                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-semibold mb-1">Description</label>
                    <textarea id="description" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none" rows="4" placeholder="Enter description"></textarea>
                </div>
        
                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-orange-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-orange-600 focus:ring focus:ring-orange-300 focus:outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
