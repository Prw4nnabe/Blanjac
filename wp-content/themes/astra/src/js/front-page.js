import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";


gsap.registerPlugin(ScrollTrigger);


const tl = gsap.timeline({
  defaults: {ease: "none"},
  scrollTrigger:{
    trigger: ".offer-section",
    start: "top-=100",
    end: "bottom",
    scrub: 0.5,
    pin: true,
  }
})

tl.from('.offer-section .overflow-hidden h2', {
  yPercent: -100,
  stagger: 1
})