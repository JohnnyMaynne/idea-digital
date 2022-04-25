@props([
    'title' => 'Let\'s work together',
    'subtitle' => 'Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.',
])


<x-app.section>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>{{ $title }}</x-app.title>
                <div class="text-gray-500 mt-3">{!! $subtitle !!}</div>
            </div>
        </x-app.grid>
       <div class="mt-16">
           <x-app.feedback/>
       </div>
    </x-app.container>
</x-app.section>
