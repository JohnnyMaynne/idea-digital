<x-app.section>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>Let's work together</x-app.title>
                <div class="text-gray-500 mt-3">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</div>
            </div>
        </x-app.grid>
        <x-app.grid class="mt-16">
            <div class="space-y-8">
                <div class="isolate -space-y-px rounded-md shadow-sm">
                    <div class="relative border border-gray-300 rounded-md rounded-b-none p-3  focus-within:z-10 focus-within:ring-1 focus-within:ring-blue-600 focus-within:border-blue-600">
                        <label for="name" class="block text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm mt-1" placeholder="Jane Doe">
                    </div>
                    <div class="relative border border-gray-300  p-3  focus-within:z-10 focus-within:ring-1 focus-within:ring-blue-600 focus-within:border-blue-600">
                        <label for="job-title" class="block text-sm font-medium text-gray-900">Email</label>
                        <input type="text" name="job-title" id="job-title" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm mt-1" placeholder="example@example.com">
                    </div>
                    <div class="relative border border-gray-300 p-3  focus-within:z-10 focus-within:ring-1 focus-within:ring-blue-600 focus-within:border-blue-600">
                        <label for="job-title" class="block text-sm font-medium text-gray-900">Your Phone</label>
                        <input type="text" name="job-title" id="job-title" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm mt-1" placeholder="+380 00 000 00 00">
                    </div>
                    <div class="relative border border-gray-300  p-3  focus-within:z-10 focus-within:ring-1 focus-within:ring-blue-600 focus-within:border-blue-600">
                        <label for="job-title" class="block text-sm font-medium text-gray-900">Company</label>
                        <input type="text" name="job-title" id="job-title" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm mt-1" placeholder="Microsoft">
                    </div>
                    <div class="relative border border-gray-300 rounded-md rounded-t-none p-3  focus-within:z-10 focus-within:ring-1 focus-within:ring-blue-600 focus-within:border-blue-600">
                        <label for="job-title" class="block text-sm font-medium text-gray-900">Message</label>
                        <input type="text" name="job-title" id="job-title" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm mt-1" placeholder="Let's work together">
                    </div>
                </div>

                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Send request</button>
            </div>
            <div>
                <p class="text-gray-500">
                    Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.
                </p>
                <dl class="mt-8 text-base text-gray-500">
                    <div>
                        <dt class="sr-only">Postal address</dt>
                        <dd>
                            <p>742 Evergreen Terrace</p>
                            <p>Springfield, OR 12345</p>
                        </dd>
                    </div>
                    <div class="mt-6">
                        <dt class="sr-only">Phone number</dt>
                        <dd class="flex">
                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/phone" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="ml-3">
                  +1 (555) 123-4567
                </span>
                        </dd>
                    </div>
                    <div class="mt-3">
                        <dt class="sr-only">Email</dt>
                        <dd class="flex">
                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: outline/mail" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="ml-3">
                  support@example.com
                </span>
                        </dd>
                    </div>
                </dl>
                <p class="mt-6 text-base text-gray-500">
                    Looking for careers?
                    <!-- space -->
                    <a href="#" class="font-medium text-gray-700 underline">View all job openings</a>.
                </p>

            </div>
        </x-app.grid>
    </x-app.container>
</x-app.section>
