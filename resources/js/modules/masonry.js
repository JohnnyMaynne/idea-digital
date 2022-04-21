import Masonry from 'masonry-layout'
import imagesLoaded from 'imagesloaded'

window.masonry = () =>  {
    return {
        init() {
            let node = this.$root

            imagesLoaded(node, function () {
                new Masonry(node, {
                    itemSelector: '.grid-item',
                    percentPosition: true,
                })
            })
        },
    }
}
