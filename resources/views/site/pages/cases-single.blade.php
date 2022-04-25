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

        <x-app.section class="relative">
            <x-app.container class="relative z-30 text-white">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold sm:text-4xl">Trusted by developers from over 80 planets</h2>
                    <p class="mt-3 sm:mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.</p>
                </div>
                <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
                    <div class="flex flex-col">
                        <dt class="order-2 mt-2 leading-6 font-medium">Pepperoni</dt>
                        <dd class="order-1 text-5xl font-extrabold">100%</dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 leading-6 font-medium">Delivery</dt>
                        <dd class="order-1 text-5xl font-extrabold">24/7</dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 leading-6 font-medium">Calories</dt>
                        <dd class="order-1 text-5xl font-extrabold">100k+</dd>
                    </div>
                </dl>
            </x-app.container>
            <div class="z-20 absolute h-full w-full left-0 top-0 opacity-90 bg-gradient-to-bl from-gray-800 to-gray-900"></div>
            <img class="z-10 absolute h-full w-full left-0 top-0 object-cover grayscale" src="https://unsplash.com/photos/-uHVRvDr7pg/download?ixid=MnwxMjA3fDB8MXxzZWFyY2h8MTZ8fHRlYW18ZW58MHx8fHwxNjUwNzc4NTEz&force=true&w=1920">
        </x-app.section>


        <x-app.section>
            <x-app.container>
                <div class="max-w-4xl">
                    <div class="text-5xl font-bold">"The social and economic benefits of accelerating clean energy transitions are huge, and the costs of inaction are immense."</div>
                    <div class="flex items-center space-x-3 mt-4">
                        <img class="h-10 w-10 rounded-full" src="https://idea-digital.test/img/2c30fc7e-8372-4aab-9b6f-47914194eaa9/6012d3bed3273569148204.jpeg?fm=jpg&amp;q=100&amp;fit=max&amp;crop=620%2C620%2C0%2C0&amp;w=150" title="qweqwe" alt="qweqwe">

                        <div class="flex-1">
                            <div class="text-sm ">Dmytro Poshcheniy</div>
                            <div class="text-gray-500 text-sm">Co-founder Chameleon</div>
                        </div>
                    </div>
                    <x-app.read-more class="mt-12">Read case</x-app.read-more>

                </div>
            </x-app.container>
        </x-app.section>

        <x-app.section>
            <x-app.container>
                <div class="mb-10">
                    <div class="text-3xl font-bold">Tools with some practical</div>
                </div>
                <div class="grid grid-cols-2 gap-10 md:grid-cols-3 lg:mt-0 lg:grid-cols-4">
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Workcation">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
                    </div>
                </div>
            </x-app.container>
        </x-app.section>

        <x-app.section>
            <x-app.container>
                <div class="bg-gray-900 rounded-lg shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4">
                    <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                        <div class="lg:self-center">
                            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                                <span class="block">Ready to dive in?</span>
                                <span class="block">Start your free trial today.</span>
                            </h2>
                            <p class="mt-4 text-gray-400">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
                            <a href="#" class="mt-8 bg-white border border-transparent rounded-md shadow px-5 py-3 inline-flex items-center text-base font-medium">Contact with us</a>
                        </div>
                    </div>
                    <div class="-mt-6 aspect-w-5 aspect-h-3 md:aspect-w-2 md:aspect-h-1">
                        <img class="transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20" src="https://unsplash.com/photos/XkKCui44iM0/download?force=true&w=1920" alt="App screenshot">
                    </div>
                </div>
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
                       <div>
                           <dt class="text-lg leading-6 font-medium text-gray-900">What&#039;s the best thing about Switzerland?</dt>
                           <dd class="mt-2 text-base text-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                       </div>
                       <div>
                           <dt class="text-lg leading-6 font-medium text-gray-900">What&#039;s the best thing about Switzerland?</dt>
                           <dd class="mt-2 text-base text-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                       </div>
                       <div>
                           <dt class="text-lg leading-6 font-medium text-gray-900">What&#039;s the best thing about Switzerland?</dt>
                           <dd class="mt-2 text-base text-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                       </div>
                       <div>
                           <dt class="text-lg leading-6 font-medium text-gray-900">What&#039;s the best thing about Switzerland?</dt>
                           <dd class="mt-2 text-base text-gray-500">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
                       </div>
                   </dl>
               </div>
           </x-app.container>
       </x-app.section>


        <x-app.section class="relative bg-indigo-700">
            <x-app.container>
                <h2 class="text-3xl font-extrabold text-white tracking-tight">Inbox support built for efficiency</h2>
                <p class="mt-4 max-w-3xl text-lg text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis. Blandit aliquam sit nisl euismod mattis in.</p>
                <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
                            <div>
                                <div>
          <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
            <!-- Heroicon name: outline/inbox -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
          </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Unlimited Inboxes</h3>
                                    <p class="mt-2 text-base text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                                </div>
                            </div>

                            <div>
                                <div>
          <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
            <!-- Heroicon name: outline/users -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Manage Team Members</h3>
                                    <p class="mt-2 text-base text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                                </div>
                            </div>

                            <div>
                                <div>
          <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
            <!-- Heroicon name: outline/trash -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
          </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Spam Report</h3>
                                    <p class="mt-2 text-base text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                                </div>
                            </div>

                            <div>
                                <div>
          <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
            <!-- Heroicon name: outline/pencil-alt -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
          </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Compose in Markdown</h3>
                                    <p class="mt-2 text-base text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                                </div>
                            </div>

                            <div>
                                <div>
          <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
            <!-- Heroicon name: outline/document-report -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
          </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Team Reporting</h3>
                                    <p class="mt-2 text-base text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                                </div>
                            </div>

                            <div>
                                <div>
          <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
            <!-- Heroicon name: outline/reply -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
            </svg>
          </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Saved Replies</h3>
                                    <p class="mt-2 text-base text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                                </div>
                            </div>

                            <div>
                                <div>
          <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
            <!-- Heroicon name: outline/chat-alt -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
          </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Email Commenting</h3>
                                    <p class="mt-2 text-base text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                                </div>
                            </div>

                            <div>
                                <div>
          <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
            <!-- Heroicon name: outline/heart -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Connect with Customers</h3>
                                    <p class="mt-2 text-base text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                                </div>
                            </div>
                        </div>
            </x-app.container>
        </x-app.section>


        <x-app.section class="relative z-20 bg-gray-50">
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

        <x-app.section class="bg-gray-50">
            <div class="relative">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                    <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                        <div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Stay on top of customer support</h2>
                                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
                            </div>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6">
                            <blockquote>
                                <div>
                                    <p class="text-base text-gray-500">&ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;</p>
                                </div>
                                <footer class="mt-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                        </div>
                                        <div class="text-base font-medium text-gray-700">Marcia Hill, Digital Marketing Manager</div>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0">
                        <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                            <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-1.jpg" alt="Inbox user interface">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-24">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                    <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                        <div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Better understand your customers</h2>
                                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                        <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                            <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-2.jpg" alt="Customer profile user interface">
                        </div>
                    </div>
                </div>
            </div>
        </x-app.section>

        <x-app.section>
            <x-app.container>
                <div class="px-6 py-6 bg-indigo-700 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
                    <div class="xl:w-0 xl:flex-1">
                        <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Want product news and updates?</h2>
                        <p class="mt-3 max-w-3xl text-lg leading-6 text-indigo-200">Sign up for our newsletter to stay up to date.</p>
                    </div>
                    <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                        <form class="sm:flex">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email-address" type="email" autocomplete="email" required class="w-full border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white rounded-md" placeholder="Enter your email">
                            <button type="submit" class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent shadow text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">Notify me</button>
                        </form>
                        <p class="mt-3 text-sm text-indigo-200">
                            We care about the protection of your data. Read our
                            <a href="#" class="text-white font-medium underline"> Privacy Policy. </a>
                        </p>
                    </div>
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
