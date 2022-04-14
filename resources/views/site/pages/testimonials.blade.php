@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-about-us.hero/>
        <x-about-us.tabs/>

        <x-app.section class="py-20">
            <x-app.container>
                <div class="max-w-3xl">
                    <x-app.title>Testimonials</x-app.title>
                    <div class="text-gray-500 mt-3">You can find the reviews of our clients about the work of our company. It's important that we publish all reviews, even if they are negative. However, we don't have bad reviews, this confirms our professionalism and expertise. We value the relationship with our customers and therefore are happy to share any feedback.</div>
                </div>

                <div class="mt-16 divide-y">
                    <x-app.grid>
                        <div class="space-y-10 grid">
                            <div class="p-5 border rounded-md">
                                <div class="flex items-center space-x-4">
                                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <div class="flex-1">
                                        <div class="text-2xl font-bold">Calvin Hawkins</div>
                                        <div class="text-gray-500 text-sm mt-1">Marketing Manager, Testelium</div>
                                    </div>
                                </div>

                                <div class="leading-relaxed mt-4 space-y-1">
                                    <div>
                                        The team made use of strong SEO strategies and campaigns and, as a result, increased site metrics. Internal stakeholders were happy with the collaborative partnership, thanks to Idea Digital Agency's quick responses, attention to detail, and focus on quality results.
                                    </div>
                                    <div>
                                        They increased the website’s visitors up to 20% per month. The team has delivered the project in a timely manner and facilitated a smooth project management process. Additionally, their rates are great from a cost-benefit perspective, and the team is solution-oriented.
                                    </div>
                                </div>
                                <x-app.read-more class="mt-3">Read case</x-app.read-more>
                            </div>
                            <div class="p-5 border rounded-md">
                                <div class="flex items-center space-x-4">
                                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <div class="flex-1">
                                        <div class="text-2xl font-bold">Calvin Hawkins</div>
                                        <div class="text-gray-500 text-sm mt-1">Marketing Manager, Testelium</div>
                                    </div>
                                </div>

                                <div class="leading-relaxed mt-4 space-y-2">
                                    <div>
                                        The team made use of strong SEO strategies and campaigns and, as a result, increased site metrics. Internal stakeholders were happy with the collaborative partnership, thanks to Idea Digital Agency's quick responses, attention to detail, and focus on quality results.
                                    </div>
                                </div>
                                <x-app.read-more class="mt-3">Read case</x-app.read-more>
                            </div>
                        </div>
                        <div class="space-y-10">
                            <div class="p-5 border rounded-md">
                                <div class="flex items-center space-x-4">
                                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <div class="flex-1">
                                        <div class="text-2xl font-bold">Calvin Hawkins</div>
                                        <div class="text-gray-500 text-sm mt-1">Marketing Manager, Testelium</div>
                                    </div>
                                </div>

                                <div class="leading-relaxed mt-4 space-y-2">
                                    <div>
                                        The team made use of strong SEO strategies and campaigns and, as a result, increased site metrics. Internal stakeholders were happy with the collaborative partnership, thanks to Idea Digital Agency's quick responses, attention to detail, and focus on quality results.
                                    </div>
                                </div>
                                <x-app.read-more class="mt-3">Read case</x-app.read-more>
                            </div>
                            <div class="p-5 border rounded-md">
                                <div class="flex items-center space-x-4">
                                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <div class="flex-1">
                                        <div class="text-2xl font-bold">Calvin Hawkins</div>
                                        <div class="text-gray-500 text-sm mt-1">Marketing Manager, Testelium</div>
                                    </div>
                                </div>

                                <div class="leading-relaxed mt-4 space-y-2">
                                    <div>
                                        The team made use of strong SEO strategies and campaigns and, as a result, increased site metrics. Internal stakeholders were happy with the collaborative partnership, thanks to Idea Digital Agency's quick responses, attention to detail, and focus on quality results.
                                    </div>
                                </div>
                                <x-app.read-more class="mt-3">Read case</x-app.read-more>
                            </div>
                        </div>

                    </x-app.grid>
                </div>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
