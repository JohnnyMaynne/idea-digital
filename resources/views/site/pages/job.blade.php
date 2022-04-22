@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-about-us.hero :page="$page"/>
        <x-about-us.tabs/>
        <x-app.section class="py-20">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="text-sm text-gray-500 font-medium">Send your CV to the mail</div>
                        <a href="#" class="block mt-1 transition hover:decoration-gray-500 decoration-transparent underline decoration-1 underline-offset-4 font-bold text-3xl max-w-lg">hr@ideadigital.agency</a>
                    </div>
                    <div>
                        <div class="prose text-gray-900 min-w-full">
                            <p>At Idea Digital Agency, we specialize in promoting websites in search engines, such as Google and Bing. We love what we do! In our team we cultivate a personalized approach to every customer. Our mission is to help every business achieve marketing goals and increase revenue, outreach or brand awareness.</p>
                            <p>Our company has been working since 2017 and has successfully designed and launched over 70 websites, promoted over 250 projects!</p>
                            <p>We are united by our values, goals, team building and corporate training. We are constantly growing, developing and looking for talent.</p>
                            <p>Contact us if you want to become a part of our team, and let's get to know each other!</p>
                        </div>
                        <x-app.read-more href="mailto:hr@ideadigital.agency" class="mt-12">Send CV</x-app.read-more>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>


        @if(count($vacancies))
            <x-app.section class="border-t py-20">
                <x-app.container>
                    <x-app.grid>
                        <div>
                            <x-app.title>Open vacancies</x-app.title>
                            <div class="text-gray-500 mt-3">Here’s what our happy customers say about working with Idea Digital Agency.</div>
                        </div>
                    </x-app.grid>
                    <div class="border mt-16 overflow-hidden sm:rounded-md">
                        <ul role="list" class="divide-y divide-gray-200">
                            @foreach($vacancies as $vacancy)
                                <li>
                                    <a href="{{ route('job.show',['slug' => $vacancy->slug]) }}" class="group transition flex items-center justify-between  px-4 py-4 sm:px-6 hover:bg-gray-50">
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-gray-900 truncate">{{ $vacancy->title }}</p>
                                            </div>
                                            <div class="mt-2 sm:flex sm:justify-between">
                                                <div class="sm:flex">
                                                    <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <circle cx="12" cy="12" r="9"></circle>
                                                            <polyline points="12 7 12 12 15 15"></polyline>
                                                        </svg>                                                        {{ $vacancy->time }}
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <circle cx="12" cy="11" r="3"></circle>
                                                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                                        </svg>
                                                        {{ $vacancy->type }}
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                            <line x1="16" y1="3" x2="16" y2="7"></line>
                                                            <line x1="8" y1="3" x2="8" y2="7"></line>
                                                            <line x1="4" y1="11" x2="20" y2="11"></line>
                                                            <line x1="10" y1="16" x2="14" y2="16"></line>
                                                            <line x1="12" y1="14" x2="12" y2="18"></line>
                                                        </svg>
                                                        {{ $vacancy->created_at->format('D m,Y') }}
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 transition group-hover:text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5"></path>
                                                <line x1="10" y1="14" x2="20" y2="4"></line>
                                                <polyline points="15 4 20 4 20 9"></polyline>
                                            </svg>
                                        </button>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </x-app.container>
            </x-app.section>
        @endif

    </x-app.page>
@endsection
