import lazyload from '@area17/a17-lazyload'
import Alpine from 'alpinejs'
import barba from '@barba/core'
require('fslightbox')


// modules
require('./modules/form')
require('./modules/masonry')
require('./modules/slider')
require('./modules/comment')
require('./modules/rating')
require('./modules/helpers')
require('./modules/search')
require('./modules/faq')
require('./modules/feedback')
require('./modules/steps')

// alpine js
window.Alpine = Alpine
Alpine.start()


// bootstrap
const bootstrap = () => {
    // lazyload
    lazyload()

    // fslightbox
    fsLightboxInstances['first-lightbox']?.open(0)
}

// init
document.addEventListener('DOMContentLoaded',bootstrap)

// barba js
barba.init()
barba.hooks.enter(() => {
    bootstrap()
    window.scrollTo(0, 0)
})


