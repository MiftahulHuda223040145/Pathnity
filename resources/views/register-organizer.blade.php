<x-layout>
    <div class="container mx-auto max-w-lg mt-20">
        <div class="flex bg-white shadow-lg w-full max-w-4xl">
            <form class="w-full p-6">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="md:col-span-2">
                        <label for="organization_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Organization/Group Name
                        </label>
                        <input type="text" id="organization_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="e.g., ABC Company or XYZ Group" required />
                    </div>
                    {{-- <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required />
                        </div> --}}
                    <div>
                        <label for="company"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="company"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your Name" required />
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                            number</label>
                        <input type="tel" id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="123-45-678" pattern="[0-9]+" required />
                    </div>
                    <div>
                        <label for="website"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                        <input type="url" id="website"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="flowbite.com" required />
                    </div>
                    <div>
                        <label for="tax_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Role
                        </label>
                    <button id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio"
                        class="bg-gray-50 border border-gray-300 text-gray-400 focus:ring-blue-500 focus:border-blue-500  font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex w-full items-center dark:border-gray-600 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" >Choose your position<svg class="w-2.5 h-2.5 ms-10" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    
                    <!-- Dropdown menu -->
                    <div id="dropdownHelperRadio"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 6119.5px, 0px);">
                        <ul class="p-2 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownHelperRadioButton">
                            <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex items-center h-5">
                                        <input id="helper-radio-4" name="helper-radio" type="radio" value=""
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
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex items-center h-5">
                                        <input id="helper-radio-5" name="helper-radio" type="radio" value=""
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
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex items-center h-5">
                                        <input id="helper-radio-5" name="helper-radio" type="radio" value=""
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
                    {{-- <div>
                        <label for="visitors"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unique visitors (per
                            month)</label>
                        <input type="number" id="visitors"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                    </div> --}}
                </div>
                <div class="mb-6">
                    <label for="tax_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tax ID / Registration Number
                    </label>
                    <input type="text" id="tax_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="e.g., 123-456-789 or ABC/12345" required />
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Your company address" required />
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        address</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="john.doe@company.com" required />
                </div>
                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="•••••••••" required />
                </div>
                <div class="mb-6">
                    <label for="confirm_password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input type="password" id="confirm_password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="•••••••••" required />
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree
                        with
                        the <a href="/term-condition" class="text-[#241365] hover:underline dark:text-blue-500">terms and
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
                <h2 class="text-center  mb-5 mt-5 text-gray-600">or sign up using</h2>
                <div class="flex justify-center gap-4">
                    <a href="/"
                        class="flex items-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center mr-10">
                        <img src="{{ asset('img/google-icon.png') }}" alt="Google" class="w-5 h-5 mr-2">
                        Google
                    </a>
                    <a href="/"
                        class="flex items-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center">
                        <img src="{{ asset('img/facebook-icon.png') }}" alt="Google" class="w-5 h-5 mr-2">
                        Facebook
                    </a>
                </div>


            </form>
        </div>
    </div>
</x-layout>
