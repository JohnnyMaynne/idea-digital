import Masonry from 'masonry-layout'
import imagesLoaded from 'imagesloaded'

window.masonry = (item = '.grid-item') =>  {
    return {
        item,

        init() {
            let node = this.$root

            imagesLoaded(node, function () {
                new Masonry(node, {
                    itemSelector: this.item,
                    percentPosition: true,
                })
            })
        },
    }
}
