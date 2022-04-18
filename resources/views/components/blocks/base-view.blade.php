@props(['block'])

@php
    switch ($block->input('width')) {
        case 'wide':
            $width = '';
            break;
        case 'middle':
            $width = 'px-4 max-w-7xl';
            break;
        default:
             $width = 'px-4 max-w-4xl';
            break;
    }
@endphp

<div class="mx-auto w-full  {{ $width }}">
    <div class="{{ $block->input('row') ? 'grid grid-flow-col gap-5' : '' }}">
        {{ $slot }}
    </div>
</div>
