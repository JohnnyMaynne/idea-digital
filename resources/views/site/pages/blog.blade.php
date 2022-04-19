@extends('site.layouts.app')

@section('content')
    <x-app.page>
        <div>
            <div class="pt-40 pb-20 relative z-30">
                <x-app.container>
                    <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                        {{ $category->title ?? 'Blog' }}
                    </div>
                </x-app.container>
            </div>
        </div>


        <div class="border-b">
            <x-app.container>
                <ul class="flex items-center space-x-6">
                    <li>
                        <a class="py-4 block font-medium transition {{ request()->route()->getName() === 'blog' ? 'border-b border-gray-900 cursor-default' : 'border-transparent hover:opacity-50' }}" href="{{ route('blog') }}">All articles</a>
                    </li>
                    @foreach($categories as $category)
                        <li>
                            <a class="py-4 block font-medium transition {{ request()->route('slug') === $category->slug ? 'border-b border-gray-900 cursor-default' : 'border-transparent hover:opacity-50' }}" href="{{ route('blog.category',['slug' => $category->slug]) }}">{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </x-app.container>
        </div>

        <x-app.section class="py-20">
            <x-app.container>
                <x-app.grid>
                    @foreach($posts as $post)
                        <x-blog.article-card :post="$post"/>
                    @endforeach
                </x-app.grid>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
