@php
    $items = [
        'There is war in Ukraine at the moment, do you still provide services and guarantee tasks delivery?',
        'What are the main advantages of working with Idea Digital Agency?',
        'How do you serve international customers?',
        'What are the main advantages?',
        'What are the main advantages of working with Idea Digital Agency?'
    ];
@endphp

<x-app.section>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>Questions and answers</x-app.title>
                <div class="text-gray-500 mt-3">Here’s what our happy customers say about working with Idea Digital Agency.</div>
            </div>
        </x-app.grid>
        <div class="mt-16">
            <x-app.grid>
                <div>
                    <ul role="list">
                        @for ($i = 0; $i < 5; $i++)
                            <li class="p-4 flex rounded transition {{ $i === 0 ? 'bg-gray-100 border-l-4' : 'hover:bg-gray-50 hover:text-gray-700 text-gray-400 cursor-pointer' }}">
                                {{ $items[$i] }}
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="leading-relaxed">
                    <div class="font-bold text-2xl">There is war in Ukraine at the moment, do you still provide services and guarantee tasks delivery?</div>
                    <div class="mt-2">Indeed, Ukraine has been under attack since February 24, 2022, but our team members have full access to projects and work remotely from different cities in Ukraine and abroad. We can guarantee full responsibility for completing tasks in time and promoting your websites at a full scale.</div>
                </div>
            </x-app.grid>
        </div>
    </x-app.container>
</x-app.section>
