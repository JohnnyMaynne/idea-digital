@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <div class="pt-40 pb-20 relative z-30 border-b">
            <x-app.container>
                <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                    {{ $vacancy->title }}
                </div>
            </x-app.container>
         </div>

        <x-app.section class="py-20">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-3xl max-w-lg">
                            Required requirements and skills for the job
                        </div>
                        <div class="mt-4 sm:flex sm:justify-between">
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
                    <div>
                        <div class="prose text-gray-900 min-w-full">
                            {!! $vacancy->description !!}
                        </div>
                        <x-app.read-more href="mailto:hr@ideadigital.agency" class="mt-12">Contacts with us</x-app.read-more>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
