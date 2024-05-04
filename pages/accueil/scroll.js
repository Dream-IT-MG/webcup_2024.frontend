const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
});

function raf(time) {
    lenis.raf(time);
    ScrollTrigger.update();
    requestAnimationFrame(raf);
}

requestAnimationFrame(raf)

// vertical scrolling
const section_1 = document.getElementById("slide-2");
const col_left = document.querySelector(".col_left");
const timeln = gsap.timeline({ paused: true });


timeln.fromTo(col_left, { y: 0 }, { y: '170vh', duration: 1, ease: 'none' })

const scroll_1 = ScrollTrigger.create({
    animation: timeln,
    trigger: section_1,
    start: 'top top',
    end: 'bottom center',
    scrub: true
})