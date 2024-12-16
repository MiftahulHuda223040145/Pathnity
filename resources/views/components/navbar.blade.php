<nav id="navbar" class="fixed top-0 left-0 w-full {{ request()->is('search') ? 'bg-primaryDark shadow-lg' : 'bg-transparent' }}">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
  <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="img/logo/logo.png" class="h-8" alt="Flowbite Logo" />
      <span class="self-center text-xl font-medium whitespace-nowrap text-white">Pathnity</span>
  </a>
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    @auth
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="{{ auth('web')->user()->avatar }}" alt="user photo">
      </button>

      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white">{{ auth('web')->user()->first_name . ' ' . auth('web')->user()->last_name }}</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth('web')->user()->email }}</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
          </li>
          <li>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</button>
            </form>
          </li>
        </ul>
      </div>
      @else
      <a href="/login" class="text-white text-sm font-medium hover:text-orange-300 {{ request()->is('login') ? 'text-[#FFA629]' : 'text-white hover:text-[#FFA629]' }}">
        SignIn/SignUp
      </a>
      @endauth
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
      <li>
        <a href="/" class="block py-2 px-3 text-white text-sm font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FFA629]  md:p-0 dark:text-white md:dark:hover:text-[#FFA629]  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 ml-9 {{ request()->is('/') ? 'text-[#FFA629]' : 'text-white hover:text-[#FFA629]' }}" :active="request()->is('/')">Home</a>
      </li>
      <li>
        <a href="/search" class="block py-2 px-3 text-white text-sm font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FFA629]  md:p-0 dark:text-white md:dark:hover:text-[#FFA629]  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 ml-9 {{ request()->is('search') ? 'text-[#FFA629]' : 'text-white hover:text-[#FFA629]' }}" :active="request()->is('/search')">Search</a>
      </li>

      <li>
        <a href="/career" class="block py-2 px-3 text-white text-sm font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FFA629]  md:p-0 dark:text-white md:dark:hover:text-[#FFA629]  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 ml-9 {{ request()->is('career') ? 'text-[#FFA629]' : 'text-white hover:text-[#FFA629]' }}" :active="request()->is('/career')">Career</a>
      </li>
      <li>
        <a href="/blogs" class="block py-2 px-3 text-white text-sm font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FFA629]  md:p-0 dark:text-white md:dark:hover:text-[#FFA629]  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 ml-9 {{ request()->is('blog') ? 'text-[#FFA629]' : 'text-white hover:text-[#FFA629]' }}":active="request()->is('/blog')">Blog</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

{{-- <nav id="navbar" class="fixed top-0 left-0 w-full {{ request()->is('search') ? 'bg-primaryDark shadow-lg' : 'bg-transparent' }}">
    <div class="container mx-auto flex justify-between items-center px-4 py-2">
      <a href="/" class="text-white text-lg font-medium ml-16">Pathnity</a>
      <div class="flex gap-6 items-center mr-31">
          <a href="/" class="text-white text-sm font-medium hover:text-orange-300">Home</a>
          <a href="/search" class="text-white text-sm font-medium hover:text-orange-300 ml-9">Search</a>
          <a href="#" class="text-white text-sm font-medium hover:text-orange-300 ml-9">Carrier</a>
          <a href="#" class="text-white text-sm font-medium hover:text-orange-300 ml-9">Blog</a>
      </div>
      <a href="/login" class="text-white text-sm font-medium hover:text-orange-300">
          SignIn/SignUp
      </a>
  </div>

</nav> --}}