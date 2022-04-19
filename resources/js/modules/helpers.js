window.textarea = () => {
    return {
        init() {
            this.resize()
        },

        resize() {
            const el = this.$el
            el.style.height = '55px'
            el.style.height = el.scrollHeight + 'px'
        }
    }
}
