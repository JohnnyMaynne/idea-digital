@props(['works'])

<x-app.section>
    <x-app.container>
        @foreach($works as $work)
            <x-works.latest-slide :work="$work"/>
        @endforeach

        <div class="relative">
            <x-app.slider-nav class="absolute left-0 -top-8"/>
        </div>

    </x-app.container>
</x-app.section>
