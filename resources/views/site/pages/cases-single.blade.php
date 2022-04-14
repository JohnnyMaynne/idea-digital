@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-app.section class="pt-40">
            <x-app.container>
                <x-app.grid>
                    <div>

                        <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                            Testelium Case Study
                        </div>

                        <div class="mt-8 flex items-center space-x-8">
                            <div class="font-medium flex items-center space-x-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                </svg>
                                <span>Brad Pitt</span>
                            </div>
                            <div class="font-medium flex items-center space-x-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="2"></circle>
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                                </svg>
                                <span>125 views</span>
                            </div>
                            <div class="font-medium flex items-center space-x-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3"></path>
                                    <line x1="8" y1="9" x2="16" y2="9"></line>
                                    <line x1="8" y1="13" x2="14" y2="13"></line>
                                </svg>
                                <span>5 comments</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="prose text-gray-900 min-w-full">
                            <p>Our team provides professional SEO services to increase online visibility and qualified leads to your business. We foster firm relationships with clients and make it our priority to understand their vision and goals so that we can put our vast experience and expertise to use</p>
                            <p>Idea Digital Agency team inspires trust in our clients by delivering high-quality work and achieving tangible SEO results. Behind each and every one of our SEO promotion campaigns is a dedicated friendly team of passionate individuals, committed to achieving great results in SERP. </p>
                            <p>Our main goal is to help you measure, understand, and maximize your online potential. Our diverse client portfolio includes companies operating in SaaS, Financial Services, eCommerce, Manufacturing, etc.</p>
                        </div>
                    </div>
                </x-app.grid>
            </x-app.container>
        </x-app.section>
        <x-app.section class="pt-0">
            <x-app.container>
                <img class="block w-full h-auto" src="https://ideadigitalagency.net/storage/app/uploads/public/622/9bf/332/6229bf332eb5a908487845.png" alt="">
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
