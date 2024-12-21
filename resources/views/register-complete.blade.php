<x-layout>
    <div class="container mx-auto max-w-lg mt-20">
        <div class="flex bg-white shadow-lg w-full max-w-4xl">
            <form class="w-full p-6" action="/register-complete" method="POST">
                @csrf
                @method('put')
                <!-- Pre-filled fields for Google signup: first name, last name, email, etc. -->
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    {{-- First Name --}}
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                            Name</label>
                        <input type="text" name="first_name" id="first_name"
                            value="{{ old('first_name', session('user')->first_name ?? '') }}" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                        @error('first_name')
                            <p class="mt-2 text-pink-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            Name</label>
                        <input type="text" name="last_name" id="last_name"
                            value="{{ old('last_name', session('user')->last_name ?? '') }}" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                        @error('last_name')
                            <p class="mt-2 text-pink-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- Gender --}}
                    <div>
                        <label for="Gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mb-2">
                            <input id="male" type="radio" value="male" name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600
                                @error('gender') peer invalid:border-pink-500 invalid:ring-pink-500 @enderror"{{ old('gender') == 'male' ? 'checked' : '' }}>
                            <label for="male"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="female" type="radio" value="female" name="gender"
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


                    <div>
                        <div>
                            <label for="phone_number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                number</label>
                            <input type="tel" name="phone_number" id="phone_number" placeholder="+62-8928-0909-1234"
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

                {{-- Address --}}
                <div class="mb-6">
                    <label for="address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" name="address" id="address" value="{{ old('address') }}" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                    @error('address')
                        <p class="mt-2 text-pink-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Checkbox --}}
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with
                        the <a href="/term-condition" class="text-[#241365] hover:underline dark:text-blue-500">terms
                            and conditions</a>.</label>
                </div>

                {{-- Submit Button --}}
                <button type="submit"
                    class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full ssm:w-[400px] px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-3">
                    Complete Registration
                </button>
            </form>
        </div>
    </div>
</x-layout>
