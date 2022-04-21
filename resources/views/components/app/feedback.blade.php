<div class="space-x-10 flex">
    <form x-data="feedback()" @submit.prevent="handler()" class="max-w-3xl w-full grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
        <div>
            <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
            <div class="mt-1">
                <input required x-model="form.first_name" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full border-0 border-b border-gray-300 bg-gray-50 focus:border-blue-600 focus:ring-0 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
            <div class="mt-1">
                <input required x-model="form.last_name" type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full border-0 border-b border-gray-300 bg-gray-50 focus:border-blue-600 focus:ring-0 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
                <input required x-model="form.email" id="email" name="email" type="email" autocomplete="email" class="block w-full border-0 border-b border-gray-300 bg-gray-50 focus:border-blue-600 focus:ring-0 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
            <div class="mt-1">
                <input required x-model="form.company" type="text" name="company" id="company" autocomplete="organization" class="block w-full border-0 border-b border-gray-300 bg-gray-50 focus:border-blue-600 focus:ring-0 sm:text-sm">
            </div>
        </div>
        <div class="sm:col-span-2">
            <div class="flex justify-between">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <span id="phone-description" class="text-sm text-gray-500">Optional</span>
            </div>
            <div class="mt-1">
                <input x-model="form.phone" type="text" name="phone" id="phone" autocomplete="tel" aria-describedby="phone-description" class="block w-full border-0 border-b border-gray-300 bg-gray-50 focus:border-blue-600 focus:ring-0 sm:text-sm">
            </div>
        </div>
        <div class="sm:col-span-2">
            <div class="flex justify-between">
                <label for="how-can-we-help" class="block text-sm font-medium text-gray-700">How can we help you?</label>
                <span id="how-can-we-help-description" class="text-sm text-gray-500">Max. 500 characters</span>
            </div>
            <div class="mt-1">
                <textarea x-data="textarea()" @input="resize()" x-model="form.message" id="how-can-we-help" name="how-can-we-help" aria-describedby="how-can-we-help-description" rows="4" class="block w-full border-0 border-b border-gray-300 bg-gray-50 focus:border-blue-600 focus:ring-0 sm:text-sm resize-none overflow-hidden"></textarea>
            </div>
        </div>
        <fieldset class="sm:col-span-2">
            <legend class="block text-sm font-medium text-gray-700">
                Expected budget
            </legend>
            <div class="mt-4 grid grid-cols-1 gap-y-4">
                <div class="flex items-center">
                    <input x-model="form.budget" id="budget-under-25k" name="budget" value="under_25k" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="budget-under-25k" class="ml-3">
                        <span class="block text-sm text-gray-700">Less than $25K</span>
                    </label>
                </div>
                <div class="flex items-center">
                    <input x-model="form.budget" id="budget-25k-50k" name="budget" value="25k-50k" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="budget-25k-50k" class="ml-3">
                        <span class="block text-sm text-gray-700">$25K – $50K</span>
                    </label>
                </div>
                <div class="flex items-center">
                    <input x-model="form.budget" id="budget-50k-100k" name="budget" value="50k-100k" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="budget-50k-100k" class="ml-3">
                        <span class="block text-sm text-gray-700">$50K – $100K</span>
                    </label>
                </div>
                <div class="flex items-center">
                    <input x-model="form.budget" id="budget-over-100k" name="budget" value="over_100k" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="budget-over-100k" class="ml-3">
                        <span class="block text-sm text-gray-700">$100K+</span>
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="sm:col-span-2">
            <label for="how-did-you-hear-about-us" class="block text-sm font-medium text-gray-700">How did you hear about us?</label>
            <div class="mt-1">
                <input x-model="form.source" type="text" name="how-did-you-hear-about-us" id="how-did-you-hear-about-us" class="block w-full border-0 border-b border-gray-300 bg-gray-50 focus:border-blue-600 focus:ring-0 sm:text-sm">
            </div>
        </div>
        <div class="text-right sm:col-span-2">
            <button :disabled="loading" type="submit" :class="[loading ? 'bg-gray-600 cursor-not-allowed' : 'bg-blue-600 hover:bg-blue-700 ']" class="inline-flex rounded justify-center py-2 px-4 border border-transparent  text-sm font-medium text-white focus:outline-none">
                <span x-show="!loading">Send a request</span>
                <span x-show="loading">Sending...</span>
            </button>
        </div>
    </form>
    <div class="flex-1">
        <div class="space-y-8">
            <p class="text-gray-500">
                Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.
            </p>

            <div>
                <h3 class="text-lg font-medium text-gray-900">
                    Contacts
                </h3>
                <dl class="mt-2 text-base text-gray-500">
                    <div>
                        <dd>
                            support@example.com
                        </dd>
                    </div>
                    <div class="mt-1">
                        <dt class="sr-only">
                            Phone number
                        </dt>
                        <dd>
                            +1 (555) 123-4567
                        </dd>
                    </div>
                </dl>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900">
                    Our address
                </h3>
                <dl class="mt-2 text-base text-gray-500">
                    <div>
                        <dt class="sr-only">
                            Email
                        </dt>
                        <dd>
                            support@example.com
                        </dd>
                    </div>
                    <div class="mt-1">
                        <dt class="sr-only">
                            Phone number
                        </dt>
                        <dd>
                            +1 (555) 123-4567
                        </dd>
                    </div>
                </dl>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900">
                    Our social media
                </h3>
                <dl class="mt-2 text-base text-gray-500">
                    <div>
                        <dt class="sr-only">
                            Email
                        </dt>
                        <dd>
                            support@example.com
                        </dd>
                    </div>
                    <div class="mt-1">
                        <dt class="sr-only">
                            Phone number
                        </dt>
                        <dd>
                            +1 (555) 123-4567
                        </dd>
                    </div>
                </dl>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900">
                    Submit your CV
                </h3>
                <dl class="mt-2 text-base text-gray-500">
                    <div>
                        <dt class="sr-only">
                            Email
                        </dt>
                        <dd>
                            support@example.com
                        </dd>
                    </div>
                    <div class="mt-1">
                        <dt class="sr-only">
                            Phone number
                        </dt>
                        <dd>
                            +1 (555) 123-4567
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="text-base text-gray-500">
                Looking for careers?
                <!-- space -->
                <a href="#" class="font-medium text-gray-700">View all job openings</a>.
            </div>

        </div>
    </div>
</div>
