@props(['questions'])

<x-app.section>
    @if(count($questions))
        <x-app.container>
            <x-app.grid>
                <div>
                    <x-app.title>Questions and answers</x-app.title>
                    <div class="text-gray-500 mt-3">Here’s what our happy customers say about working with Idea Digital Agency.</div>
                </div>
            </x-app.grid>
            <div x-data="faq({{ $questions->first()->id}})" class="mt-16">
                <x-app.grid>
                    <div>
                        <ul role="list">
                            @foreach($questions as $question)
                                <li @click="select({{ $question->id}})" :class="open === {{ $question->id}} ? 'bg-gray-100 border-l-4' : 'border-l-4 border-transparent hover:bg-gray-50 hover:text-gray-700 text-gray-400 cursor-pointer'" class="p-4 flex transition">
                                   {{ $question->question }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        @foreach($questions as $question)
                            <div style="display: none;" x-show="open === {{ $question->id }}" class="leading-relaxed">
                                <div class="font-bold text-2xl">
                                    {{ $question->question }}
                                </div>
                                <div class="mt-2 prose min-w-full">
                                    {!!  $question->answer !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </x-app.grid>
            </div>
        </x-app.container>
    @endif
</x-app.section>
