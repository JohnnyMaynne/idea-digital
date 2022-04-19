@props([
    'invert' => false,
    'href' => '#'
])

<a href="{{ $href }}" {{ $attributes->class([
        '-ml-3 inline-flex items-center px-3 py-1 rounded-full space-x-2 transition no-underline',
        'text-white hover:bg-white/20' => $invert,
        'text-blue-700 hover:bg-blue-700/5' => !$invert
    ]) }}>
    <span class="font-medium">{{ $slot }}</span>
    <div class="{{ $invert ? ' bg-white' : ' bg-blue-700' }} w-4 h-4 rounded-full flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 {{ $invert ? 'text-blue-700' : 'text-white' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    </div>
</a>
