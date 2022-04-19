import axios from "axios";

window.rating = (value = 0, model,count = 0) => {
    return {
        value,
        model,
        count,

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
