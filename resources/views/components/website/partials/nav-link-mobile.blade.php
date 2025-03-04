<!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} block rounded-md px-3 py-2 text-base font-medium" aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</a>