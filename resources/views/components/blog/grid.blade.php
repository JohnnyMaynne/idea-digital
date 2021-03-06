@props([
    'posts',
    'title' => 'Sharing our knowledge',
    'subtitle' => 'Here’s what our happy customers say about working with Idea Digital Agency.',
])

<x-app.section>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>{{ $title }}</x-app.title>
                <div class="text-gray-500 mt-3">{!! $subtitle !!}</div>
                <x-app.read-more :href="route('blog')" class="mt-3">All articles</x-app.read-more>
            </div>
        </x-app.grid>
        <div class="mt-16">
            <x-app.grid>
               @foreach($posts as $post)
                    <x-blog.article-card  blog :post="$post"/>
               @endforeach
            </x-app.grid>
        </div>
    </x-app.container>
</x-app.section>
