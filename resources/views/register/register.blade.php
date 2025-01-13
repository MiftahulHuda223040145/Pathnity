<x-layout>
    <div class="container mx-auto max-w-lg mt-20">
        <div class="flex bg-white shadow-lg w-full max-w-4xl">
            <form class="w-full p-6" action="/register" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    {{-- First Name --}}
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                            name</label>
                        <input type="text" name="first_name" id="first_name"placeholder="Your First Name"
                            value="{{ old('first_name') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('first_name')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror"
                            required />
                        @error('first_name')
                            <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            name</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Your Last Name"
                            value="{{ old('last_name') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('last_name')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror"
                            required />
                        @error('last_name')
                            <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Gender --}}
                    <div>
                        <label for="Gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mb-2">
                            <input id="male" type="radio" value="Male" name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600
                                @error('gender') peer invalid:border-pink-500 invalid:ring-pink-500 @enderror"{{ old('gender') == 'male' ? 'checked' : '' }}>
                            <label for="male"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="female" type="radio" value="Female" name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600
                                @error('gender') peer invalid:border-pink-500 invalid:ring-pink-500 @enderror"
                                {{ old('gender') == 'female' ? 'checked' : '' }}>
                            <label for="female"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                        </div>
                        @error('gender')
                            <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Phone & Birth Date --}}
                    <div>
                        <div>
                            <label for="phone_number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                number</label>
                            <input type="tel" name="phone_number" id="phone_number" placeholder="0892809091234"
                                class=" mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ old('phone_number') }}" required />
                            @error('phone_number')
                                <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="birth_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth</label>
                            <div class="mb-1">
                                <input type="date" id="birth_date" name="birth_date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                     @error('birth_date') invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @enderror"
                                    value="{{ old('birth_date') }}" required />
                                @error('birth_date')
                                    <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Adresss --}}

                <div class="mb-6">
                    <label for="province"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                    <select id="province-select" name="province" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option value="">Select Province</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="regency"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Regency</label>
                    <select id="city-select" name="regency" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option value="" disabled selected>Select Regency</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="district"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>
                    <select id="district-select" name="district" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white">
                        <option value="" disabled selected>Select District</option>
                    </select>
                </div>
                <input type="hidden" name="address" id="address">
                <input type="hidden" id="hidden-province" name="province">
                <input type="hidden" id="hidden-city" name="regency">
                <input type="hidden" id="hidden-district" name="district">



                {{-- Email --}}
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        address</label>
                    <input type="email" id="email" name="email" placeholder="sugeng@gmail.com"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('email') invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @enderror"
                        value="{{ old('email') }}" required />
                    @error('email')
                        <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="relative mb-6">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password" placeholder="•••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('password') invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @enderror"
                        required />
                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer mt-8"
                        onclick="togglePasswordVisibility('password', this)">
                        <img id="eye-icon-password" src="{{ asset('img/password/hidden.png') }}"
                            alt="Show/Hide Password" class="w-5 h-5">
                    </span>
                    @error('password')
                        <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Confirm Password --}}
                <div class="relative mb-6">
                    <label for="password_confirmation"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="•••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('password_confirmation') invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 @enderror"
                        required />
                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer mt-8"
                        onclick="togglePasswordVisibility('password_confirmation', this)">
                        <img id="eye-icon-confirm-password" src="{{ asset('img/password/hidden.png') }}"
                            alt="Show/Hide Password" class="w-5 h-5">
                    </span>
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Checkbox --}}
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree
                        with
                        the <a href="/term-condition" class="text-[#241365] hover:underline dark:text-blue-500">terms
                            and
                            conditions</a>.</label>
                </div>
                {{-- Submit --}}
                <button type="submit"
                    class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full ssm:w-[400px] px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-3 ">
                    Submit
                </button>

                <p class="text-center">Already have an account?<a href="/login"
                        class="text-orange-500 text-sm font-medium hover:text-orange-300 ml-1">
                        Sign In
                    </a></p>
                <h2 class="text-center  mb-5 mt-5 text-gray-600">or sign up using</h2>
                {{-- Provider --}}
                <div class="flex justify-center gap-4">
                    <a href="{{ route('redirect', 'google') }}"
                        class="flex items-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center mr-10">
                        <img src="{{ asset('img/google-icon.png') }}" alt="Google" class="w-5 h-5 mr-2">
                        Google
                    </a>
                    <a href="{{ route('redirect', 'facebook') }}"
                        class="flex items-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center">
                        <img src="{{ asset('img/facebook-icon.png') }}" alt="Google" class="w-5 h-5 mr-2">
                        Facebook
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/fetchLocation.js') }}"></script>
</x-layout>
