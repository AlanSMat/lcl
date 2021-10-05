//gsap
gsap.registerPlugin(ScrollTrigger);
gsap.to(".x", {
  x: 5,
  // y: 300,
  //duration: 1,
  scrollTrigger: {
    //trigger: ".picture-block",
    //start: "top 30%",
    //end: "top 20%",
//    scrub: true,
    //toggleActions: "restart none none none",
    // pin: ".square",
    // pinSpacing: true,
    // play pause resume reverse restart reset complete none
    //              onEnter onLeave onEnterBack onLeaveBack
    // markers: {
    //   fontSize: "1.4rem",
    //   indent: 200
    // },
    // toggleClass: ".square"
  }
})