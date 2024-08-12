gsap.registerPlugin(ScrollTrigger);
mainSec()

$(window).on("load", () => {
    preloaderAnim()
})
$(function () {
    // lenisSetup()
    headerNavAnim()
})

function lenisSetup() {
    const lenis = new Lenis({
        duration: 1.5,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smooth: true,
        mouseMultiplier: 1,
    })
    lenis.scrollTo(document.querySelector('#home'))

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf);
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            lenis.scrollTo(this.getAttribute("href"));
        });
    });
}

function preloaderAnim() {
    let tl = gsap.timeline()
    tl
        .to('.preloaderCont .preloaderImg .preloaderMask', {
            yPercent: -100,
            duration: 1.2,
            ease: "power2.out"
        })
        .to('.preloaderCont .preloaderImg', {
            autoAlpha: 0
        })
        .to('.preloaderCont .preloaderBg', {
            yPercent: -100,
            duration: 1.2,
            ease: "power2.out"
        }, '<')
        .to('.preloaderCont', {
            css: {
                display: 'none'
            }
        })
        .to('.mainSec h1 .char', {
            scale: 1,
            stagger: 0.05,
            ease: "power2.out"
        })
}

function mainSec() {
    const text = new SplitType('.home .mainSec h1')
    text.chars
}

function headerNavAnim() {
    const anchors = document.querySelectorAll("header .navbar-nav .nav-item .nav-link");

    anchors.forEach((anchor) => {
        const mainTextRef = anchor.querySelector('.mainText');
        const animateTextRef = anchor.querySelector('.animateText');

        // Initialize SplitType instances
        const mainText = new SplitType(mainTextRef, {type: "chars"});
        const animateText = new SplitType(animateTextRef, {type: "chars"});

        // Initialize timelines
        const tl = gsap.timeline({
            defaults: {ease: "power2.inOut"},
        });
        tl.set(mainText.chars, {yPercent: 0, opacity: 1});
        tl.set(animateText.chars, {yPercent: 0, opacity: 1});

        const hoverTimeline = gsap.timeline({paused: true, duration: 0.01});
        hoverTimeline.to(mainText.chars, {yPercent: -100, stagger: 0.05});
        hoverTimeline.to(animateText.chars, {yPercent: -100, stagger: 0.05}, "<");

        const handleHover = () => {
            hoverTimeline.play();
        };

        const handleMouseOut = () => {
            hoverTimeline.timeScale(2).reverse();
        };

        anchor.addEventListener("mouseenter", handleHover);
        anchor.addEventListener("mouseleave", handleMouseOut);

        anchor.addEventListener("click", function () {
            let link = anchor.getAttribute('data-link')
            let sections = document.querySelectorAll(".pageWrapper")
            sections.forEach((sec) => {
                sec.classList.remove('active')
                ScrollTrigger.getAll().forEach((trigger) => trigger.kill());
            })
            document.querySelector(`.pageWrapper.${link}`).classList.add('active')
            horizontalScroll()
        })
    });
}

function horizontalScroll() {
    let sections = gsap.utils.toArray(".horizontalCont");
    sections.forEach((sec) => {
        let innerSections = sec.querySelectorAll('section')
        if (innerSections.length >= 2) {
            console.log(innerSections)
            // Set sections width to window width
            $(innerSections).css('width', window.innerWidth);
            $(sec).css('width', innerSections.length * 100 + '%');

            // Horizontal scroll animation
            setTimeout(() => {
                let horizontalScroll = gsap.to(sections, {
                    xPercent: -100 * (innerSections.length - 1),
                    ease: "none",
                    scrollTrigger: {
                        trigger: sec,
                        pin: true,
                        scrub: 1,
                        end: () => "+=" + sec.offsetWidth,
                        markers: true
                    },
                });
            }, 1000)
        }
    })
}