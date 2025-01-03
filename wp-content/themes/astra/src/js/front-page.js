import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";


gsap.registerPlugin(ScrollTrigger);

// gsap.utils.toArray(".overflow-hidden h2").forEach((panel, i) => {
//   ScrollTrigger.create ({
//     trigger: panel,
//     start: "top top",
//     scrub: true,
//     pin: true,
//     markers: true,
//   });
// });

const tl = gsap.timeline({
  defaults: {ease: "none"},
  scrollTrigger:{
    trigger: ".animText-section",
    start: "top-=100",
    end: "bottom",
    markers: true,
    scrub: 0.5,
    pin: true,
  }
})

tl.from('.animText-section .overflow-hidden h2', {
  yPercent: -100,
  stagger: 1
})