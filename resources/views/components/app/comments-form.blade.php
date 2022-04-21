@props(['model'])

<form x-data="comment({{ $model->id }})" @submit.prevent="send()" class="relative">

    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        <div x-show="form.comment" style="display: none;" class="sm:col-span-3">
            <label for="name" class="block text-sm font-medium text-gray-700">
                Name
            </label>
            <div class="mt-1">
                <input type="text" placeholder="Enter your name" x-model="form.name" name="name" id="name" autocomplete="given-name" class="text-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
            </div>
        </div>

        <div x-show="form.comment" style="display: none;" class="sm:col-span-3">
            <label for="email" class="block text-sm font-medium text-gray-700">
                Email address
            </label>
            <div class="mt-1">
                <input id="email" placeholder="Enter your email" x-model="form.email" name="email" type="email" autocomplete="email" class="text-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
            </div>
        </div>

        <div class="sm:col-span-6">
            <div class="border pt-4 border-gray-300 rounded-lg overflow-hidden focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                <textarea x-data="textarea" @input="resize()" x-ref="textarea" name="comment" x-model="form.comment" class="block w-full border-0 py-0 resize-none placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Write a comment..."></textarea>

                <div aria-hidden="true">
                    <div class="py-2">
                        <div class="h-9"></div>
                    </div>
                    <div class="h-px"></div>
                    <div class="py-2"></div>
                </div>
            </div>
            <div class="absolute bottom-0 inset-x-px">
                <div class="border-t border-gray-200 px-2 py-2 flex justify-end items-center space-x-3 sm:px-3">
                    <div class="flex-shrink-0">
                        <button type="submit" :disabled="!allow" :class="actionButton" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white  focus:outline-none">Comment</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



</form>
