@props(['invert' => false])

<div>
    <x-app.header :invert="$invert"/>

    <main class="-mt-24">
        {{ $slot }}
    </main>

    <x-app.breadcrumbs/>

    <x-app.footer/>
</div>
