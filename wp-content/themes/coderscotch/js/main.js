// header sub menu toggle js
document.addEventListener("DOMContentLoaded", () => {
  const menuItems = document.querySelectorAll(".nav-item.has-submenu");
  const currentPath = decodeURIComponent(window.location.pathname);

  menuItems.forEach((item) => {
    const submenu = item.querySelector(".submenu");
    let isCurrentParent = false;

    // Check if any link in submenu matches current page
    if (submenu) {
      const links = submenu.querySelectorAll("a");
      links.forEach((link) => {
        const hrefAttr = link.getAttribute("href");
        // Ignore placeholder links
        if (
          hrefAttr &&
          hrefAttr !== "#" &&
          !hrefAttr.startsWith("javascript") &&
          !hrefAttr.startsWith("#")
        ) {
          if (decodeURIComponent(link.pathname) === currentPath) {
            isCurrentParent = true;
          }
        }
      });
    }

    // If it is the parent of current page, add active class and marker
    if (isCurrentParent) {
      item.classList.add("active");
      item.classList.add("current-page-parent");
    }

    item.addEventListener("mouseenter", () => {
      item.classList.add("active");
    });

    item.addEventListener("mouseleave", () => {
      // Only remove if it's NOT the current page parent
      if (!item.classList.contains("current-page-parent")) {
        item.classList.remove("active");
      }
    });

    if (submenu) {
      submenu.addEventListener("mouseenter", () => {
        item.classList.add("active");
      });

      submenu.addEventListener("mouseleave", () => {
        if (!item.classList.contains("current-page-parent")) {
          item.classList.remove("active");
        }
      });
    }
  });
});

// sub menu on click to open sub sub menu
document.addEventListener("DOMContentLoaded", function () {
  const tabLinks = document.querySelectorAll('[data-bs-toggle="tab"], .header [data-bs-toggle="pill"]');

  tabLinks.forEach(function (tabLink) {
    tabLink.addEventListener("mouseenter", function () {
      if (window.innerWidth >= 992) {
        const tabTrigger = new bootstrap.Tab(tabLink);
        tabTrigger.show();
      }
    });
  });
});

// Button hover Effects
document.querySelectorAll(".button-hover-effect").forEach((button) => {
  button.addEventListener("mousemove", function (e) {
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    this.style.setProperty("--x", x + "px");
    this.style.setProperty("--y", y + "px");
  });
});

// Hamburger Menu js
// Hamburger Menu js
const burgAnimation = () => {
  const burger = document.querySelector(".svgburg");
  if (!burger) return;

  const path1 = document.querySelector(".path1");
  const path2 = document.querySelector(".path2");
  const mline = document.querySelector(".mline");

  burger.addEventListener("click", () => {
    if (path1) path1.classList.toggle("cross");
    if (path2) path2.classList.toggle("cross");
    if (mline) mline.classList.toggle("hide");
  });
};
burgAnimation();


// Close Navbar on Outside Click (All Devices)
document.addEventListener("click", function (event) {

  const navbarCollapse = document.querySelector(".navbar-collapse");
  const navbarToggler = document.querySelector(".navbar-toggler");

  if (
    navbarCollapse &&
    navbarCollapse.classList.contains("show") &&
    !navbarCollapse.contains(event.target) &&
    (!navbarToggler || !navbarToggler.contains(event.target))
  ) {
    try {
      const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
      if (bsCollapse) {
        bsCollapse.hide();
      } else {
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    } catch (e) {
      navbarCollapse.classList.remove("show");
    }

    const path1 = document.querySelector(".path1");
    const path2 = document.querySelector(".path2");
    const mline = document.querySelector(".mline");
    if (path1) path1.classList.remove("cross");
    if (path2) path2.classList.remove("cross");
    if (mline) mline.classList.remove("hide");
  }
});

// Mobile Menu Accordion Structure (<767px)
document.addEventListener("DOMContentLoaded", function () {
  const mobileBreakpoint = 767;

  function handleMobileMenuStructure() {
    const isMobile = window.innerWidth <= mobileBreakpoint;

    document.querySelectorAll(".nav-item.has-submenu").forEach(menuItem => {
      const desktopContainer = menuItem.querySelector(".submenu-col.industry-col.tab-content");
      const triggers = menuItem.querySelectorAll(".submenu-col.services-col .submenu-link[data-bs-target]");

      triggers.forEach(trigger => {
        const targetId = trigger.getAttribute("data-bs-target");
        if (!targetId) return;

        let targetPane = null;

        if (targetId) {
          // Prefer getElementById for #id targets (avoids invalid selector crashes)
          const rawId = targetId.startsWith("#") ? targetId.slice(1) : targetId;
          targetPane = document.getElementById(rawId);

          // Fallback to querySelector only if needed (and safely)
          if (!targetPane) {
            try {
              targetPane = document.querySelector(targetId);
            } catch (err) {
              console.warn("Invalid data-bs-target selector:", targetId, err);
              targetPane = null;
            }
          }
        }

        if (targetPane) {
          if (isMobile) {
            const parentLi = trigger.closest(".nav-item");
            if (parentLi && !parentLi.contains(targetPane)) {
              parentLi.appendChild(targetPane);
            }
          } else {
            if (desktopContainer && !desktopContainer.contains(targetPane)) {
              desktopContainer.appendChild(targetPane);
            }
          }
        }
      });
    });
  }

  // Run on load
  handleMobileMenuStructure();

  // Run on resize
  window.addEventListener("resize", handleMobileMenuStructure);
});

// Universal Sub Menu Click Toggle
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".has-submenu > .dropdown-toggle");

  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener("click", function (e) {
      e.preventDefault();
      let parentLi = this.parentElement;
      let submenu = parentLi.querySelector(".submenu");

      if (parentLi.classList.contains("sub-menu-opened")) {
        // Close
        if (submenu) submenu.classList.remove("open");
        parentLi.classList.remove("sub-menu-opened");
      } else {
        // Close all other open submenus
        document.querySelectorAll(".has-submenu.sub-menu-opened").forEach(function (openItem) {
          openItem.classList.remove("sub-menu-opened");
          const openSub = openItem.querySelector(".submenu");
          if (openSub) openSub.classList.remove("open");
        });

        // Open this one
        if (submenu) submenu.classList.add("open");
        parentLi.classList.add("sub-menu-opened");
      }
    });
  });
});

// Close submenu on outside click (Universal)
document.addEventListener("click", function (e) {
  if (!e.target.closest(".has-submenu")) {
    document.querySelectorAll(".has-submenu.sub-menu-opened").forEach(function (openItem) {
      openItem.classList.remove("sub-menu-opened");
      const openSub = openItem.querySelector(".submenu");
      if (openSub) openSub.classList.remove("open");
    });
  }
});

const cards = document.querySelectorAll(".card");
let lastActive = document.querySelector(".card.active") || cards[0] || null;

cards.forEach((card) => {
  // 🖱️ Desktop hover effect (your original code)
  card.addEventListener("mouseenter", () => {
    if (window.innerWidth >= 768) {
      cards.forEach((c) => c.classList.remove("active"));
      card.classList.add("active");
      lastActive = card;
    }
  });

  card.addEventListener("mouseleave", () => {
    if (window.innerWidth >= 768) {
      cards.forEach((c) => c.classList.remove("active"));
      if (lastActive) lastActive.classList.add("active");
    }
  });

  // 📱 Mobile click effect (<767px)
  card.addEventListener("click", () => {
    if (window.innerWidth < 768) {
      cards.forEach((c) => c.classList.remove("active"));
      card.classList.add("active");
      lastActive = card;
    }
  });
});

// Digital Marketing page Challenging section js
const accordionItems = document.querySelectorAll(
  ".challenges-accordion-section .accordion-item"
);

accordionItems.forEach((item, index) => {
  const collapse = item.querySelector(".accordion-collapse");
  if (!collapse) return;

  // Pre-add 'open' class to the first item if it is already shown
  if (index === 0 && collapse.classList.contains("show")) {
    item.classList.add("open");
  }

  // When the collapse opens
  collapse.addEventListener("show.bs.collapse", () => {
    item.classList.add("open");
  });

  // When the collapse closes
  collapse.addEventListener("hide.bs.collapse", () => {
    item.classList.remove("open");
  });
});

// FAQ Section js
document
  .querySelectorAll(".faq-accordion .accordion-item")
  .forEach((item, index) => {
    const button = item.querySelector(".accordion-button");
    const collapse = item.querySelector(".accordion-collapse");

    if (!collapse) return;

    // ✅ Default open (first item)
    if (index === 0) {
      item.classList.add("open");
    }

    // ✅ Toggle 'open' class automatically with Bootstrap collapse
    collapse.addEventListener("show.bs.collapse", () => {
      item.classList.add("open");
    });

    collapse.addEventListener("hide.bs.collapse", () => {
      item.classList.remove("open");
    });
  });


// home service Testimonial Swiper js start
// const swiper = new Swiper(".testimonial-swiper", {
//   direction: "horizontal",
//   loop: true,
//   slidesPerView: 1,
//   spaceBetween: 30,
//   speed: 1000, // Standard speed for mobile swipe
//   autoplay: false, // Managed manually
//   allowTouchMove: true,
//   centeredSlides: true, // Activity class on middle slide for mobile

//   // Responsive breakpoints
//   breakpoints: {
//     0: {
//       slidesPerView: 1.1, // Show a bit of next slide for cue
//       spaceBetween: 15,
//       centeredSlides: true,
//     },
//     768: {
//       slidesPerView: 2,
//       spaceBetween: 24,
//       centeredSlides: false,
//     },
//     992: {
//       slidesPerView: 3,
//       spaceBetween: 24,
//       centeredSlides: false, // No center active on desktop
//     },
//     1200: {
//       slidesPerView: 4,
//       spaceBetween: 30,
//       centeredSlides: false,
//     },
//   },
// });

// const swiperContainer = document.querySelector(".testimonial-swiper");
// let scrollAnimationId;
// let isScrolling = false;
// let scrollPosition = 0;
// let scrollSpeed = 0.8;

// // Desktop Manual Scroll Logic
// function startContinuousScroll() {
//   if (isScrolling) return;
//   if (!swiper.slides || swiper.slides.length === 0) return;

//   isScrolling = true;
//   swiper.autoplay.stop(); // Ensure native autoplay is off

//   function animate() {
//     if (!isScrolling) return;

//     // Only run this logic on Desktop
//     if (window.innerWidth < 992) {
//       stopContinuousScroll();
//       handleMobileView();
//       return;
//     }

//     scrollPosition -= scrollSpeed;
//     if (!swiper.slides[0]) return;

//     const slideWithMargin = swiper.slides[0].offsetWidth + swiper.params.spaceBetween;

//     if (Math.abs(scrollPosition) >= slideWithMargin) {
//       scrollPosition += slideWithMargin;
//       const firstSlide = swiper.slides[0];
//       swiper.wrapperEl.appendChild(firstSlide);
//       swiper.update();
//     }

//     swiper.wrapperEl.style.transform = `translateX(${scrollPosition}px)`;
//     swiper.wrapperEl.style.transition = "none";

//     scrollAnimationId = requestAnimationFrame(animate);
//   }
//   animate();
// }

// function stopContinuousScroll() {
//   isScrolling = false;
//   if (scrollAnimationId) {
//     cancelAnimationFrame(scrollAnimationId);
//   }
// }

// // Mobile Native Autoplay Logic
// function handleMobileView() {
//   // Mobile: < 992px
//   // Stop manual stuff
//   stopContinuousScroll();

//   // Reset styles set by manual scroll
//   swiper.wrapperEl.style.transform = "";
//   swiper.wrapperEl.style.transition = "";

//   // Enable Native Autoplay
//   // We need to configure params dynamically if needed, but simple start is usually enough
//   // Check if already running to avoid restart spam
//   if (!swiper.autoplay.running) {
//     swiper.params.autoplay.delay = 2500;
//     swiper.params.autoplay.disableOnInteraction = false;
//     swiper.autoplay.start();
//   }

//   // Force immediate update to fix "first screen bad UI" issue
//   swiper.update();
//   swiper.slideToLoop(swiper.realIndex, 0, false);
// }

// // Hover Logic (Desktop Only)
// if (swiperContainer) {
//   swiperContainer.addEventListener("mouseenter", function () {
//     if (window.innerWidth >= 992) {
//       // Instant Stop Logic (Manual)
//       stopContinuousScroll();
//     }
//   });

//   swiperContainer.addEventListener("mouseleave", function () {
//     if (window.innerWidth >= 992) {
//       // Desktop Resume: Instant Resume (Manual)
//       startContinuousScroll();
//     }
//   });
// }

// // Init based on screen size
// let isDesktopMode = -1; // -1: undefined, 0: mobile, 1: desktop

// function initSliderMode() {
//   const currentWidth = window.innerWidth;
//   const isNowDesktop = currentWidth >= 992;

//   // Only execute if state changes
//   if (isNowDesktop && isDesktopMode !== 1) {
//     isDesktopMode = 1;
//     startContinuousScroll();
//   } else if (!isNowDesktop && isDesktopMode !== 0) {
//     isDesktopMode = 0;
//     handleMobileView();
//   }
// }

// // Run on load and resize
// if (swiperContainer) {
//   initSliderMode();
//   window.addEventListener("resize", () => {
//     initSliderMode();
//   });
// }

// home service Testimonial Swiper js end

// Achievement Counter Animation js
document.addEventListener("DOMContentLoaded", function () {
  function animateCounter(element, targetValue, duration = 1800) {
    const startValue = 0;
    const startTime = performance.now();
    const isPercentage = targetValue.toString().includes("+");

    // Remove + sign for calculation
    const numericTarget = parseInt(targetValue.toString().replace("+", ""));

    function updateCounter(currentTime) {
      const elapsedTime = currentTime - startTime;
      const progress = Math.min(elapsedTime / duration, 1);

      // Easing function for smooth animation
      const easeOutCubic = 1 - Math.pow(1 - progress, 3);
      const currentValue = Math.floor(
        startValue + (numericTarget - startValue) * easeOutCubic
      );

      // Add + sign back if it was there
      element.textContent = isPercentage ? currentValue + "+" : currentValue;

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      } else {
        // Ensure final value is exact
        element.textContent = targetValue;
      }
    }

    requestAnimationFrame(updateCounter);
  }

  function initCounterAnimation() {
    const achievementNumbers = document.querySelectorAll(".achievement-number");
    const achievementSection = document.querySelector(
      ".our-achievement-section"
    );

    if (!achievementSection || achievementNumbers.length === 0) return;

    let hasAnimated = false;

    function checkVisibility() {
      const rect = achievementSection.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      // Trigger animation when section is 80% visible
      if (rect.top <= windowHeight * 0.8 && rect.bottom >= 0 && !hasAnimated) {
        hasAnimated = true;

        achievementNumbers.forEach((numberElement, index) => {
          const targetValue = numberElement.textContent.trim();
          // Delay each counter by 200ms for staggered effect
          setTimeout(() => {
            animateCounter(numberElement, targetValue, 2500);
          }, index * 200);
        });

        // Remove scroll listener after animation
        window.removeEventListener("scroll", checkVisibility);
      }
    }

    // Initial check
    checkVisibility();

    // Listen for scroll events
    window.addEventListener("scroll", checkVisibility);
  }

  initCounterAnimation();
});


// Client Review Section: Swiper Implementation
document.addEventListener("DOMContentLoaded", () => {
  const reviewGrid = document.querySelector(".client-review-grid");
  if (!reviewGrid) return;

  // 1. Harvest Unique Cards (Source)
  const sourceCards = Array.from(reviewGrid.querySelectorAll(".client-review-card")).map(card => card.cloneNode(true));

  // Clear to start fresh
  reviewGrid.innerHTML = "";

  let swiperInstances = [];

  function initClientReviews() {
    // Cleanup
    swiperInstances.forEach(sw => sw.destroy(true, true));
    swiperInstances = [];
    reviewGrid.innerHTML = "";

    const width = window.innerWidth;
    const isMobile = width < 992;

    // Force Grid Styles to handle columns correctly
    if (isMobile) {
      reviewGrid.style.gridTemplateColumns = "1fr";
    } else {
      reviewGrid.style.gridTemplateColumns = "repeat(3, 1fr)";
    }

    if (isMobile) {
      // --- Mobile: 1 Column ---
      const col = document.createElement("div");
      col.classList.add("review-col", "swiper");
      col.style.overflow = "hidden"; // Ensure clip
      col.style.height = "100%";

      const wrapper = document.createElement("div");
      wrapper.classList.add("swiper-wrapper");

      sourceCards.forEach(card => {
        const slide = document.createElement("div");
        slide.classList.add("swiper-slide");
        slide.style.height = "auto";
        slide.style.marginBottom = "30px";
        slide.appendChild(card.cloneNode(true));
        wrapper.appendChild(slide);
      });

      col.appendChild(wrapper);
      reviewGrid.appendChild(col);

      const sw = new Swiper(col, {
        direction: "vertical",
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 0, // Handled by margin
        speed: 3000,
        allowTouchMove: true,
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
        },
        freeMode: true
      });

      swiperInstances.push(sw);

    } else {
      // --- Desktop: 3 Columns ---
      const numCols = 3;
      const cols = [];

      for (let i = 0; i < numCols; i++) {
        const col = document.createElement("div");
        col.classList.add("review-col", "swiper");
        col.style.overflow = "hidden";
        col.style.height = "100%";

        const wrapper = document.createElement("div");
        wrapper.classList.add("swiper-wrapper");
        col.appendChild(wrapper);
        reviewGrid.appendChild(col);
        cols.push(wrapper);
      }

      // Distribute
      // MANDATORY: Duplicate cards to ensure infinite loop works.
      const desktopSource = [...sourceCards, ...sourceCards, ...sourceCards, ...sourceCards];

      desktopSource.forEach((card, index) => {
        const colIndex = index % numCols;
        const slide = document.createElement("div");
        slide.classList.add("swiper-slide");
        slide.style.height = "auto";
        slide.style.marginBottom = "30px";

        if (colIndex === 1) {
          slide.style.transform = "scaleY(-1)";
        }

        slide.appendChild(card.cloneNode(true));
        cols[colIndex].appendChild(slide);
      });

      // Init
      cols.forEach((wrapper, index) => {
        const parentCol = wrapper.parentElement;
        const isMiddle = index === 1;

        // VISUAL FLIP: Flip the middle container to make it scroll Down visually
        if (isMiddle) {
          parentCol.style.transform = "scaleY(-1)";
        }

        const sw = new Swiper(parentCol, {
          direction: "vertical",
          loop: true,
          slidesPerView: "auto",
          spaceBetween: 0,
          speed: 4000,
          allowTouchMove: true,
          autoplay: {
            delay: 0,
            disableOnInteraction: false,
            // FORCE STANDARD DIRECTION (More reliable for stopping)
            pauseOnMouseEnter: false
          },
          freeMode: true
        });

        // Manual Instant Stop/Start
        parentCol.addEventListener('mouseenter', () => {
          sw.autoplay.stop();
        });
        parentCol.addEventListener('mouseleave', () => {
          sw.autoplay.start();
        });

        swiperInstances.push(sw);
      });
    }
  }

  initClientReviews();

  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(initClientReviews, 200);
  });
});


// About us page Mission & Vision Timeline Animation 
document.addEventListener("DOMContentLoaded", () => {

  // Mission & Vision Timeline Animation
  const timelineLine = document.querySelector(".timeline-line");
  const missionVisionSection = document.querySelector(".mission-vision-section");

  if (timelineLine && missionVisionSection) {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".timeline-line::after", {
      scrollTrigger: {
        trigger: ".mission-vision-wrapper",
        start: "top 80%",
        end: "bottom 80%",
        scrub: true,
        onUpdate: (self) => {
          // Update the height of the fill line via custom property or direct style
          // Since pseudo-elements are hard to target with JS, we use a CSS variable
          document.documentElement.style.setProperty('--timeline-progress', `${self.progress * 100}%`);
          timelineLine.style.setProperty('--timeline-height', `${self.progress * 100}%`);
        }
      }
    });

    // Animate the line using a more robust method: a real div for the fill
    const fillLine = document.createElement('div');
    fillLine.className = 'timeline-fill';
    timelineLine.appendChild(fillLine);

    gsap.to(fillLine, {
      height: "100%",
      ease: "none",
      scrollTrigger: {
        trigger: ".mission-vision-wrapper",
        start: "top center",
        end: "bottom center",
        scrub: true,
      }
    });
  }

  // Our Values Path Drawing Animation
  const mainPath = document.querySelector(".values-svg-path .main-path");
  const valuesSection = document.querySelector(".our-values-section");

  if (mainPath && valuesSection) {
    // Initial setup
    const pathLength = mainPath.getTotalLength();

    // Set initial state
    gsap.set(mainPath, {
      strokeDasharray: pathLength,
      strokeDashoffset: pathLength
    });

    // Drawing animation
    gsap.to(mainPath, {
      strokeDashoffset: 0,
      duration: 4,
      ease: "none",
      scrollTrigger: {
        trigger: ".values-timeline-container",
        start: "top 70%",
        toggleActions: "play none none reverse"
      }
    });

    // Refresh scrolltrigger after layout stabilizes
    window.addEventListener('load', () => {
      ScrollTrigger.refresh();
    });
  }

  // Mobile Vertical Line Animation (New)
  const mobileLineFill = document.querySelector(".values-mobile-line-fill");

  if (mobileLineFill && valuesSection) {
    gsap.to(mobileLineFill, {
      height: "100%",
      ease: "none",
      scrollTrigger: {
        trigger: ".values-timeline-container",
        start: "top center",
        end: "bottom center",
        scrub: true
      }
    });
  }
});


// Mobile App Development Page - Service Slider (Main + Thumbs)
document.addEventListener("DOMContentLoaded", function () {
  const serviceSlider2 = document.querySelector(".serviceSlider2");
  const serviceSliderThumb = document.querySelector(".serviceSlider.service_two_thumb_slider");

  if (serviceSlider2 && serviceSliderThumb) {
    // Initialize Thumbs Slider
    const swiperThumbs = new Swiper(".serviceSlider.service_two_thumb_slider", {
      spaceBetween: 30,
      slidesPerView: "auto",
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
        0: {
          spaceBetween: 15,
          slidesPerView: 1,
        },
        768: {
          spaceBetween: 24,
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        }
      }
    });

    // Initialize Main Slider
    const swiperMain = new Swiper(".serviceSlider2", {
      spaceBetween: 10,
      effect: "slide",
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      thumbs: {
        swiper: swiperThumbs,
      },
    });
  }
});

// Digital Creations Slider
document.addEventListener("DOMContentLoaded", function () {
  const digitalCreationSlider = document.querySelector(".digital-creations-slider");
  if (digitalCreationSlider) {
    const swiperDigital = new Swiper(".digital-creations-slider", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".digital-button-next",
        prevEl: ".digital-button-prev",
      },
      breakpoints: {
        992: {
          slidesPerView: 1.1,
          spaceBetween: 40,
        },
      },
    });
  }
});


// Case Studies Load More Logic
document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".case-studies-listing-section");
  if (!section) return;

  const limit = 8;

  const updateView = () => {
    let activePanel = section.querySelector(".tab-pane.active");
    if (!activePanel) {
      activePanel = section;
    }


    const cards = activePanel.querySelectorAll(".case-study-card");
    const isExpanded = activePanel.dataset.expanded === "true";

    const btnContainer = activePanel.querySelector("#case-studies-load-more");

    if (!btnContainer && cards.length === 0) return;
    const hasMoreItems = cards.length > limit;
    const shouldShowButton = hasMoreItems && !isExpanded;

    cards.forEach((card, idx) => {
      if (isExpanded || idx < limit) {
        card.style.display = "";
      } else {
        card.style.display = "none";
      }
    });

    if (btnContainer) {
      if (shouldShowButton) {
        btnContainer.style.display = "";
      } else {
        btnContainer.style.display = "none";
      }
    }
  };

  // Bind events
  updateView();
  section.querySelectorAll('button[data-bs-toggle="pill"]').forEach(tab => {
    tab.addEventListener('shown.bs.tab', updateView);
  });

  // Use event delegation for the buttons
  section.addEventListener("click", (e) => {
    const btn = e.target.closest("#case-studies-load-more .button");
    if (btn) {
      e.preventDefault();

      let activePanel = section.querySelector(".tab-pane.active");
      if (!activePanel) {
        activePanel = section;
      }

      if (activePanel) {
        activePanel.dataset.expanded = "true";
        updateView();
      }
    }
  });
});

// Case Study Detail page - Challenge & Solution Animation
document.addEventListener("DOMContentLoaded", function () {
  const connectorSection = document.querySelector(".challenge-solution-connector");

  if (connectorSection) {
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger);

      const lineFill = connectorSection.querySelector(".connector-line-fill");
      const bottomDot = connectorSection.querySelector(".connector-dot.bottom-dot");
      const solutionBox = document.querySelector(".solution-box");
      const challengeBox = document.querySelector(".challenge-box");

      if (challengeBox) {
        gsap.from(challengeBox, {
          opacity: 0,
          y: 30,
          duration: 0.8,
          scrollTrigger: {
            trigger: challengeBox,
            start: "top 80%",
            toggleActions: "play none none reverse"
          }
        });
      }

      if (lineFill) {
        gsap.to(lineFill, {
          height: "100%",
          ease: "none",
          scrollTrigger: {
            trigger: connectorSection,
            start: "top 60%",
            end: "bottom 60%",
            scrub: true,
            onUpdate: (self) => {
              if (self.progress > 0.95) {
                if (bottomDot) bottomDot.classList.add("active");
              } else {
                if (bottomDot) bottomDot.classList.remove("active");
              }
            }
          }
        });
      }

      if (solutionBox) {
        gsap.from(solutionBox, {
          opacity: 0,
          y: 30,
          duration: 0.8,
          scrollTrigger: {
            trigger: solutionBox,
            start: "top 75%",
            toggleActions: "play none none reverse"
          }
        });
      }
    }
  }
});

// E-commerce Solutions Section Interaction
document.addEventListener("DOMContentLoaded", () => {
  const solutionItems = document.querySelectorAll(".ecommerce-solutions-section .solution-item");

  solutionItems.forEach(item => {
    item.addEventListener("mouseenter", () => {
      // Remove active from all others
      solutionItems.forEach(sib => sib.classList.remove("active"));
      // Add active to hovering item
      item.classList.add("active");
    });
  });
});