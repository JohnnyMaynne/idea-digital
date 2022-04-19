@if(request()->route()->getName() != 'home')
    <div class="mt-16 border-t">
       <x-app.container>
            <nav class="flex py-6" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                @if(Breadcrumbs::has())
                    @foreach (Breadcrumbs::current() as $crumbs)
                        @if ($crumbs->url() && !$loop->last)
                            <li>
                                <div class="flex items-center">
                                    @if(!$loop->first)
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                        </svg>
                                    @endif
                                    <a href="{{ $crumbs->url() }}" class=" @if(!$loop->first) ml-4 @endif text-sm font-medium text-gray-900 text-gray-700">{{ $crumbs->title() }}</a>
                                </div>
                            </li>
                        @else
                            <li>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                    </svg>
                                    <span class="ml-4 text-sm font-medium text-gray-500" aria-current="page">{{ $crumbs->title() }}</span>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @endif
                </ol>
            </nav>
        </x-app.container>
    </div>
@endif

