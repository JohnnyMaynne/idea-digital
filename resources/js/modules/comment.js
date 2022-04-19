import axios from "axios"

window.comment = model => {
    return {
        form: {
            comment: null,
            name: null,
            email: null,
            model: model
        },

        get allow() {
            return this.form.comment && this.form.name && this.form.email
        },

        get actionButton() {
            return this.allow
                ? 'bg-indigo-600 hover:bg-indigo-700'
                : 'cursor-not-allowed bg-gray-600 hover:bg-gray-700'
        },

        resetInputs() {
            this.form.comment = this.form.name = this.form.email = null
        },

        noty() {

        },

        async send() {
            await axios.post('/comments',this.form)
            this.resetInputs()
            this.noty()

        }
    }
}
