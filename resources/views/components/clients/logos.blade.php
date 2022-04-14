<x-app.section {{$attributes->class('')}}>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>Our clients</x-app.title>
                <div class="text-gray-500 mt-3">Here’s what our happy customers say about working with Idea Digital Agency.</div>
            </div>
        </x-app.grid>
        <div class="mt-16">
            @for ($j = 0; $j < 3; $j++)
                <div class="grid grid-cols-6">
                @for ($i = 0; $i < 6; $i++)
                    <div class="px-8">
                        <img src="https://www.svgrepo.com/show/303143/microsoft-logo.svg" alt="">
                    </div>
                @endfor
            </div>
            @endfor
        </div>
    </x-app.container>
</x-app.section>
