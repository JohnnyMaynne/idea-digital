import axios from "axios";

window.feedback = () =>  {
    return {
        loading: false,
        sended: false,
        form: {
            first_name: null,
            last_name: null,
            email: null,
            phone: null,
            company: null,
            message: null,
            budget: null,
            source: null,
        },

        resetForm() {
            this.form.first_name
            = this.form.last_name
            = this.form.email
            = this.form.phone
            = this.form.company
            = this.form.message
            = this.form.budget
            = this.form.source
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
