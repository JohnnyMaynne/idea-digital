@extends('site.layouts.app')

@php
    $image = $item->imageAsArray('cover','default',['w' => 1400])
@endphp

@section('content')
    <x-app.page>
        <x-app.section class="pt-40">
            <x-app.container>
                <x-app.grid>
                    <div>

                        <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                            {{ $item->title }}
                        </div>

                        <div class="mt-8 flex items-center space-x-8">
                            <a href="{{ route('author',['slug' => $item->author->slug]) }}" class="font-medium flex items-center space-x-2 text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                </svg>
                                <span>{{ $item->author->title }}</span>
                            </a>
                            <div class="font-medium flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                                </svg>
                                <span><span id="views_count">{{ views($item)->count() }}</span> views</span>
                            </div>
                            <div class="font-medium flex items-center space-x-2 text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3"></path>
                                    <line x1="8" y1="9" x2="16" y2="9"></line>
                                    <line x1="8" y1="13" x2="14" y2="13"></line>
                                </svg>
                                <span>{{ count($item->comments) }} comments</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="prose {{config('ideadigital.editor')}} text-gray-900 min-w-full">
                            {!!  $item->description !!}
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section>
            <x-app.container>
                <div class="flex items-center justify-between mb-10">
                    <div class="font-bold text-3xl max-w-lg">Results of our clients</div>
                    <x-app.slider-nav/>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <div class="flex flex-col bg-gradient-to-bl from-gray-100 to-gray-50">
                        <div class="p-5 space-y-4">
                            <div class="flex space-x-6 pb-5 border-b -mx-5 px-5">
                                <div>
                                    <div class="font-bold text-blue-600">↑492%</div>
                                    <div class="text-xs text-gray-500">Growth of organic</div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold">
                                Daily Medical
                            </div>
                            <div class="prose {{ config('ideadigital.editor') }}">
                                <p>Behind the results robit bachimo positive dynamics.</p>
                                <p>The visibility of the site has grown significantly. The number of applications and the number of applications for the site with organic Google has increased by 2.5 times and may increase (+ 15-20% of the increase).</p>
                                <p>From the cob, the number of key words increased by over 10 thousand.</p>
                                <p>Organic traffic of viruses in 5 times, from 1300 to 6400 cases per month from organic species. Organic channel to become over 60% of the traffic to the site.</p>
                            </div>
                            <x-app.read-more>View case</x-app.read-more>
                        </div>
                    </div>
                    <div class="flex flex-col bg-gradient-to-bl from-gray-100 to-gray-50">
                        <div class="p-5 space-y-4">
                            <div class="flex space-x-6 pb-5 border-b -mx-5 px-5">
                                <div>
                                    <div class="font-bold text-blue-600">↑304%</div>
                                    <div class="text-xs text-gray-500">Growth of organic</div>
                                </div>
                                <div>
                                    <div class="font-bold text-blue-600">↑207%</div>
                                    <div class="text-xs text-gray-500">Increased amount</div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold">Advanced Communities</div>
                            <div class="prose {{ config('ideadigital.editor') }}">
                                <p>Advanced Communities is a retailer of software products based on Experience Cloud for Salesforce.The total number of coristuvaches from organic matter grew by <strong>318%</strong> .</p>
                                <p>The number of new recruits increased by <strong>304%</strong>. The depth of the revision of the sides increased by <strong>65.2%</strong> .</p>
                                <p>Conversion rate increased by 207%. The number of achieved goals on the site increased by <strong>1,185.71%</strong> .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </x-app.container>
        </x-app.section>

        <div class="relative bg-indigo-800">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
                <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Get in touch</h1>
                <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Mattis amet hendrerit dolor, quisque lorem pharetra. Pellentesque lacus nisi urna, arcu sociis eu. Orci vel lectus nisl eget eget ut consectetur. Sit justo viverra non adipisicing elit distinctio.</p>
            </div>
        </div>


        <x-app.section>
            <x-app.container>
                <div class="mb-10">
                    <div class="font-bold text-3xl max-w-lg">Stages of SEO-promotion</div>
                </div>

                <div>
                    <button class="group w-full flex items-center justify-between space-x-4 p-4 hover:bg-gray-100 transition">
                        <div class="space-x-5 flex items-center flex-1">
                            <div class="w-16">
                                <div class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center">1</div>
                            </div>
                            <div class="text-xl flex-1 text-left">Conducting a technical analysis of the site</div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="p-4 space-x-5 flex items-center flex-1">
                        <div class="w-16"></div>
                        <div class="prose flex-1 w-full {{ config('ideadigital.editor') }}">
                            <p>Презентуємо щомісячний звіт клієнту, обговорюємо його особисто або через Zoom.</p>
                        </div>
                    </div>
                </div>

            </x-app.container>
        </x-app.section>

        <div class="relative bg-gray-900">
            <div class="h-80 w-full absolute bottom-0 xl:inset-0 xl:h-full">
                <div class="h-full w-full xl:grid xl:grid-cols-2">
                    <div class="h-full xl:relative xl:col-start-2">
                        <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
                        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
                    </div>
                </div>
            </div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8">
                <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
                    <p class="mt-3 text-3xl font-extrabold text-white">Get actionable data that will help grow your business</p>
                    <p class="mt-5 text-lg text-gray-300">Rhoncus sagittis risus arcu erat lectus bibendum. Ut in adipiscing quis in viverra tristique sem. Ornare feugiat viverra eleifend fusce orci in quis amet. Sit in et vitae tortor, massa. Dapibus laoreet amet lacus nibh integer quis. Eu vulputate diam sit tellus quis at.</p>
                    <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
                        <p>
                            <span class="block text-2xl font-bold text-white">8K+</span>
                            <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Companies</span> use laoreet amet lacus nibh integer quis.</span>
                        </p>

                        <p>
                            <span class="block text-2xl font-bold text-white">25K+</span>
                            <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Countries around the globe</span> lacus nibh integer quis.</span>
                        </p>

                        <p>
                            <span class="block text-2xl font-bold text-white">98%</span>
                            <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Customer satisfaction</span> laoreet amet lacus nibh integer quis.</span>
                        </p>

                        <p>
                            <span class="block text-2xl font-bold text-white">12M+</span>
                            <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Issues resolved</span> lacus nibh integer quis.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <x-app.section>
            <x-app.container>
                <div class="mb-10">
                    <div class="font-bold text-3xl max-w-lg">Other services</div>
                </div>

                <div class="grid gap-10 grid-cols-3">
                    <a href="#" class="bg-gray-100 p-5 space-y-2 transition hover:bg-gray-50">
                        <div class="text-2xl font-bold">SEO site audit</div>
                        <div class="prose-sm {{ config('ideadigital.editor') }}">
                            <p>The visibility of the site has grown significantly. The number of applications and the number of applications for the site with organic Google has increased by 2.5 times and may increase (+ 15-20% of the increase).</p>
                        </div>
                    </a>
                    <a href="#" class="bg-gray-100 p-5 space-y-2 transition hover:bg-gray-50">
                        <div class="text-2xl font-bold">Site preparation before launch</div>
                        <div class="prose-sm {{ config('ideadigital.editor') }}">
                            <p>The site is a business tool, and it should not only be visually pleasing and user-friendly, but also search engine optimized.</p>
                        </div>
                    </a>
                    <a href="#" class="bg-gray-100 p-5 space-y-2 transition hover:bg-gray-50">
                        <div class="text-2xl font-bold">Collection of the semantic core of the site</div>
                        <div class="prose-sm {{ config('ideadigital.editor') }}">
                            <p>Semantic kernel collection services are sought after by users who are already actively involved in SEO-promotion of their site or vice versa, just thinking about this promotion.</p>
                        </div>
                    </a>
                </div>

            </x-app.container>
        </x-app.section>

        <div class="bg-gray-100">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold sm:text-4xl">Trusted by developers from over 80 planets</h2>
                    <p class="mt-3 text-xl sm:mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.</p>
                </div>
                <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
                    <div class="flex flex-col">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium">Pepperoni</dt>
                        <dd class="order-1 text-5xl font-extrabold">100%</dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium">Delivery</dt>
                        <dd class="order-1 text-5xl font-extrabold">24/7</dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium">Calories</dt>
                        <dd class="order-1 text-5xl font-extrabold">100k+</dd>
                    </div>
                </dl>
            </div>
        </div>

        <x-app.section>
            <x-app.container>
                <div class="max-w-4xl space-y-4">
                    <div class="text-5xl font-bold">"The social and economic benefits of accelerating clean energy transitions are huge, and the costs of inaction are immense."</div>
                    <div class="flex items-center space-x-3">
                        <img class="h-10 w-10 rounded-full" src="https://idea-digital.test/img/2c30fc7e-8372-4aab-9b6f-47914194eaa9/6012d3bed3273569148204.jpeg?fm=jpg&amp;q=100&amp;fit=max&amp;crop=620%2C620%2C0%2C0&amp;w=150" title="qweqwe" alt="qweqwe">

                        <div class="flex-1">
                            <div class="text-sm ">Dmytro Poshcheniy</div>
                            <div class="text-gray-500 text-sm">Co-founder Chameleon</div>
                        </div>
                    </div>
                </div>
            </x-app.container>
        </x-app.section>

        <x-app.section>
            <x-app.container>
               <x-app.grid>
                    <div>
                        <div class="text-3xl font-bold">Tools with some practical</div>

                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-5 md:grid-cols-3 lg:mt-0 lg:grid-cols-4">
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Workcation">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                        </div>
                        <div class="col-span-1 flex justify-center p-2">
                            <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
                        </div>
                    </div>
               </x-app.grid>
            </x-app.container>
        </x-app.section>

       <x-app.section>
           <x-app.container>
               <h2 class="text-3xl font-bold">Frequently asked questions</h2>
               <div class="mt-6 pt-10">
                   <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-12">
                       <div>
                           <dt class="text-lg leading-6 font-medium text-gray-900">What&#039;s the best thing about Switzerland?</dt>
                           <dd class="mt-2 text-base text-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                       </div>

                       <!-- More questions... -->
                   </dl>
               </div>
           </x-app.container>
       </x-app.section>


        <x-app.section class="bg-gray-50">
            <x-app.container>
                <div class="flex flex-col items-center text-center">
                    <div class="text-3xl font-bold">
                        <span class="block">Ready to dive in?</span>
                        <span class="block">Start your free trial today.</span>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <div class="inline-flex rounded-md shadow">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
                        </div>
                        <div class="ml-3 inline-flex">
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200"> Learn more </a>
                        </div>
                    </div>
                </div>
            </x-app.container>
        </x-app.section>

        <x-app.section>
            <x-app.container>
                <div class="pb-16 xl:flex xl:items-center xl:justify-between space-x-10">
                    <div class="flex-1">
                        <h1 class="text-3xl font-bold">
                            <span class="text-gray-900">Quality of SEO promotion from</span>
                            <span class="text-indigo-600">$2000</span>
                        </h1>
                        <p class="mt-5 text-gray-500 max-w-4xl">Tell us what goals you want to reach for the results of the project, and we are preparing an analysis of your site, the plan is working on that budget, which is necessary for you.</p>
                    </div>
                    <a href="#" class="mt-8 w-full bg-indigo-600 border border-transparent px-5 py-3 inline-flex items-center justify-center text-base font-medium rounded-md text-white hover:bg-indigo-700 sm:mt-10 sm:w-auto xl:mt-0">Get request</a>
                </div>
            </x-app.container>
        </x-app.section>


        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-3xl max-w-lg">
                            How has the project grown in organic search in 1 year and 3 months?
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <ul><li><p><span >The number of users from organic search has increased by </span><strong><span >748%.</span></strong></p></li><li><p><span >The number of new users from organic search has increased by </span><strong><span >896%.</span></strong></p></li><li><p><span >Users have started viewing </span><strong><span >25%</span></strong><span > more pages per session.</span></p></li></ul>                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <img class="w-full h-auto" src="https://ideadigitalagency.net/storage/app/media/Testelium%20GA%20Organic%20traffic.png" alt="">
            </x-app.container>
        </x-app.section>


        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-3xl max-w-lg">
                            According to the Google Search Console Performance Report, we have found the following
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <ul><li><p><span >The number of clicks in organic search has increased many times.</span></p></li><li><p><span >The number of impressions has increased significantly since the site has been found by a larger number of targeted queries.</span></p></li></ul>
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <img class="w-full h-auto" src="https://ideadigitalagency.net/storage/app/media/Cases/Testelium/Screenshot_1.png" alt="">
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-3xl max-w-lg">
                            Growth dynamics over the past 12 months
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <p><span >Over the past 12 months, the largest number of goals has been achieved from organic search (form submission on the website).</span></p>
                            <p><span >Over the past 3 months, 83% of keywords have increased their rankings. Most of them are already in the TOP 1-5 positions and have continued to grow (data for the US market).</span></p>
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <img class="object-cover" src="https://ideadigitalagency.net/storage/app/media/Cases/Testelium/7.png">
                    </div>
                    <div>
                        <img class="object-cover" src="https://ideadigitalagency.net/storage/app/media/Cases/Testelium/8.png">
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-3xl max-w-lg">
                            Backlink strategy
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <p><span >The main source of competitors' links is guest posting backlinks from well-rated websites with good traffic. Affiliate links, which are links from review articles, also work well in this niche. Based on the analysis, a strategy has been developed for obtaining high-quality and diverse links from thematic and near-thematic sites.</span></p>
                            <p><span >With SEO promotion of the Testelium website for the US and UK market, we needed a good backlink strategy to outperform the competition. For promotion, high-quality thematic platforms have been selected and articles have been written. When building a backlink profile, quality was our main priority, not quantity. In the promotion, we have also used topical forums and Q&amp;A platforms while trying to reach the target audience to gain referral traffic. We have also been submitting the company to local catalogs and business directories in the USA and&nbsp; Europe regularly.</span></p>
                            <p><span >The backlinks have been mainly directed to the main page, and to the Integration, Pricing, Features pages, to blog articles. Both anchor and non-anchor links have been part of the strategy so that the backlink profile looked as natural as possible.</span></p>
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <img class="w-full h-auto" src="https://ideadigitalagency.net/storage/app/media/Cases/Testelium/Screenshot_4.png" alt="">
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-3xl max-w-lg">
                            Keyword research
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <p><span >Since the target audience of the client is a large business providing communication services (SMS), we have decided to target keywords even with a volume of 1-5 searches per month.&nbsp;</span></p>
                            <p><span >This has made it possible to capture the most conversion requests since one of the goals has been to increase the number of conversions on the website from the organic traffic channel.</span></p>
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="pt-0 py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-3xl max-w-lg">
                            Conclusion
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <p><span >This project was&nbsp; very niche oriented since it only worked with the B2B sector and provided only one type of service which wasSMS delivery testing, or SMS routes testing, which provided a convenient platform with detailed reports for SMS deliverability analysis for the enterprise segment.&nbsp;</span></p>
                            <p><span >Therefore, the rapid growth of traffic has not been possible. The company's reputation and many years of experience have played a&nbsp; significant role in this project. As part of search engine optimization, we have done not only on-page optimization but also worked on brand awareness and the company’s reputation. We have been trying to find possibilities of reaching out to major market players in order to start partnerships and sell the company's services.</span></p>
                            <p><span >Our goal has been to increase traffic to the website for the target keywords and increase the number of organic conversions to get to the top 1-5 positions for the most relevant converting search queries which we have successfully achieved in 12 months. An integrated approach to SEO promotion has given us excellent results even in such a niche-focused project. The Testelium project has shown that if you build a strategy correctly, “immerse” into the client’s business, target audience, and go deeper into online marketing (not limited to website optimization), you can achieve all your goals and become a niche leader.</span></p>
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
