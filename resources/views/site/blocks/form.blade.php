<x-blocks.base-view :block="$block">
    <form x-data="form()" @submit.prevent="send()" class="mt-5 relative select-none rounded-md p-5 md:py-8 md:px-10 text-white shadow-2xl" style="background: radial-gradient(41.25% 65.52% at 0% 100%, rgba(0, 0, 0, 0.0625) 0%, rgba(0, 0, 0, 0) 93.23%), radial-gradient(73.31% 128.67% at 92.34% 15.74%, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%) , #4475F2;">
        <div class="relative z-20 space-y-8">
            <div>
                <div class="mb-2.5 text-3xl font-semibold">{{ $block->input('title') }}</div>
                <div class="text-base ">{{ $block->input('subtitle') }}</div>
            </div>
            <div class="flex md:items-end flex-col md:flex-row md:space-y-0 space-y-5 md:space-x-5">
                <div class="grid flex-1 grid-cols-1 md:grid-cols-2 gap-5 text-gray-900">
                    @foreach($block->childs as $child)
                        <div class="h-14 border-b border-white/30">
                            <input name="fields[]" placeholder="{{ $child->input('field') }}" type="{{ $child->input('type') }}" @if($child->input('required')) required @endif class="px-0 border-none h-full w-full bg-transparent text-white placeholder:text-white/75 focus:ring-0 focus:outline-none" />
                            <input name="value[]" type="hidden" style="display: none;" value="{{ $child->input('field') }}">
                        </div>
                    @endforeach
                </div>
                <button :disabled="loading" :class="[loading ? 'bg-gray-700 cursor-not-allowed' : 'bg-[#101416]']" type="submit" class="h-14 rounded-md py-2 px-6 text-base">
                    <span x-show="!loading">{{ $block->input('button') }}</span>
                    <span style="display: none;" x-show="loading">Sending...</span>
                </button>

            </div>

            <div style="display: none" x-show="sended" x-transition class="p-4 flex items-center justify-between bg-white text-sm font-medium text-gray-900 rounded-md">
                <div>Your message has been sent 😃</div>
                <button type="button" class="p-2" @click="sended = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>

        <svg class="absolute z-10 -left-4 -bottom-4" width="237" height="262" viewBox="0 0 237 262" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_b_5149_33329)">
                <path d="M141.306 258.129C124.866 250.954 124.903 225.103 95.0912 213.358C77.5902 206.464 73.8486 206.198 47.885 204.706C21.4149 203.185 0 188.163 0 167.541C0 150.395 9.21487 129.479 43.6032 125.056C83.339 119.945 94.2969 109.411 101.064 86.8535C107.83 64.2953 105.618 44.4864 118.281 24.3946C135.79 -3.38587 192.558 -8.42221 218.098 14.3746C251.736 44.3995 239.311 94.9673 190.103 107.659C171.447 112.471 164.89 110.804 142.124 117.224C103.083 128.235 75.9227 166.735 114.23 195.458C138.411 211.779 164.46 204.619 180.942 216.418C189.741 222.718 195.61 235.423 187.301 249.241C177.713 262.593 157.747 265.305 141.306 258.129Z" fill="url(#paint0_linear_5149_33329)" fill-opacity="0.04"/>
            </g>
            <defs>
                <filter id="filter0_b_5149_33329" x="-25" y="-25" width="287" height="312" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feGaussianBlur in="BackgroundImage" stdDeviation="12.5"/>
                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_5149_33329"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_5149_33329" result="shape"/>
                </filter>
                <linearGradient id="paint0_linear_5149_33329" x1="229.703" y1="55.8089" x2="63.0459" y2="215.367" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"/>
                    <stop offset="1" stop-color="white"/>
                </linearGradient>
            </defs>
        </svg>


    </form>
</x-blocks.base-view>



