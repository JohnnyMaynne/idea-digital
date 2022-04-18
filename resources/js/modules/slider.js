import Swiper, { Navigation, Pagination, Scrollbar } from 'swiper'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'

import lazyload from "@area17/a17-lazyload"


window.slider = () =>  {
    return {
        init() {
            let node = this.$root

            const swiper = new Swiper(node, {
                modules: [Navigation, Pagination],
                effect: 'fade',
                spaceBetween: 40,

                pagination: {
                    el: this.$refs.pagination,
                    type: "progressbar",
                },

                navigation: {
                    nextEl: this.$refs.next,
                    prevEl: this.$refs.prev,
                },
            });

            swiper.on('slideChange', lazyload);

        },
    }
}
