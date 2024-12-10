@extends('../components/layout-home')

@section('content')
    <style>
        .w-600 {
            width: 600px;
        }
    </style>
    <div class="absolute inset-0 bg-[#241365] opacity-50"></div>
    <div class="container mx-auto text-center relative z-10 py-24 mt-30">
        <h1 class="text-4xl font-medium text-white mb-4 text-left ml-48 mt-16">Find Job or Volunteer</h1>
        <div class="flex justify-center gap-4 mb-6">
            <input type="text" placeholder="Title, keywords or company name"
                class="border border-gray-300 rounded-md p-3 w-96">
            <input type="text" placeholder="City, region or province" class="border border-gray-300 rounded-md p-3 w-96">
            <button class="bg-orange-600 text-white rounded-md px-6 py-3 hover:bg-orange-700">Search</button>
        </div>
        <p class="text-gray-200 text-left ml-48">Or browse job or volunteer by <a href="#"
                class="text-orange-600 font-medium">Our Recommendation</a></p>
        <p class=" text-4xl text-gray-300 text-left ml-48 mt-20">We have a large selection of job or volunteer vacancies in
            <br> every region of Indonesia.
        </p>
    </div>
    </div>
    <div class="container mx-auto mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded-lg shadow-2xl p-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Jobs for You!</h2>
                <div class="container mx-auto mt-5 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-300 h-48 w-600">
                            <div class="flex items-center">
                            </div>
                            <h3 class="text-lg font-semibold">Fullstack Developer</h3>
                            <p class="text-gray-600">PT. Pertahanan Jaya</p>
                            <p class="text-gray-600">Jakarta, Indonesia</p>
                            <p class="text-gray-600">Status: Online</p>
                            <p class="text-gray-600">Gaji: Rp 20.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto mt-5 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-300 h-48 w-600">
                            <div class="flex items-center">
                            </div>
                            <h3 class="text-lg font-semibold">Pramuniaga/SPG</h3>
                            <p class="text-gray-600">PT. Alihkan</p>
                            <p class="text-gray-600">Jakarta, Indonesia</p>
                            <p class="text-gray-600">Status: Online</p>
                            <p class="text-gray-600">Gaji: Rp 2.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto mt-5 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-300 h-48 w-600">
                            <div class="flex items-center">
                            </div>
                            <h3 class="text-lg font-semibold">Product Developer</h3>
                            <p class="text-gray-600">PT. Pertahanan Jaya</p>
                            <p class="text-gray-600">Jakarta, Indonesia</p>
                            <p class="text-gray-600">Status: Online</p>
                            <p class="text-gray-600">Gaji: Rp 30.000.000</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-2xl p-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Volunteer Spotlight</h2>
                <div class="container mx-auto mt-5 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-300 h-48 w-600">
                            <div class="flex items-center">
                                <h3 class="text-lg font-semibold">Volunteering Pertanian dan Kehutanan</h3>
                            </div>
                            <p class="text-gray-600">Kementerian Pertanian</p>
                            <p class="text-gray-600">Jakarta, Indonesia</p>
                            <p class="text-gray-600">Tanggal: 02 Februari 2024
                            <p>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto mt-5 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-300 h-48 w-600">
                            <div class="flex items-center">
                            </div>
                            <h3 class="text-lg font-semibold">Pembersihan Kali Ciliwung</h3>
                            <p class="text-gray-600">Jakarta, Indonesia</p>
                            <p class="text-gray-600">Tanggal: 02 Februari 2024</p>

                        </div>
                    </div>
                </div>
                <div class="container mx-auto mt-5 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-300 h-48 w-600">
                            <div class="flex items-center">
                            </div>
                            <h3 class="text-lg font-semibold">Humas Kuali Merah Putih</h3>
                            <p class="text-gray-600">Jakarta, Indonesia</p>
                            <p class="text-gray-600">Tanggal: 02 Februari 2024</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-2xl p-4 mt-4 h-60">
            <h2 class="text-xl text-center font-semibold mb-2">The abundance of companies facilitates your job search</h2>
            <div class="flex flex-wrap text-center justify-center">
                <img src="logo1.png" alt="Logo Perusahaan 1" class="w-24 h-auto m-2">
                <img src="logo2.png" alt="Logo Perusahaan 2" class="w-24 h-auto m-2">
                <img src="logo3.png" alt="Logo Perusahaan 3" class="w-24 h-auto m-2">
                <img src="logo1.png" alt="Logo Perusahaan 1" class="w-24 h-auto m-2">
                <img src="logo2.png" alt="Logo Perusahaan 2" class="w-24 h-auto m-2">
                <img src="logo3.png" alt="Logo Perusahaan 3" class="w-24 h-auto m-2">
            </div>
            <div class="flex flex-wrap text-center justify-center">
                <img src="logo1.png" alt="Logo Perusahaan 1" class="w-24 h-auto m-2">
                <img src="logo2.png" alt="Logo Perusahaan 2" class="w-24 h-auto m-2">
                <img src="logo3.png" alt="Logo Perusahaan 3" class="w-24 h-auto m-2">
                <img src="logo1.png" alt="Logo Perusahaan 1" class="w-24 h-auto m-2">
                <img src="logo2.png" alt="Logo Perusahaan 2" class="w-24 h-auto m-2">
                <img src="logo3.png" alt="Logo Perusahaan 3" class="w-24 h-auto m-2">
            </div>
            <div class="flex flex-wrap text-center justify-center">
                <img src="logo1.png" alt="Logo Perusahaan 1" class="w-24 h-auto m-2">
                <img src="logo2.png" alt="Logo Perusahaan 2" class="w-24 h-auto m-2">
                <img src="logo3.png" alt="Logo Perusahaan 3" class="w-24 h-auto m-2">
                <img src="logo1.png" alt="Logo Perusahaan 1" class="w-24 h-auto m-2">
                <img src="logo2.png" alt="Logo Perusahaan 2" class="w-24 h-auto m-2">
                <img src="logo3.png" alt="Logo Perusahaan 3" class="w-24 h-auto m-2">
            </div>
        </div>
    </div>
    <div class="bg-[#241365] mt-11">  
        <div class="container mx-auto py-8">  
            <h1 class="text-4xl font-bold text-white py-4 text-left ml-10">Blog</h1>  
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8 ml-10">  
                <div class="p-4 rounded mr-11">  
                    <img src="https://via.placeholder.com/300x200" alt="Gambar 1" class="rounded mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
                <div class="p-4 rounded mr-11">  
                    <img src="https://via.placeholder.com/300x200" alt="Gambar 2" class="rounded mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
                <div class="p-4 rounded mr-11">  
                    <img src="https://via.placeholder.com/300x200" alt="Gambar 3" class="rounded mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
                <div class="p-4 rounded mr-11">  
                    <img src="https://via.placeholder.com/300x200" alt="Gambar 4" class="rounded mb-2">  
                    <p>Lorem ipsum lorem lorem.</p>  
                    <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                </div>  
            </div>  
        </div>  
    </div> 

@endsection 