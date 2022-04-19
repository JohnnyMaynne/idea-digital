@props(['model'])

@php
   $rating = $model->averageRating ?? 0
@endphp

<div x-data="rating({{ $rating }}, {{ $model->id }}, {{ $model->ratings()->count() }})" class="flex items-center space-x-3 text-4xl font-medium">
    <div class="flex flex-col items-end">
        <div class="flex items-center space-x-2 text-sm text-gray-700">
            <div>
                <span>Votes: </span>
                <span x-text="count"></span>
            </div>
        </div>

        <div class="flex">
            <template x-for="i in 5" :key="i">
                <button type="button" :class="{ 'mr-1': i < 5 }" @click="handler(i)">
                    <svg class="block h-5 w-5" :class="[ value >= i ? 'text-yellow-500': 'text-gray-200']" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                </button>
            </template>
        </div>
    </div>
    <div x-text="formatRating"></div>
</div>

