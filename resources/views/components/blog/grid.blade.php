<x-app.section>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>Sharing our knowledge</x-app.title>
                <div class="text-gray-500 mt-3">Here’s what our happy customers say about working with Idea Digital Agency.</div>
                <x-app.read-more class="mt-3">All articles</x-app.read-more>
            </div>
        </x-app.grid>
        <div class="mt-16">
            <x-app.grid>
                @for ($i = 0; $i < 4; $i++)
                    <x-blog.article-card/>
                @endfor
            </x-app.grid>
        </div>
    </x-app.container>
</x-app.section>
