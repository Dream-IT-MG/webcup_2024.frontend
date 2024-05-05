import { Application } from 'https://cdn.skypack.dev/@splinetool/runtime';

const canvas = document.getElementById('canvas3d');
const app = new Application(canvas);

app.load('./scene.splinecode').then(() => {
    const cutie = app.findObjectByName("kong");

    gsap.set(cutie.scale, { x: 0.03, y: 0.03, z: 0.03 });
    gsap.set(cutie.position, { x: -100, y: -10 });
});
