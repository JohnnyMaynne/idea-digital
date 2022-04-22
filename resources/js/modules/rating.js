import axios from "axios";

window.rating = (value = 0, model,count = 0, rating) => {
    return {
        value,
        model,
        count,
        rating,

        async init() {
            const res = await axios.get('/ratings/' + this.model)
            this.value = res.data.rating
            this.count = res.data.count
        },

        get formatRating() {
            return Number.parseFloat(this.value).toFixed(2)
        },

        async handler(rating)
        {
           const res = await axios.post(`/ratings/${this.model}`,{
               rating
           })

           this.value = res.data.rating
           this.count = res.data.count

        },

    }
}
