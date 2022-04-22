@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-app.section class="pt-40">
            <x-app.container>
                <x-app.grid>
                    <div>
                        <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                            {{ $page->title }}
                        </div>
                    </div>

                    <div class="space-y-5">
                        <div class="prose text-gray-900 min-w-full">
                            {!! $page->description  !!}
                            <x-app.read-more :href="route('cases')">View cases</x-app.read-more>
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
                <x-app.grid x-data="steps({{ json_encode($page->steps) }})">
                    <nav aria-label="Progress">
                        <ol role="list" class="overflow-hidden">
                            <template x-for="(step,index) in steps" :key="index">
                                <li class="relative pb-10">
                                    <div x-show="index !== steps.length - 1" :class="[index < current ? 'bg-blue-600' : ' bg-gray-300']" class="-ml-px transition absolute mt-0.5 top-4 left-4 w-0.5 h-full" aria-hidden="true"></div>
                                    <a href="#" @click.prevent="select(index)" class="relative flex items-start group">
                                        <span class="h-9 flex items-center" aria-hidden="true">
                                              <span :class="[index <= current ? 'border-blue-600' : ' group-hover:border-gray-400']" class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full">
                                                <span :class="[index <= current ? 'bg-blue-600' : 'bg-gray-400 group-hover:bg-gray-300']"  class="h-2.5 w-2.5  rounded-full"></span>
                                              </span>
                                        </span>

                                        <span class="ml-4 min-w-0 flex flex-col">
                                          <span :class="[index <= current ? 'text-gray-900' : 'text-gray-500']" class="transition text-xs font-semibold tracking-wide uppercase" x-text="step.title"></span>
                                          <span :class="[index <= current ? 'text-gray-900' : 'text-gray-500']" class="transition text-sm" x-text="step.subtitle"></span>
                                        </span>
                                    </a>
                                </li>
                            </template>
                        </ol>
                    </nav>
                    <div class="space-y-5">
                        <div class="prose w-min-full" x-html="steps[current].text">
                        </div>
                        <div class="flex items-center h-12 justify-between">
                            <div class="text-sm text-gray-500 font-medium">Step <span x-text="current + 1"></span> of <span x-text="steps.length">9</span></div>
                            <div>
                                <x-app.read-more x-show="current + 1 !== steps.length" @click.prevent="select(current+1)">Next step</x-app.read-more>
                            </div>
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
                    @foreach($page->getRelated('works') as $post)
                        <x-blog.article-card :post="$post"/>
                    @endforeach
                </x-app.grid>
            </x-app.container>
        </x-app.section>
    </x-app.page>
@endsection
