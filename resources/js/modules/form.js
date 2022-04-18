import axios from "axios"

window.form = () => {
    return {
        loading: false,
        sended: false,

        async send() {
            this.loading = true
            const data = new FormData(this.$root)

            try {
                await axios.post('/blog',data)
                this.$root.querySelectorAll('input').forEach(e => e.value = '')
                this.sended = true
                setTimeout(() => this.sended = false, 10000)
            } catch {} finally {
                this.loading = false
            }
        },
    }
}
