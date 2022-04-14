<x-app.section>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>Let's work together</x-app.title>
                <div class="text-gray-500 mt-3">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</div>
            </div>
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

                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Send request</button>

                <p class="text-base text-gray-500">
                    Looking for careers?
                    <!-- space -->
                    <a href="#" class="font-medium text-gray-700 underline">View all job openings</a>.
                </p>
            </div>
        </x-app.grid>
    </x-app.container>
</x-app.section>
