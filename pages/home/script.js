import { Application } from 'https://cdn.skypack.dev/@splinetool/runtime';

let canvas = document.getElementById('canvas3d');
let app = new Application(canvas);
const godzilla = app.findObjectByName("godzilla");
app.load('./kong.splinecode').then(() => {
    const cutie = app.findObjectByName("kong");

    gsap.set(cutie.scale, { x: 0.03, y: 0.03, z: 0.03 });
    gsap.set(cutie.position, { x: -100, y: -10 });
});



gsap
    .timeline({
        scrollTrigger: {
            trigger: "#slide-4",
            start: "top 60%",
            end: "bottom bottom",
            scrub: true,
            onEnter: () => {
                canvas = document.getElementById('canvasGodzilla');
                app = new Application(canvas);

                app.load('./godzilla2.splinecode').then(() => {

                    gsap.set(godzilla.position, { x: 50, y: 0 });
                });

            },
            onLeaveBack: () => {
                document.getElementById('canvasGodzilla').style.display = "none";
            }
        }
    })