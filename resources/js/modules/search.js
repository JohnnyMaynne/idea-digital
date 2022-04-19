import axios from "axios"

window.search = () => {
    return {
        open: false,
        search: null,
        list: [],

        init() {
            this.$watch('open', value => {
                if(value) {
                    this.$nextTick(() => this.$refs.input.focus())
                }
            })

            this.$watch('search', async value => this.handler(value))
        },

        get posts() {
            return this.list.filter(e => e.type === 'posts')
        },

        get authors() {
            return this.list.filter(e => e.type === 'authors')
        },

        get works() {
            return this.list.filter(e => e.type === 'works')
        },

        toggle() {
            this.open = !this.open
            this.search = null
            this.list = []
        },

        async handler(value) {
            const res = await axios.post('/search', {value})
            this.list = res.data
        }

    }
}
