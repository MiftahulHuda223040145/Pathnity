@extends('../components/layout-login')

@section('content')

<div class="bg-white min-h-screen">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Search" class="border rounded-lg p-2 w-72 focus:outline-none focus:ring-2 focus:ring-purple-500">
                <button class="bg-yellow-400 text-black px-4 py-2 rounded-lg hover:bg-yellow-500 focus:outline-none">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="flex space-x-2">
                <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 focus:outline-none">Filters</button>
                <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 focus:outline-none">Sort</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="Image" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl text-gray-800">Kementrian Pertanian</h3>
                        <p class="text-gray-600 text-sm mb-4">Pengelolaan lorem<br>Jakarta, Indonesia</p>
                        <a href="#" class="bg-yellow-400 text-black px-4 py-2 rounded-lg text-sm hover:bg-yellow-500 focus:outline-none">
                            See More
                        </a>
                    </div>
                </div>
            @endfor

            @for ($i = 0; $i < 3; $i++)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="Image" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl text-gray-800">Pa Sugeng</h3>
                        <p class="text-gray-600 text-sm mb-4">Fullstack Developer<br>Jakarta, Indonesia</p>
                        <a href="#" class="bg-yellow-400 text-black px-4 py-2 rounded-lg text-sm hover:bg-yellow-500 focus:outline-none">
                            See More
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>

@endsection
