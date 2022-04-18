@extends('site.layouts.app')

@php
    $article = $item->renderBlocks();
    $content = \App\Helpers\TextHelpers::getContent($article);
    $article_content = \App\Helpers\TextHelpers::addAnchors($article);
    $image = $item->imageAsArray('cover','default',['h' => 650]);
@endphp


@section('content')
    <x-app.page invert>
        <div class="min-h-hero relative pb-20">
            <div class="pt-40 relative z-30">
                <x-app.container>
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center space-x-4">
                            <li>
                                <div class="flex items-center">
                                    <a href="#" class="transition text-sm font-medium text-white hover:text-white/70">Blog</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                    </svg>
                                    <a href="#" class="transition ml-4 text-sm font-medium text-white hover:text-white/70" aria-current="page">{{ $item->category->title }}</a>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <div class="text-7xl max-w-[900px] max-w-3xl font-bold text-white">
                        {{ $item->title }}
                    </div>

                    <div class="mt-8 flex items-center space-x-8">
                        <div class="font-medium flex items-center space-x-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            </svg>
                            <span>{{ $item->author->title }}</span>
                        </div>
                        <div class="font-medium flex items-center space-x-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <polyline points="12 7 12 12 15 15"></polyline>
                            </svg>
                            <span>{{ \App\Helpers\TextHelpers::getReadTime($article) }}</span>
                        </div>
                        <div class="font-medium flex items-center space-x-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="2"></circle>
                                <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                            </svg>
                            <span>{{  views($item)->count() }} views</span>
                        </div>
                        <div class="font-medium flex items-center space-x-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3"></path>
                                <line x1="8" y1="9" x2="16" y2="9"></line>
                                <line x1="8" y1="13" x2="14" y2="13"></line>
                            </svg>
                            <span>5 comments</span>
                        </div>
                    </div>


                </x-app.container>
            </div>
            @if(count($image))
                <img class="absolute z-10 left-0 top-0 bottom-0 right-0 w-full h-full object-cover select-none"
                     title="{{ $image['alt'] }}"
                     alt="{{ $image['alt'] }}"
                     data-src="{{ $image['src'] }}"
                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                >
            @endif

            <div class="bg-black opacity-70 absolute z-20 left-0 top-0 w-full h-full"></div>
        </div>


        <x-app.section class="py-10">
            @if(count($content))
                <div class="mx-auto w-full px-4 max-w-4xl">
                    <div class="p-4 select-none bg-gray-100 rounded-md text-sm space-y-2">
                        @foreach($content as $key => $title)
                            <a class="block" href="#heading-{{ $key + 1 }}">{{ $key + 1 }}. {{  strip_tags($title)  }}</a>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="prose prose-a:relative prose-a:z-10 prose-a:transition hover:prose-a:decoration-blue-600 prose-a:underline-offset-4 prose-a:decoration-blue-100 prose-a:decoration-2 prose-a:text-blue-600 min-w-full mt-5">
                <article x-data="hover()" @mouseover="hover($event)">
                    {!! $article_content !!}
                </article>
            </div>
        </x-app.section>


        <div class="border-t pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="relative max-w-lg mx-auto lg:max-w-7xl">
                <div>
                    <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Recent publications</h2>
                    <p class="mt-3  text-gray-500 sm:mt-4">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                </div>
                <div class="mt-8 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                    <div>
                        <div>
                            <a href="#" class="inline-block">
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800"> Article </span>
                            </a>
                        </div>
                        <a href="#" class="block mt-4">
                            <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                            <p class="mt-3 text-base text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                        </a>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Paul York</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#"> Paul York </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-03-16"> Mar 16, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 6 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#" class="inline-block">
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
                            </a>
                        </div>
                        <a href="#" class="block mt-4">
                            <p class="text-xl font-semibold text-gray-900">How to use search engine optimization to drive sales</p>
                            <p class="mt-3 text-base text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                        </a>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Dessie Ryan</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#"> Dessie Ryan </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-03-10"> Mar 10, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 4 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#" class="inline-block">
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800"> Case Study </span>
                            </a>
                        </div>
                        <a href="#" class="block mt-4">
                            <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab iure iusto fugiat commodi sequi.</p>
                        </a>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Easer Collins</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#"> Easer Collins </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-02-12"> Feb 12, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 11 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app.page>
@endsection
