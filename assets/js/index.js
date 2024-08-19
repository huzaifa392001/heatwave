gsap.registerPlugin(ScrollTrigger);
let mm = gsap.matchMedia()
mainSec();
let lenisScroll;

$(window).on("load", () => {
    preloaderAnim();
});
barba.init({
    debug: true,
    transitions: [
        {
            async leave(data) {
                await leavePage(data);
                data.current.container.remove();
            },
            async enter(data) {
                await enterPage(data);
            },
            async once(data) {
                allFunc(data);
            },
        },
    ],
});

function allFunc(data) {
    let page = data.next.namespace
    mm.add('min-width: 992px', () => {
        headerNavAnim(page)
    })
    lenisSetup();
}

function leavePage() {
    lenisScroll.destroy()
    ScrollTrigger.getAll().forEach((trigger) => trigger.kill());
}

async function enterPage(data) {

    await allFunc(data);

    if (data.next.namespace === "index") {
        preloaderAnim();
    } else if (window.innerWidth > 991) {
        setTimeout(() => {
            lenisScroll.scrollTo(window.innerHeight);
        }, 500);
    } else {
        lenisScroll.scrollTo(0);
    }

}

function lenisSetup() {
    lenisScroll = new Lenis({
        duration: 1.5,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smooth: true,
        mouseMultiplier: 1,
    });
    lenisScroll.scrollTo(document.querySelector('#home'));

    function raf(time) {
        lenisScroll.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            lenisScroll.scrollTo(this.getAttribute("href"));
        });
    });
}

function preloaderAnim() {
    let tl = gsap.timeline();
    tl.to('.preloaderCont .preloaderImg .preloaderMask', {
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
            css: {display: 'none'}
        })
        .to('.mainSec h1 .char', {
            scale: 1,
            stagger: 0.05,
            ease: "power2.out"
        });
}

function mainSec() {
    const text = new SplitType('.home .mainSec h1');
    text.chars;
}

function headerNavAnim(page) {
    const anchors = document.querySelectorAll("header .navbar-nav .nav-item .nav-link");
    if (page !== "index") {
        $(anchors).hide()
    } else {
        $(anchors).show()
    }

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
            let link = anchor.getAttribute('data-link');
            let sections = document.querySelectorAll(".pageWrapper");

            // Remove active class and kill all ScrollTriggers
            sections.forEach((sec) => {
                sec.classList.remove('active');
            });
            ScrollTrigger.getAll().forEach((trigger) => trigger.kill());

            // Activate the selected section
            document.querySelector(`.pageWrapper.${link}`).classList.add('active');

        });
    });
}
