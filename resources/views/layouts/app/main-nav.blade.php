<nav class="hidden md:flex space-x-10">
    <a href="{{ route('homepage') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">
        {{ __('Home') }}
    </a>

    @include('layouts._partials.dropdown')

    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
        Link
    </a>

    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
        Link
    </a>

    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
        Link
    </a>
</nav>
