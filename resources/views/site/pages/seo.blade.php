@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-app.section class="pt-40">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                            Search Engine Optimization Services
                        </div>
                    </div>

                    <div class="space-y-5">
                        <div class="prose text-gray-900 min-w-full">
                            <p>We help businesses to develop flexible and comprehensive online marketing plans and strategies to outperform market competition and acquire more customers from organic search.</p>
                            <x-app.read-more>View cases</x-app.read-more>
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>


        <x-app.section class="pt-0 py-14">
            <x-app.container>
                <img src="https://unsplash.com/photos/tZc3vjPCk-Q/download?ixid=MnwxMjA3fDB8MXxjb2xsZWN0aW9ufDI2fDE4NTc4Nzl8fHx8fDJ8fDE2NTAxMTc2OTU&force=true&w=1920" alt="">
            </x-app.container>
        </x-app.section>


        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid class="gap-y-20">
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <h2>Drive more organic traffic to your website</h2>
                            <p>Our SEO agency will help you boost brand awareness and get more organic traffic, potential clients, dominate the competition in Google and Bing search, and get higher rankings with the best-in-class digital marketing services.</p>
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <h2>The most affordable way to find new customers online</h2>
                            <p>When the website gets to the top of Google search results, it inevitably gets more views, clicks, and, as a result, you get more potential clients. The demand of customers is already there, they look for products, services, and information, you just need to be there and provide what they are looking for. With our digital SEO services, you can be sure to meet with your potential customers in search results.</p>
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <h2>Online access to the corporate task manager</h2>
                            <p>We provide access to the online task manager where you can track work progress on your project, leave comments to the SEO team, participate in tasks discussion, and get the results in real-time.</p>
                        </div>
                    </div>
                    <div>
                        <div class="prose min-w-full text-gray-900">
                            <h2>Monthly performance reports</h2>
                            <p>At the end of each iteration (usually, 1 month), we deliver a detailed report with the traffic dynamics, keyword rankings, and a list of all tasks performed during 1 month. We also provide a financial report for all the expenses related to the project (SEO tools, copywriting, outreach, etc.)</p>
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>



        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-5xl">
                            Our SEO process step-by-step
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <nav aria-label="Progress">
                        <ol role="list" class="overflow-hidden">
                            <li class="relative pb-10">
                                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-blue-600" aria-hidden="true"></div>
                                <!-- Complete Step -->
                                <a href="#" class="relative flex items-start group">
        <span class="h-9 flex items-center">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-blue-600 rounded-full group-hover:bg-blue-800">
            <!-- Heroicon name: solid/check -->
            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase">Create account</span>
          <span class="text-sm text-gray-500">Vitae sed mi luctus laoreet.</span>
        </span>
                                </a>
                            </li>

                            <li class="relative pb-10">
                                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
                                <!-- Current Step -->
                                <a href="#" class="relative flex items-start group" aria-current="step">
        <span class="h-9 flex items-center" aria-hidden="true">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-blue-600 rounded-full">
            <span class="h-2.5 w-2.5 bg-blue-600 rounded-full"></span>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase text-blue-600">Profile information</span>
          <span class="text-sm text-gray-500">Cursus semper viverra facilisis et et some more.</span>
        </span>
                                </a>
                            </li>

                            <li class="relative pb-10">
                                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
                                <!-- Upcoming Step -->
                                <a href="#" class="relative flex items-start group">
        <span class="h-9 flex items-center" aria-hidden="true">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
            <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase text-gray-500">Business information</span>
          <span class="text-sm text-gray-500">Penatibus eu quis ante.</span>
        </span>
                                </a>
                            </li>

                            <li class="relative pb-10">
                                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
                                <!-- Upcoming Step -->
                                <a href="#" class="relative flex items-start group">
        <span class="h-9 flex items-center" aria-hidden="true">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
            <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase text-gray-500">Theme</span>
          <span class="text-sm text-gray-500">Faucibus nec enim leo et.</span>
        </span>
                                </a>
                            </li>

                            <li class="relative pb-10">
                                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
                                <!-- Upcoming Step -->
                                <a href="#" class="relative flex items-start group">
        <span class="h-9 flex items-center" aria-hidden="true">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
            <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase text-gray-500">Theme</span>
          <span class="text-sm text-gray-500">Faucibus nec enim leo et.</span>
        </span>
                                </a>
                            </li>

                            <li class="relative pb-10">
                                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
                                <!-- Upcoming Step -->
                                <a href="#" class="relative flex items-start group">
        <span class="h-9 flex items-center" aria-hidden="true">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
            <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase text-gray-500">Theme</span>
          <span class="text-sm text-gray-500">Faucibus nec enim leo et.</span>
        </span>
                                </a>
                            </li>

                            <li class="relative pb-10">
                                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
                                <!-- Upcoming Step -->
                                <a href="#" class="relative flex items-start group">
        <span class="h-9 flex items-center" aria-hidden="true">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
            <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase text-gray-500">Theme</span>
          <span class="text-sm text-gray-500">Faucibus nec enim leo et.</span>
        </span>
                                </a>
                            </li>

                            <li class="relative pb-10">
                                <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300" aria-hidden="true"></div>
                                <!-- Upcoming Step -->
                                <a href="#" class="relative flex items-start group">
        <span class="h-9 flex items-center" aria-hidden="true">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
            <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase text-gray-500">Theme</span>
          <span class="text-sm text-gray-500">Faucibus nec enim leo et.</span>
        </span>
                                </a>
                            </li>

                            <li class="relative">
                                <!-- Upcoming Step -->
                                <a href="#" class="relative flex items-start group">
        <span class="h-9 flex items-center" aria-hidden="true">
          <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
            <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
          </span>
        </span>
                                    <span class="ml-4 min-w-0 flex flex-col">
          <span class="text-xs font-semibold tracking-wide uppercase text-gray-500">Preview</span>
          <span class="text-sm text-gray-500">Iusto et officia maiores porro ad non quas.</span>
        </span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <div class="space-y-5">
                        <div class="prose w-min-full">
                            <h2>Analysis</h2>
                            <p>We check the website for compliance with more than 40 requirements for the Google and Bing search engines, including technical and optimization errors.</p>
                            <p>If we find technical errors on the website, we create a detailed task for developers to correct those bugs. After implementation, we check the developer’s work in accordance with the technical task.</p>
                            <p>We collect target keywords according to the website's structure to create a full extended version of the website for potential development.</p>
                            <p>We analyze competitors’ websites, their backlink profiles, and strategies they use to get higher rankings</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500 font-medium">Step 1 of 9</div>
                            <x-app.read-more>Next step</x-app.read-more>
                        </div>
                    </div>

                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="font-bold text-5xl">
                            Our best projects
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-app.section class="py-14">
            <x-app.container>
                <x-app.grid>
                    @for ($i = 0; $i < 4; $i++)
                        <x-blog.article-card/>
                    @endfor
                </x-app.grid>
            </x-app.container>
        </x-app.section>
    </x-app.page>
@endsection
