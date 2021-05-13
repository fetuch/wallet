@unless ($breadcrumbs->isEmpty())
<nav class="flex" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-4">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li>
                    <div class="flex items-center">
                        @if(!$loop->first)
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                        </svg>
                        @endif
                        <a href="{{ $breadcrumb->url }}" class="@if(!$loop->first) ml-4 @endif text-sm font-medium text-gray-500 hover:text-gray-700">{{ $breadcrumb->title }}</a>
                    </div>
                </li>
            @else
                <li>
                    <div class="flex items-center">
                        @if(!$loop->first)
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                            </svg>
                        @endif
                        <span class="@if(!$loop->first) ml-4 @endif text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{ $breadcrumb->title }}</span>
                    </div>
                </li>
            @endif
        @endforeach

    </ol>
</nav>
@endunless
