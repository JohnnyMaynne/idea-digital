@props(['grid' => 'sm:grid-cols-2'])

<div {{ $attributes->class($grid . ' grid gap-7 grid-cols-1 md:gap-10 ') }}>
    {{ $slot }}
</div>
