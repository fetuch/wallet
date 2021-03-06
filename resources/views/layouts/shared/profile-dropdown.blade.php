<!-- Profile dropdown -->
<div
    x-data="{ open: false }"
    class="ml-3 relative"
>
    <div>
        <button
            @click="open = true"
            type="button" class="max-w-xs bg-white rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <img class="h-8 w-8 rounded-full" src="{{ asset('img/dude.jpg') }}" alt="">
            <span class="hidden ml-3 text-gray-700 text-sm font-medium lg:block"><span class="sr-only">Open user menu for </span>{{ auth()->user()->name }}</span>
            <!-- Heroicon name: solid/chevron-down -->
            <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <div
        x-show="open"
        style="display: none"
        @click.away="open = false"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
    >
        <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ __('Home') }}</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
        <span onclick="javascript: document.querySelector('#logout-form').submit()" class="cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ __('Sign out') }}</span>

        <form id="logout-form" method="POST" action="/logout">
            @csrf
        </form>
    </div>
</div>
