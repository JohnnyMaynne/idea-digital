window.faq = open => {
    return {
        open: open,

        select(id) {
            this.open = id
        },
    }
}
