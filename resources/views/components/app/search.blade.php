<div
    x-data="search()"
    @click="toggle()"
    @search.window="toggle()"
    x-show="open"

    style="display: none;"
    class="fixed h-screen top-0 left-0 right-0 bottom-0 z-50">

    <div x-show="open" x-transition.opacity class="absolute top-0 left-0 right-0 bottom-0 bg-black/50"></div>

    <div class="flex flex-col h-screen">
        <div x-show="open"
             x-transition:enter="transition ease-in-out duration-300"
             x-transition:enter-start="-translate-y-full"
             x-transition:enter-end="translate-y-0"
             x-transition:leave="transition ease-in-out duration-300"
             x-transition:leave-start="translate-y-0"
             x-transition:leave-end="-translate-y-full"
             @click.stop class="bg-white p-6 shadow-2xl relative z-50">
            <x-app.container>
                    <div class="space-y-5">
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold">Search everything</div>
                            <button @click.stop="toggle()" class="p-2 group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700  transition group-hover:opacity-70" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <input @keydown.esc="toggle()" x-ref="input" x-model="search" type="text" placeholder="Enter your request" class="border-2 p-5 border-gray-100 w-full text-xl font-medium">
                        </div>
                    </div>
            </x-app.container>
        </div>

        <div x-show="list && open && search" style="display:none;" class="flex-1 bg-white relative border-t py-6 z-50">
            <x-app.container>
                <div class="prose min-w-full prose-a:transition hover:prose-a:decoration-blue-600 prose-a:underline-offset-4 prose-a:decoration-blue-100 prose-a:decoration-2 prose-a:text-blue-600">
                    <p  class="font-medium text-gray-500 text-sm">Results by request "<span class="italic" x-text="search"></span>"</p>

                    <div x-show="posts.length">
                        <p class="text-lg font-medium">Posts</p>
                        <ul>
                            <template x-for="(item,index) in posts" :key="index">
                                <li>
                                    <a :href="item.url" x-text="item.title"></a>
                                </li>
                            </template>
                        </ul>
                    </div>

                    <div x-show="works.length">
                        <p class="text-lg font-medium">Cases</p>
                        <ul>
                            <template x-for="(item,index) in works" :key="index">
                                <li>
                                    <a :href="item.url" x-text="item.title"></a>
                                </li>
                            </template>
                        </ul>
                    </div>

                    <div x-show="authors.length">
                        <p class="text-lg font-medium">Authors</p>
                        <ul>
                            <template x-for="(item,index) in authors" :key="index">
                                <li>
                                    <a :href="item.url" x-text="item.title"></a>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
            </x-app.container>
        </div>
    </div>

</div>
