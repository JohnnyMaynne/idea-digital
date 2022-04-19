<button
    x-data="{scrollBackTop: false}"
    x-show="scrollBackTop"
    x-transition
    @scroll.window="scrollBackTop = (window.pageYOffset > 1000) ? true : false"
    @click="window.scroll({ top:0, left:0, behavior: 'smooth'})"
    style="display: none"
    class="group fixed bottom-5 right-5 w-12 h-12 rounded-full hover:bg-gray-200 transition flex items-center justify-center bg-gray-100  cursor-pointer shadow-2xl">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition group-hover:text-gray-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <polyline points="7 11 12 6 17 11"></polyline>
        <polyline points="7 17 12 12 17 17"></polyline>
    </svg>
</button>
