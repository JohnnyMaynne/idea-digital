@props(['href' => false])

@php
    $class = [
        'text-5xl font-bold transition',
        'hover:decoration-gray-500 decoration-transparent underline decoration-1 underline-offset-4' => $href
    ];
@endphp


@if($href)
    <a {{ $attributes->class($class) }} href="{{ $href }}">{{ $slot }}</a>
@else
    <div {{ $attributes->class($class) }}>{{ $slot }}</div>
@endif
