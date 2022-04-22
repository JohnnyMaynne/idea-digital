import barba from "@barba/core";
import anime from "animejs";

const swiper = document.getElementById("swiper");
const colors = ["#F4E04D", "#587792", "#8DB1AB"];

const getRandomColor = () => {
    return colors[Math.round(Math.random() * (colors.length - 1))];
};

const springConfig = "spring(1, 100, 25, 0)";

barba.init({
    transitions: [
        {
            name: "swipe",
            leave({ current }) {
                swiper.style.backgroundColor = getRandomColor();
                const tl = anime.timeline({
                    duration: 100,
                    easing: springConfig
                });

                tl.add({
                    targets: swiper,
                    scaleX: [0, 1]
                });

                return tl.finished;
            },
            enter({ next }) {
                const tl = anime.timeline({
                    duration: 100,
                    easing: springConfig
                });

                tl.add({
                    targets: swiper,
                    scaleX: [1, 0]
                });

                return tl.finished;
            }
        }
    ],
});
