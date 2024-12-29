<x-layout>
    <div class="container mx-auto max-w-lg mt-20">
        <div class="flex bg-white shadow-lg w-full max-w-4xl">
            <form class="w-full p-6" action="/register-organizer" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="md:col-span-2">
                        <label for="organization_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Organization/Group Name
                        </label>
                        <input type="text" name="organization_name" id="organization_name"
                            value="{{ old('organization_name') }}" placeholder="e.g., ABC Company or XYZ Group" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('organization_name')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                        @error('organization_name')
                            <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}"
                            placeholder="Your Name" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('username')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                        @error('username')
                            <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="phone_number"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                            number</label>
                        <input type="text" id="phone_number" name="phone_number"
                            value="{{ old('phone_number') }}"placeholder="123-45-678" pattern="[0-9]+" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('phone_number')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                        @error('phone_number')
                            <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="website"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                        <input type="url" id="website" name="website" placeholder="abc.com" required
                            value="{{ old('website') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @error('website')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                        @error('website')
                            <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Position
                        </label>
                        <button id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio"
                            class="bg-gray-50 border border-gray-300 text-gray-400 focus:ring-blue-500 focus:border-blue-500 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex w-full items-center justify-between dark:border-gray-600 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            <span id="selectedPosition">Choose your position</span>
                            <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownHelperRadio"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="p-2 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                                        onclick="updatePosition('Manajer')">
                                        <div class="flex items-center h-5">
                                            <input id="helper-radio-4" name="position" type="radio" value="manager"
                                                class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        </div>
                                        <div class="ms-2 text-sm">
                                            <label for="helper-radio-4"
                                                class="font-medium text-gray-900 dark:text-gray-300">
                                                <div>Manajer</div>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                                        onclick="updatePosition('HRD')">
                                        <div class="flex items-center h-5">
                                            <input id="helper-radio-5" name="position" type="radio" value="hrd"
                                                class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        </div>
                                        <div class="ms-2 text-sm">
                                            <label for="helper-radio-5"
                                                class="font-medium text-gray-900 dark:text-gray-300">
                                                <div>HRD</div>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"
                                        onclick="updatePosition('Admin')">
                                        <div class="flex items-center h-5">
                                            <input id="helper-radio-6" name="position" type="radio" value="admin"
                                                class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        </div>
                                        <div class="ms-2 text-sm">
                                            <label for="helper-radio-6"
                                                class="font-medium text-gray-900 dark:text-gray-300">
                                                <div>Admin</div>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <script>
                        function updatePosition(position) {
                            document.getElementById('selectedPosition').textContent = position;
                            document.getElementById('selectedPosition').classList.remove('text-gray-400');
                            document.getElementById('selectedPosition').classList.add('text-black');
                            document.getElementById('dropdownHelperRadio').classList.add('hidden');
                        }
                    </script>


                </div>
                <div class="mb-6">
                    <label for="tax_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tax ID / Registration Number
                    </label>
                    <input type="text" id="tax_id" name="tax_id"placeholder="e.g., 123-456-789 or ABC/12345"
                        value="{{ old('tax_id') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('tax_id')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                    @error('tax_id')
                        <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
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
                <div class="mb-6">
                    <label for="address_details"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address
                        Details</label>
                    <input type="address_details" id="address_details"
                        name="address_details"placeholder="e.g. Jl. Merpati No. 123" required
                        value="{{ old('address_details') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('address_details')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                    @error('address_details')
                        <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        address</label>
                    <input type="email" id="email" name="email" placeholder="john.doe@company.com" required
                        value="{{ old('email') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @error('address_details')
                            peer
                                 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror" />
                    @error('address_details')
                        <p class="mt-2 visible peer-invalid:visible text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="relative mb-6">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="•••••••••" required />
                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer mt-8"
                        onclick="togglePasswordVisibility('password', this)">
                        <img id="eye-icon-password" src="{{ asset('img/password/hidden.png') }}"
                            alt="Show/Hide Password" class="w-5 h-5">
                    </span>
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-6">
                    <label for="password_confirmation"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="•••••••••" required />
                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer mt-8"
                        onclick="togglePasswordVisibility('confirm_password', this)">
                        <img id="eye-icon-confirm-password" src="{{ asset('img/password/hidden.png') }}"
                            alt="Show/Hide Password" class="w-5 h-5">
                    </span>
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
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
                <button type="submit"
                    class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full ssm:w-[400px] px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-3 ">
                    Register
                </button>
                <p class="text-center">Already have an account?<a href="/login"
                        class="text-orange-500 text-sm font-medium hover:text-orange-300 ml-1">
                        Sign In
                    </a></p>



            </form>
        </div>
    </div>
</x-layout>
