@props([
    'invert' => true
])


<header class="relative z-40 {{ $invert ? 'text-white' : 'text-gray-900' }}">
    <x-app.container>
        <div class="flex items-center justify-between h-24">
            @if(request()->route()->getName() === 'home')
                <span>
                    <x-app.logo :invert="$invert"/>
                </span>
            @else
                <a href="{{ route('home') }}">
                    <x-app.logo :invert="$invert"/>
                </a>
            @endif

            <ul class="text-lg leading-none flex items-center">
                @foreach($menu as $item)
                    <li>
                        <a class="px-8 py-4 font-medium" href="{{ route($item['route']) }}">{{ $item['title'] }}</a>
                    </li>
                @endforeach
                    <li>
                        <button x-data @click="$dispatch('search')" class="px-8 py-4 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="10" cy="10" r="7"></circle>
                                <line x1="21" y1="21" x2="15" y2="15"></line>
                            </svg>
                        </button>
                    </li>
            </ul>
        </div>
    </x-app.container>
</header>
