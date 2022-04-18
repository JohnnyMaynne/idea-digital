<x-blocks.base-view :block="$block">
    <div class="rounded-md bg-gradient-to-tr from-gray-100 to-gray-50 py-4 px-5 flex items-center space-x-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-gray-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M7 4a2 2 0 0 0 -2 2v3a2 3 0 0 1 -2 3a2 3 0 0 1 2 3v3a2 2 0 0 0 2 2"></path>
            <path d="M17 4a2 2 0 0 1 2 2v3a2 3 0 0 0 2 3a2 3 0 0 0 -2 3v3a2 2 0 0 1 -2 2"></path>
        </svg>
        <div class="flex-1">
            {!! $block->input('field') !!}
        </div>
    </div>
</x-blocks.base-view>
