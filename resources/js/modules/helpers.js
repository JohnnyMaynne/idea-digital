window.textarea = () => {
    return {
        init() {
            this.resize()
        },

        resize() {
            const el = this.$el
            el.style.height = '100px'
            el.style.height = el.scrollHeight + 'px'
        }
    }
}
