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
                            <div class="font-medium flex items-center space-x-2 text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                                </svg>
                                <span>{{  views($item)->count() }} views</span>
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
                        <div class="prose text-gray-900 min-w-full">
                            {!!  $item->description !!}
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        @if(count($image))
            <x-app.section class="pt-0 pb-14">
                <x-app.container>
                    <img class="block w-full h-auto"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         data-src="{{ $image['src'] }}" title="{{ $image['alt'] }}" alt="{{ $image['alt'] }}">
                </x-app.container>
            </x-app.section>

        @endif


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
