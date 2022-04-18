import lazyload from '@area17/a17-lazyload'
import Alpine from 'alpinejs'
require('fslightbox')


// modules
require('./modules/form')
require('./modules/hover')
require('./modules/masonry')
require('./modules/slider')

// alpine js
window.Alpine = Alpine
Alpine.start()


// init
document.addEventListener('DOMContentLoaded',  () => {
    // lazyload
    lazyload()

    // fslightbox
    if(fsLightboxInstances['first-lightbox'])  {
        fsLightboxInstances['first-lightbox'].open(0)
    }
})


