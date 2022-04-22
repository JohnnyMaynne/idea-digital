@props(['page'])

<x-app.section class="border-b py-20">
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>
                    {{ $page->getField('team_title') }}
                </x-app.title>
                <div class="text-gray-500 mt-3">
                    {!! $page->getField('team_description') !!}
                </div>
                <x-app.read-more :href="route('team')" class="mt-3">More info</x-app.read-more>
            </div>
            <div>
            </div>
        </x-app.grid>
        <x-app.grid class="mt-16">
            <div>
                <div class="block aspect-square transition hover:opacity-80">
                    <img class="w-full h-full object-cover" src="https://ideadigitalagency.net/storage/app/media/1.jpg" alt="">
                </div>
                <div class="font-bold text-xl mt-3">Alex Bilytskyi</div>
                <div class="mt-2 text-gray-500">Founder</div>
            </div>
            <div>
                <div class="block aspect-square transition hover:opacity-80">
                    <img class="w-full h-full object-cover" src="https://ideadigitalagency.net/storage/app/media/2.jpg" alt="">
                </div>
                <div class="font-bold text-xl mt-3">Yulia Bilytska</div>
                <div class="mt-2 text-gray-500">CEO</div>
            </div>
        </x-app.grid>
    </x-app.container>
</x-app.section>
