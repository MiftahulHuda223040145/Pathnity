@extends('../components/layout-login')

@section('content')
<div class="flex flex-col h-screen">
    <main class="flex-grow flex justify-center items-center bg-gray-100">
        <div class="flex bg-white shadow-lg w-full max-w-4xl">
            <div class="w-1/2 bg-purple-700 text-white p-8">
                <h1 class="text-3xl font-bold mb-6">PATHNITY</h1>
                <p class="text-lg">Pathnity helps you connect and get a career according to your passion</p>
            </div>

            <div class="w-1/2 p-8">
                <h2 class="text-2xl font-semibold mb-4">Login</h2>
                <div class="flex gap-4 mb-6">
                    <button class="w-1/2 bg-gray-200 py-2 rounded text-black hover:bg-gray-300">Google</button>
                    <button class="w-1/2 bg-gray-200 py-2 rounded text-black hover:bg-gray-300">Facebook</button>
                </div>
                <form action="/login" method="POST" class="space-y-4">
                    @csrf
                    <input type="email" name="email" placeholder="Enter Email or Username" 
                        class="w-full border border-gray-300 p-2 rounded">
                    <input type="password" name="password" placeholder="Enter Password" 
                        class="w-full border border-gray-300 p-2 rounded">
                    <button type="submit" 
                        class="w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600">Login</button>
                    <a href="#" class="text-orange-500 text-sm">Forgot your password?</a>
                </form>
                <div class="flex justify-between mt-6">
                    <a href="/register" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Register</a>
                    <a href="/register-organizer" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Register for Organizer</a>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

