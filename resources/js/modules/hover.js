window.hover = () =>  {
    return {
        sharedCounter: 0,

        options: {
            width: 256,
            height: 144,
            scale: .25,
            prefetch: 'none'
        },
        target: null,


        init() {
            this.createElements()

            this.$watch('target', a => {
                if(a) {
                    let preview = a.querySelector('.mini-preview-wrapper')

                    preview.querySelector('.mini-preview-frame').setAttribute('src',a.getAttribute('href'))
                }
            })
        },

        hover(event) {
            if(event.target.tagName.toLowerCase() === 'a') {
                this.target = event.target
            } else {
                this.target = null
            }
        },


        createElements() {
            let links = this.$root.querySelectorAll('a[rel="noopener noreferrer"]')

            const wrapper = document.createElement('span')
            const loading = document.createElement('span')
            const frame = document.createElement('iframe')
            const cover = document.createElement('span')


            wrapper.classList.add('mini-preview-wrapper')
            loading.classList.add('mini-preview-loading')
            frame.classList.add('mini-preview-frame')
            cover.classList.add('mini-preview-cover')

            wrapper.appendChild(loading)
            wrapper.appendChild(frame)
            wrapper.appendChild(cover)

            wrapper.style.width = this.options.width + 'px'
            wrapper.style.height = this.options.height + 'px'

            const inversePercent = 100 / this.options.scale

            frame.style.width =  inversePercent + '%'
            frame.style.height =  inversePercent + '%'
            frame.style.transform =  'scale(' + this.options.scale + ')'

            links.forEach(e => {
                e.setAttribute('data-preview',  'preview')
                e.appendChild(wrapper.cloneNode(true))
            })
        },

    }
}
