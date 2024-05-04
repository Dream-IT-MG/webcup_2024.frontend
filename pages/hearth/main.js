import { Application } from 'https://cdn.skypack.dev/@splinetool/runtime';

const app = new Application(document.getElementById('canvas3d'));
app
.load('https://prod.spline.design/rSXGi74kqoMKxCyM/scene.splinecode')
.then(() => {
    const cutie = app.findObjectByName("lapin");

        gsap.set(cutie.scale, { x: 0.7, y: 0.7, z: 0.7 });
        gsap.set(cutie.position, { x: 110, y: 0 });


        let rotateKeyboard = gsap.to(cutie.rotation, {
            y: Math.PI * 2 + cutie.rotation.y,
            x: 0,
            z: 0,
            duration: 10,
            repeat: -1,
            ease: "none"
        });

        let rotationProgress = 0;
        let interval;

        gsap
            .timeline({
                scrollTrigger: {
                    trigger: "#part1",
                    start: "top 60%",
                    end: "bottom bottom",
                    scrub: true,
                    onEnter: () => {
                        rotationProgress = rotateKeyboard.progress();

                        interval = setInterval(() => {
                            app.emitEvent("mouseDown", "lapin");
                        }, 1000);

                        rotateKeyboard.pause();
                        gsap.to(cutie.rotation, {
                            y: Math.PI / 12,
                            duration: 1
                        });
                    },
                    onLeaveBack: () => {
                        const newProgress = cutie.rotation.y / (Math.PI * 2);
                        rotateKeyboard.progress(newProgress).resume();
                        clearInterval(interval);
                    }
                }
            })
            .to(cutie.rotation, { x: -Math.PI / 14, z: Math.PI / 36 }, 0)
            .to(cutie.position, { x: -500, y: -200 }, 0)
            .to(cutie.scale, { x: 1, y: 1, z: 1 }, 0);

        gsap
            .timeline({
                scrollTrigger: {
                    trigger: "#part2",
                    start: "top bottom",
                    end: "center bottom",
                    scrub: true
                }
            })
            .to(cutie.rotation, { x: Math.PI / 36, y: -Math.PI / 10 }, 0)
            .to(cutie.position, { x: 300, y: 100 }, 0)
            .to(cutie.scale, { x: 0.8, y: 0.8, z: 0.8 }, 0);

        gsap
            .timeline({
                scrollTrigger: {
                    trigger: "#part3",
                    start: "top bottom",
                    end: "bottom bottom",
                    scrub: true
                }
            })
            .to(cutie.rotation, { x: Math.PI / 14, y: Math.PI / 10 }, 0)
            .to(cutie.position, { x: -300, y: 0 }, 0);

        gsap
            .timeline({
                scrollTrigger: {
                    trigger: "#part4",
                    start: "top bottom",
                    end: "bottom bottom",
                    scrub: true
                }
            })
            .to(cutie.rotation, { x: 0 , y: -Math.PI / 180 }, 0)
});

const appMusic = new Application(document.getElementById('canvas3dMusic'));
appMusic.load('https://prod.spline.design/XE56RdcyvaI6TDTp/scene.splinecode').then(() => {
    const cutie = app.findObjectByName("Icon");

        gsap.set(cutie.scale, { x: 0.7, y: 0.7, z: 0.7 });
        gsap.set(cutie.position, { x: 110, y: 0 });


        let rotateKeyboard = gsap.to(cutie.rotation, {
            y: Math.PI * 2 + cutie.rotation.y,
            x: 0,
            z: 0,
            duration: 10,
            repeat: -1,
            ease: "none"
        });

        let rotationProgress = 0;
        let interval;

        gsap
            .timeline({
                scrollTrigger: {
                    trigger: "#part1",
                    start: "top 60%",
                    end: "bottom bottom",
                    scrub: true,
                    onEnter: () => {
                        rotationProgress = rotateKeyboard.progress();

                        interval = setInterval(() => {
                            app.emitEvent("mouseDown", "lapin");
                        }, 1000);

                        rotateKeyboard.pause();
                        gsap.to(cutie.rotation, {
                            y: Math.PI / 12,
                            duration: 1
                        });
                    },
                    onLeaveBack: () => {
                        const newProgress = cutie.rotation.y / (Math.PI * 2);
                        rotateKeyboard.progress(newProgress).resume();
                        clearInterval(interval);
                    }
                }
            })
            .to(cutie.rotation, { x: -Math.PI / 14, z: Math.PI / 36 }, 0)
            .to(cutie.position, { x: -500, y: -200 }, 0)
            .to(cutie.scale, { x: 1, y: 1, z: 1 }, 0);

        gsap
            .timeline({
                scrollTrigger: {
                    trigger: "#part2",
                    start: "top bottom",
                    end: "center bottom",
                    scrub: true
                }
            })
            .to(cutie.rotation, { x: Math.PI / 36, y: -Math.PI / 10 }, 0)
            .to(cutie.position, { x: 300, y: 100 }, 0)
            .to(cutie.scale, { x: 0.8, y: 0.8, z: 0.8 }, 0);

        gsap
            .timeline({
                scrollTrigger: {
                    trigger: "#part3",
                    start: "top bottom",
                    end: "bottom bottom",
                    scrub: true
                }
            })
            .to(cutie.rotation, { x: Math.PI / 14, y: Math.PI / 10 }, 0)
            .to(cutie.position, { x: -300, y: 0 }, 0);

        gsap
            .timeline({
                scrollTrigger: {
                    trigger: "#part4",
                    start: "top bottom",
                    end: "bottom bottom",
                    scrub: true
                }
            })
            .to(cutie.rotation, { x: 0 , y: -Math.PI / 180 }, 0)
});
