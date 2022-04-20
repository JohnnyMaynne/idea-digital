import axios from "axios";

window.feedback = () =>  {
    return {
        loading: false,
        sended: false,
        form: {
            name: null,
            email: null,
            phone: null,
            company: null,
            message: null,
        },

        resetForm() {
            this.form.name
            = this.form.email
            = this.form.phone
            = this.form.company
            = this.form.message
            = null
        },

        async handler() {
            this.loading = true

            try {
                await axios.post('/feedback',this.form)
                this.resetForm()
                this.sended = true
                setTimeout(() => this.sended = false, 5000)
            } catch (e) {} finally {
                this.loading = false
            }

        },
    }
}
