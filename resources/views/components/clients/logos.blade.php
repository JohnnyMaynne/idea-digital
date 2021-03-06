@props([
    'clients',
    'title' => 'Our clients',
    'subtitle' => 'Here’s what our happy customers say about working with Idea Digital Agency.Here’s what our happy customers say about working with Idea Digital Agency.',
])

<x-app.section {{$attributes->class('')}}>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>{{ $title }}</x-app.title>
                <div class="text-gray-500 mt-3">{!!  $subtitle !!}</div>
            </div>
        </x-app.grid>
        <div class="mt-16">
                <div class="grid grid-cols-6">
                    @foreach($clients as $client)
                        @php
                            $image = $client->imageAsArray('cover','default')
                        @endphp
                        <div class="px-2">
                            <img
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="{{ $image['src'] }}"
                                title="{{ $image['src'] }}"
                                alt="{{ $image['src'] }}">
                        </div>
                    @endforeach
                </div>
        </div>
    </x-app.container>
</x-app.section>
