<x-layout>
    <div class="container mx-auto p-6 mt-12">
        <div class="bg-white shadow-md rounded-md overflow-hidden">
            <!-- Background Image -->
            <div class="w-full h-60 bg-cover bg-center"
                style="background-image: url('{{ asset('img/background/background.jpeg') }}');">
            </div>
            <!-- Profile Images -->
            <div class="p-6 flex flex-col items-center">
                <div
                    class="w-24 h-24 rounded-full border-4 border-gray-200 bg-gray-200 flex items-center justify-center -mt-12">
                    <img src="{{ auth('web')->user()->avatar ? asset(auth('web')->user()->avatar) : asset('/img/profile/avatar_default.png') }}"
                        alt="Profile Image" class="w-24 h-24 rounded-full object-cover">
                </div>
                <h2 class="text-center text-xl font-bold mt-4">
                    {{ auth('web')->user()->first_name . ' ' . auth('web')->user()->last_name }}</h2>
                <p class="text-center text-sm text-gray-500">{{ trim(explode(',', auth()->user()->address)[2] ?? '') }}
                </p>
            </div>
        </div>

        <!-- Experience Section -->
        <div class="bg-white shadow-md rounded-md p-6 mt-6 relative">
            <h2 class="text-xl font-bold mb-4">Experience</h2>
            <div class="space-y-4">
                <!-- First Experience Item -->
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="img/medsos/linkedin.png" alt="Company Image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="font-semibold">Software Engineer</h3>
                        <p class="text-sm text-gray-500">Tech Company | 2020-01-01 - 2023-01-01</p>
                    </div>
                </div>
                <!-- Second Experience Item -->
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden mb-6">
                        <img src="img/medsos/ig.png" alt="Company Image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="font-semibold ">Senior Developer</h3>
                        <p class="text-sm text-gray-500 mb-5">Another Tech Company | 2018-01-01 - 2020-01-01</p>
                    </div>
                </div>
            </div>
            <a href="/seemore-experience" class="bg-orange-500 text-white px-4 py-2 text-sm rounded mt-2">See More</a>
        </div>

        <!-- Skills Section -->
        <div class="bg-white shadow-md rounded-md p-6 mt-6 relative">
            <h2 class="text-xl font-bold mb-4">Skills</h2>
            <button class="absolute top-4 right-4 text-black hover:text-gray-700" onclick="openEditForm('skills')">
                <i class="fas fa-edit" title="Edit Skills"></i>
            </button>
            <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                <li>English Language</li>
                <li>Germany Language</li>
                <li>Italy Language</li>
            </ul>
            <a href="/seemore-experience" class="bg-orange-500 text-white px-4 py-2 text-sm rounded mt-2">See More</a>
        </div>

        <!-- Education Section -->
        <div class="bg-white shadow-md rounded-md p-6 mt-6 relative">
            <h2 class="text-xl font-bold mb-4">Education</h2>
            <button class="absolute top-4 right-4 text-black hover:text-gray-700" onclick="openEditForm('education')">
                <i class="fas fa-edit" title="Edit Education"></i>
            </button>
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 rounded-full overflow-hidden mb-6">
                    <img src="img/education/unpas.png" alt="Company Image" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="font-semibold">University Pasundan Bandung</h3>
                    <p class="text-sm text-gray-500 mb-5">Bachelor's Degree | 2016</p>
                </div>
            </div>
            <a href="/seemore-experience" class="bg-orange-500 text-white px-4 py-2 text-sm rounded mt-2">See More</a>
        </div>

        <!-- Edit Form Modal -->
        <div id="editFormModal" class="fixed inset-0 bg-black bg-opacity-50 flex hidden justify-center items-center">
            <div class="bg-white p-6 rounded-md w-full max-w-md">
                <h2 id="editFormTitle" class="text-xl font-bold mb-4">Edit</h2>
                <form id="editForm">
                    <!-- Dynamic Content -->
                </form>
                <div class="mt-4 flex justify-end space-x-2">
                    <button onclick="closeEditForm()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </div>
            </div>
        </div>

    </div>
</x-layout>
