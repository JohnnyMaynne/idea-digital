@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-about-us.hero/>
        <x-about-us.tabs/>

        <x-app.section class="py-20">
            <x-app.container>
                <div class="max-w-3xl">
                    <x-app.title>Our team</x-app.title>
                    <div class="text-gray-500 mt-3">idea Digital Agency team builds your website strength and rankings with sustainable SEO services that bring relevant leads to your site. We focus on ethical and sustainable SEO techniques to develop your site profile. Let SEO data work hard so you can stand out from the crowd and delight your customers!</div>
                </div>

                <ul role="list" class="mt-20 text-center grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:gap-x-8 lg:gap-y-12 xl:grid-cols-5">

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Michael Foster</h3>
                                    <p class="text-gray-500">Co-Founder / CTO</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Dries Vincent</h3>
                                    <p class="text-gray-500">Manager, Business Relations</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Lindsay Walton</h3>
                                    <p class="text-gray-500">Front-end Developer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Courtney Henry</h3>
                                    <p class="text-gray-500">Designer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Tom Cook</h3>
                                    <p class="text-gray-500">Director, Product Development</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Whitney Francis</h3>
                                    <p class="text-gray-500">Copywriter</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Leonard Krasner</h3>
                                    <p class="text-gray-500">Senior Designer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Floyd Miles</h3>
                                    <p class="text-gray-500">Principal Designer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Emily Selman</h3>
                                    <p class="text-gray-500">VP, User Experience</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Kristin Watson</h3>
                                    <p class="text-gray-500">VP, Human Resources</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1505840717430-882ce147ef2d?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Emma Dorsey</h3>
                                    <p class="text-gray-500">Senior Front-end Developer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Alicia Bell</h3>
                                    <p class="text-gray-500">Junior Copywriter</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1507101105822-7472b28e22ac?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Jenny Wilson</h3>
                                    <p class="text-gray-500">Studio Artist</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Anna Roberts</h3>
                                    <p class="text-gray-500">Partner, Creative</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Benjamin Russel</h3>
                                    <p class="text-gray-500">Director, Print Operations</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1517070208541-6ddc4d3efbcb?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Jeffrey Webb</h3>
                                    <p class="text-gray-500">Senior Art Director</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Kathryn Murphy</h3>
                                    <p class="text-gray-500">Associate Creative Director</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1513910367299-bce8d8a0ebf6?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Lawrence Hunter</h3>
                                    <p class="text-gray-500">Content Specialist</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1506980595904-70325b7fdd90?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Yvette Armstrong</h3>
                                    <p class="text-gray-500">Studio Artist</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1501031170107-cfd33f0cbdcc?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Angela Fisher</h3>
                                    <p class="text-gray-500">Chief Strategy Officer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Blake Reid</h3>
                                    <p class="text-gray-500">Account Coordinator</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Hector Gibbons</h3>
                                    <p class="text-gray-500">VP, Marketing</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Fabricio Mendes</h3>
                                    <p class="text-gray-500">Senior Art Director</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Jillian Steward</h3>
                                    <p class="text-gray-500">Designer</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="space-y-4">
                            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3>Chelsea Hagon</h3>
                                    <p class="text-gray-500">Human Resources Manager</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>


            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
