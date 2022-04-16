@props(['grid' => 'grid-cols-2'])

<div {{ $attributes->class($grid . ' grid gap-10') }}>
    {{ $slot }}
</div>
