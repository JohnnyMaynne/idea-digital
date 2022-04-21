window.steps = steps => {
    return {
        steps: steps,

        current: 0,

        select(step) {
            this.current = step
        }
    }
}
