import Alpine from "alpinejs";
import Swiper from "swiper";
import { Navigation, Autoplay, Pagination, EffectFade } from "swiper/modules";

document.addEventListener("alpine:init", () => {
    // color Mode
    Alpine.store("ui", {
        colorMode: "light",
    });
    // Navbar
    Alpine.data("navbar", () => ({
        open: false,
        aboutDropdown: false,
        isScrolled: false,
        init() {
            console.log("isScrolled :", this.isScrolled);
            this.resetOpenState();
            window.addEventListener("resize", () => this.resetOpenState);
            window.addEventListener("scroll", () => {
                this.isScrolled = window.scrollY > 50;
            });
        },
        toggle() {
            this.open = !this.open;
            console.log(this.open);
        },
        toggleAboutDropdown() {
            this.aboutDropdown = !this.aboutDropdown;
            console.log(this.aboutDropdown);
        },
        resetOpenState() {
            const mdBreakPoint = 768;
            if (window.innerWidth >= mdBreakPoint) {
                this.open = true;
            } else {
                this.open = false;
            }
        },
    }));

    // Banner / Hero Component
    Alpine.data("heroSliderComponent", () => ({
        heroSlides: [],
        swiperInstance: null,
        initSwiper() {
            this.$nextTick(() => {
                // Destroy existing Swiper instance if it exists
                if (this.swiperInstance) {
                    this.swiperInstance.destroy(true, true);
                }

                const shouldLoop = this.heroSlides.length > 1;
                this.swiperInstance = new Swiper("#hero", {
                    modules: [Navigation, Pagination, Autoplay],

                    loop: shouldLoop,
                    autoplay: {
                        delay: 50000,
                        slidesPerView: 1,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        dynamicBullets: true,
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-nav-right",
                        prevEl: ".swiper-nav-left",
                    },
                });
            });
        },
        async fetchData() {
            try {
                const res = await fetch("./js/heros.json");
                this.heroSlides = await res.json();

                this.$nextTick(() => this.initSwiper());
                console.log(this.heroSlides);
            } catch (error) {
                console.log("error loading heros slides", error.message);
            }
        },
        init() {
            this.fetchData();
        },
    }));

    // History / History Component
    Alpine.data("historySliderComponent", () => ({
        historySlides: [],
        swiperInstance: null,
        initSwiper() {
            console.log("Data slides:", this.historySlides.length);
            const domSlides = document.querySelectorAll(
                ".history .swiper-slide"
            );
            console.log("DOM slides:", domSlides.length);
            this.$nextTick(() => {
                // Destroy existing Swiper instance if it exists
                setTimeout(() => {
                    if (this.swiperInstance) {
                        this.swiperInstance.destroy(true, true);
                    }

                    const shouldLoop = this.historySlides.length >= 1;
                    this.swiperInstance = new Swiper(".history", {
                        modules: [Navigation, Pagination, Autoplay, EffectFade],
                        effect: "fade",
                        fadeEffect: {
                            crossFade: true, // Smooth cross-fade transition (both slides fade)
                        },
                        loop: shouldLoop,
                        speed: 1000,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".history ~ .swiper-pagination",
                            clickable: true,
                            // dynamicBullets: true,
                        },
                        navigation: {
                            nextEl: ".history ~ .swiper-button-next",
                            prevEl: ".history ~ .swiper-button-prev",
                        },
                    });
                }, 100);
            });
        },
        async fetchData() {
            try {
                const res = await fetch("./js/history.json");
                this.historySlides = await res.json();

                this.$nextTick(() => this.initSwiper());
                console.log(this.historySlides);
            } catch (error) {
                console.log("error loading history slides", error.message);
            }
        },
        init() {
            this.fetchData();
        },
    }));

    // Weekly Activities Component
    Alpine.data("WeeklyActivitiesComponent", () => ({
        activitySlides: [],
        swiperInstance: null,
        initSwiper() {
            this.$nextTick(() => {
                // Destroy existing Swiper instance if it exists
                if (this.swiperInstance) {
                    this.swiperInstance.destroy(true, true);
                }

                const shouldLoop = this.activitySlides.length > 1;
                this.swiperInstance = new Swiper(".weekly-activities", {
                    modules: [Navigation, Pagination, Autoplay],

                    loop: shouldLoop,
                    slidesPerView: 1,
                    spaceBetween: 20,
                    autoplay: {
                        delay: 50000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                });
            });
        },
        async weeklyActivitiesData() {
            try {
                const res = await fetch("./js/church-activities.json");
                this.activitySlides = await res.json();

                this.$nextTick(() => this.initSwiper());

                console.log("***** weekly activities");
                console.log(this.activitySlides);
            } catch (error) {
                console.log("error loading heros slides", error.message);
            }
        },
        init() {
            this.weeklyActivitiesData();
        },
    }));

    //Ministries Tab
    Alpine.data("ministriesComponent", () => ({
        activeTab: 1,
        ministries: [],
        async fetchMinistries() {
            try {
                const res = await fetch("./js/ministries.json");
                this.ministries = res.json();
                console.log("**** show ministries *******");
                console.log(this.ministries);
            } catch (error) {
                console.log("error loading ministries:", error.message);
            }
        },
        init() {
            this.fetchMinistries();
        },
    }));

    // Leadership Component
    Alpine.data("leadershipComponent", (selector = "") => ({
        leadershipSlides: [],
        swiperInstance: null,
        selector,
        isBeginning: true,
        isEnd: false,
        initSwiper() {
            this.$nextTick(() => {
                // Destroy existing Swiper instance if it exists
                if (this.swiperInstance) {
                    this.swiperInstance.destroy(true, true);
                }

                const container = document.querySelector(
                    `${this.selector} .church-leadership`
                );
                const nextBtn = document.querySelector(
                    `${this.selector} .custom-button-next`
                );
                const prevBtn = document.querySelector(
                    `${this.selector} .custom-button-prev`
                );

                if (!container) {
                    console.error(
                        "Swiper container not found for selector:",
                        this.selector
                    );
                    return;
                }

                this.swiperInstance = new Swiper(container, {
                    modules: [Navigation],

                    loop: false,
                    slidesPerView: 1,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: nextBtn,
                        prevEl: prevBtn,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                    on: {
                        init: () => this.updateButtonStates(),
                        slideChange: () => this.updateButtonStates(),
                    },
                });
            });
        },
        // Update navigation button states
        updateButtonStates() {
            if (this.swiperInstance) {
                this.isBeginning = this.swiperInstance.isBeginning;
                this.isEnd = this.swiperInstance.isEnd;
            }
        },
        async leadershipData() {
            try {
                const res = await fetch("./js/leadership.json");
                this.leadershipSlides = await res.json();

                this.$nextTick(() => this.initSwiper());

                console.log("***** leadershipSlides");
                console.log(this.leadershipSlides);
            } catch (error) {
                console.log("error loading leadershipSlides", error.message);
            }
        },
        getLeadersByLevel(level) {
            return this.leadershipSlides.filter((l) => l.level === level);
        },
        init() {
            this.leadershipData();
        },
    }));
});
