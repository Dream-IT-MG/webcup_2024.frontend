gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

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


timeln.fromTo(col_left, { y: 0 }, { y: '150vh', duration: 1, ease: 'none' })

const scroll_1 = ScrollTrigger.create({
    animation: timeln,
    trigger: section_1,
    start: 'top top',
    end: 'bottom center',
    scrub: true
})

// horizontal scrolling
const section_2 = document.getElementById("horizontal");
let box_items = gsap.utils.toArray(".horizontal__item");

gsap.to(box_items, {
    xPercent: -100 * (box_items.length - 1),
    ease: "sine.out",
    scrollTrigger: {
        trigger: section_2,
        pin: true,
        scrub: 3,
        snap: 1 / (box_items.length - 1),
        end: "+=" + section_2.offsetWidth
    }
});


let overlapTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: ".cards",
        pin: true,
        pinSpacing: true,
        start: "left-=120px left",
        end: "+=2000",
        scrub: 1,
    }
});


overlapTimeline.addLabel('card1');

overlapTimeline.to('.card-1', {
    xPercent: 0,
    opacity: 1
})

overlapTimeline.from('.card-2', {
    xPercent: 75,
    opacity: 0
})
overlapTimeline.addLabel('card2');

overlapTimeline.to('.card-1', {
    scale: 0.95,
    xPercent: -0.5,
    opacity: 0.5
}, "-=0.3");


overlapTimeline.to('.card-2', {
    xPercent: 0,
    opacity: 1
})

overlapTimeline.from('.card-3', {
    xPercent: 75,
    opacity: 0
})
overlapTimeline.addLabel(
    'card3'
);


overlapTimeline.to('.card-2', {
    scale: 0.95,
    xPercent: -0.4,
    opacity: 0.6
}, "-=0.3");


overlapTimeline.to('.card-3', {
    xPercent: 0,
    opacity: 1
})

overlapTimeline.from('.card-4', {
    xPercent: 75,
    opacity: 0
})
overlapTimeline.addLabel(
    'card4'
);

overlapTimeline.to('.card-3', {
    scale: 0.95,
    xPercent: -0.3,
    opacity: 0.7
}, "-=0.3");


overlapTimeline.to('.card-4', {
    xPercent: 0,
    opacity: 1
})

overlapTimeline.to('.card-4', {})