@props(['page'])

<x-app.section class="border-b py-20">
    <x-app.container>
        <x-app.grid>
            <div>
                <div class="font-bold text-3xl max-w-lg">
                  {{ $page->getField('about_title') }}
                </div>
            </div>
            <div>
                <div class="prose text-gray-900 min-w-full">
                    {!! $page->getField('about_description')  !!}
                </div>
                <x-app.read-more :href="route('contacts')" class="mt-12">Contacts with us</x-app.read-more>
            </div>
        </x-app.grid>
    </x-app.container>
</x-app.section>
