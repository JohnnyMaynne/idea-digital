@php
    $items = [
        ['title' => 'Seo','subtitle' => 'Advanced Communities Case Study','active' => true],
        ['title' => 'Ppc','subtitle' => 'Testelium Case Study','active' => false],
        ['title' => 'Design','subtitle' => 'Chameleon Case Study ','active' => false],
        ['title' => 'Webdev','subtitle' => 'Site of the trade mark "Katana"','active' => false],
    ];
@endphp


<x-app.section>
    <x-app.container>
        <x-works.latest-slide/>

        <div class="grid grid-cols-4 gap-10 relative">
            <x-app.slider-nav class="absolute left-0 -top-8"/>

            @foreach($items as $item)
                <x-works.latest-nav class="mt-14" :info="$item"/>
            @endforeach
        </div>

    </x-app.container>
</x-app.section>
