@props(['active' => false])

<a {{ $attributes }}
class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FFA629]  md:p-0 dark:text-white md:dark:hover:text-[#FFA629]  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>