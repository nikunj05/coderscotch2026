$(document).ready(function () {
  // Menu active state on hover + current page parent
  const currentPath = decodeURIComponent(window.location.pathname);

  $(".nav-item.has-submenu").each(function () {
    const $item = $(this);
    const $submenu = $item.find(".submenu").first();
    let isCurrentParent = false;

    if ($submenu.length) {
      $submenu.find("a").each(function () {
        const hrefAttr = $(this).attr("href");

        if (
          hrefAttr &&
          hrefAttr !== "#" &&
          !hrefAttr.startsWith("javascript") &&
          !hrefAttr.startsWith("#")
        ) {
          if (decodeURIComponent(this.pathname) === currentPath) {
            isCurrentParent = true;
          }
        }
      });
    }

    if (isCurrentParent) {
      $item.addClass("active current-page-parent");
    }

    $item.on("mouseenter", function () {
      $item.addClass("active");
    });

    $item.on("mouseleave", function () {
      if (!$item.hasClass("current-page-parent")) {
        $item.removeClass("active");
      }
    });

    if ($submenu.length) {
      $submenu.on("mouseenter", function () {
        $item.addClass("active");
      });

      $submenu.on("mouseleave", function () {
        if (!$item.hasClass("current-page-parent")) {
          $item.removeClass("active");
        }
      });
    }
  });

  // Tabs on hover
  $('[data-bs-toggle="tab"], .header [data-bs-toggle="pill"]').each(function () {
    $(this).on("mouseenter", function () {
      if ($(window).width() >= 992) {
        const tabTrigger = new bootstrap.Tab(this);
        tabTrigger.show();
      }
    });
  });

  // Button hover effects
  $(".button-hover-effect").on("mousemove", function (e) {
    const rect = this.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    $(this).css("--x", x + "px");
    $(this).css("--y", y + "px");
  });

  // Hamburger menu
  function burgAnimation() {
    const $burger = $(".svgburg");
    if (!$burger.length) return;

    $burger.on("click", function () {
      $(".path1").toggleClass("cross");
      $(".path2").toggleClass("cross");
      $(".mline").toggleClass("hide");
    });
  }
  burgAnimation();

  // Close navbar on outside click
  $(document).on("click", function (event) {
    const $navbarCollapse = $(".navbar-collapse");
    const $navbarToggler = $(".navbar-toggler");

    if (
      $navbarCollapse.length &&
      $navbarCollapse.hasClass("show") &&
      !$navbarCollapse.is(event.target) &&
      $navbarCollapse.has(event.target).length === 0 &&
      (!$navbarToggler.length ||
        (!$navbarToggler.is(event.target) &&
          $navbarToggler.has(event.target).length === 0))
    ) {
      try {
        const collapseEl = $navbarCollapse[0];
        const bsCollapse = bootstrap.Collapse.getInstance(collapseEl);

        if (bsCollapse) {
          bsCollapse.hide();
        } else {
          new bootstrap.Collapse(collapseEl).hide();
        }
      } catch (e) {
        $navbarCollapse.removeClass("show");
      }

      $(".path1, .path2").removeClass("cross");
      $(".mline").removeClass("hide");
    }
  });

  // Mobile menu accordion structure
  const mobileBreakpoint = 767;

  function handleMobileMenuStructure() {
    const isMobile = $(window).width() <= mobileBreakpoint;

    $(".nav-item.has-submenu").each(function () {
      const $menuItem = $(this);
      const $desktopContainer = $menuItem.find(".submenu-col.industry-col.tab-content").first();
      const $triggers = $menuItem.find(".submenu-col.services-col .submenu-link[data-bs-target]");

      $triggers.each(function () {
        const targetId = $(this).attr("data-bs-target");
        if (!targetId) return;

        let targetPane = null;
        const rawId = targetId.startsWith("#") ? targetId.slice(1) : targetId;

        targetPane = document.getElementById(rawId);

        if (!targetPane) {
          try {
            targetPane = document.querySelector(targetId);
          } catch (err) {
            console.warn("Invalid data-bs-target selector:", targetId, err);
            targetPane = null;
          }
        }

        if (targetPane) {
          if (isMobile) {
            const $parentLi = $(this).closest(".nav-item");
            if ($parentLi.length && !$parentLi[0].contains(targetPane)) {
              $parentLi.append(targetPane);
            }
          } else {
            if ($desktopContainer.length && !$desktopContainer[0].contains(targetPane)) {
              $desktopContainer.append(targetPane);
            }
          }
        }
      });
    });
  }

  handleMobileMenuStructure();
  $(window).on("resize", handleMobileMenuStructure);

  // Universal submenu click toggle
  $(".has-submenu > .dropdown-toggle").on("click", function (e) {
    e.preventDefault();

    const $parentLi = $(this).parent();
    const $submenu = $parentLi.find(".submenu").first();

    if ($parentLi.hasClass("sub-menu-opened")) {
      $submenu.removeClass("open");
      $parentLi.removeClass("sub-menu-opened");
    } else {
      $(".has-submenu.sub-menu-opened").each(function () {
        $(this).removeClass("sub-menu-opened");
        $(this).find(".submenu").first().removeClass("open");
      });

      $submenu.addClass("open");
      $parentLi.addClass("sub-menu-opened");
    }
  });

  // Close submenu on outside click
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".has-submenu").length) {
      $(".has-submenu.sub-menu-opened").each(function () {
        $(this).removeClass("sub-menu-opened");
        $(this).find(".submenu").first().removeClass("open");
      });
    }
  });

  // Cards hover/click effect
  const $cards = $(".card");
  let $lastActive = $(".card.active").first().length ? $(".card.active").first() : $cards.first();

  $cards.each(function () {
    const $card = $(this);

    $card.on("mouseenter", function () {
      if ($(window).width() >= 768) {
        $cards.removeClass("active");
        $card.addClass("active");
        $lastActive = $card;
      }
    });

    $card.on("mouseleave", function () {
      if ($(window).width() >= 768) {
        $cards.removeClass("active");
        if ($lastActive && $lastActive.length) {
          $lastActive.addClass("active");
        }
      }
    });

    $card.on("click", function () {
      if ($(window).width() < 768) {
        $cards.removeClass("active");
        $card.addClass("active");
        $lastActive = $card;
      }
    });
  });

  // Digital Marketing page accordion
  $(".challenges-accordion-section .accordion-item").each(function (index) {
    const $item = $(this);
    const collapse = $item.find(".accordion-collapse")[0];
    if (!collapse) return;

    if (index === 0 && $(collapse).hasClass("show")) {
      $item.addClass("open");
    }

    collapse.addEventListener("show.bs.collapse", function () {
      $item.addClass("open");
    });

    collapse.addEventListener("hide.bs.collapse", function () {
      $item.removeClass("open");
    });
  });

  // FAQ accordion
  $(".faq-accordion .accordion-item").each(function (index) {
    const $item = $(this);
    const collapse = $item.find(".accordion-collapse")[0];
    if (!collapse) return;

    if (index === 0) {
      $item.addClass("open");
    }

    collapse.addEventListener("show.bs.collapse", function () {
      $item.addClass("open");
    });

    collapse.addEventListener("hide.bs.collapse", function () {
      $item.removeClass("open");
    });
  });

  // Achievement Counter Animation
  function animateCounter(element, targetValue, duration = 1800) {
    const startValue = 0;
    const startTime = performance.now();
    const isPlus = targetValue.toString().includes("+");
    const numericTarget = parseInt(targetValue.toString().replace("+", ""));

    function updateCounter(currentTime) {
      const elapsedTime = currentTime - startTime;
      const progress = Math.min(elapsedTime / duration, 1);
      const easeOutCubic = 1 - Math.pow(1 - progress, 3);
      const currentValue = Math.floor(
        startValue + (numericTarget - startValue) * easeOutCubic
      );

      $(element).text(isPlus ? currentValue + "+" : currentValue);

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      } else {
        $(element).text(targetValue);
      }
    }

    requestAnimationFrame(updateCounter);
  }

  function initCounterAnimation() {
    const $achievementNumbers = $(".achievement-number");
    const $achievementSection = $(".our-achievement-section");

    if (!$achievementSection.length || !$achievementNumbers.length) return;

    let hasAnimated = false;

    function checkVisibility() {
      const rect = $achievementSection[0].getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (rect.top <= windowHeight * 0.8 && rect.bottom >= 0 && !hasAnimated) {
        hasAnimated = true;

        $achievementNumbers.each(function (index) {
          const targetValue = $(this).text().trim();
          const el = this;

          setTimeout(function () {
            animateCounter(el, targetValue, 2500);
          }, index * 200);
        });

        $(window).off("scroll", checkVisibility);
      }
    }

    checkVisibility();
    $(window).on("scroll", checkVisibility);
  }

  initCounterAnimation();

  // E-commerce Solutions Section Interaction
  $(".ecommerce-solutions-section .solution-item").on("mouseenter", function () {
    $(".ecommerce-solutions-section .solution-item").removeClass("active");
    $(this).addClass("active");
  });

  // Case Studies Load More Logic
  const $section = $(".case-studies-listing-section");
  if ($section.length) {
    const limit = 8;

    function updateView() {
      let $activePanel = $section.find(".tab-pane.active").first();
      if (!$activePanel.length) {
        $activePanel = $section;
      }

      const $cards = $activePanel.find(".case-study-card");
      const isExpanded = $activePanel.data("expanded") === true || $activePanel.attr("data-expanded") === "true";
      const $btnContainer = $activePanel.find("#case-studies-load-more").first();

      if (!$btnContainer.length && !$cards.length) return;

      const hasMoreItems = $cards.length > limit;
      const shouldShowButton = hasMoreItems && !isExpanded;

      $cards.each(function (idx) {
        if (isExpanded || idx < limit) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });

      if ($btnContainer.length) {
        if (shouldShowButton) {
          $btnContainer.show();
        } else {
          $btnContainer.hide();
        }
      }
    }

    updateView();

    $section.find('button[data-bs-toggle="pill"]').each(function () {
      this.addEventListener("shown.bs.tab", updateView);
    });

    $section.on("click", "#case-studies-load-more .button", function (e) {
      e.preventDefault();

      let $activePanel = $section.find(".tab-pane.active").first();
      if (!$activePanel.length) {
        $activePanel = $section;
      }

      if ($activePanel.length) {
        $activePanel.attr("data-expanded", "true");
        updateView();
      }
    });
  }
});

// Client Review Section Swiper
$(document).ready(function () {
  const $reviewGrid = $(".client-review-grid");
  if (!$reviewGrid.length) return;

  const sourceCards = $reviewGrid.find(".client-review-card").map(function () {
    return $(this).clone()[0];
  }).get();

  $reviewGrid.empty();

  let swiperInstances = [];

  function initClientReviews() {
    swiperInstances.forEach(sw => sw.destroy(true, true));
    swiperInstances = [];
    $reviewGrid.empty();

    const width = $(window).width();
    const isMobile = width < 992;

    if (isMobile) {
      $reviewGrid.css("grid-template-columns", "1fr");

      const $col = $('<div class="review-col swiper"></div>').css({
        overflow: "hidden",
        height: "100%"
      });

      const $wrapper = $('<div class="swiper-wrapper"></div>');

      sourceCards.forEach(card => {
        const $slide = $('<div class="swiper-slide"></div>').css({
          height: "auto",
          marginBottom: "30px"
        });
        $slide.append($(card).clone());
        $wrapper.append($slide);
      });

      $col.append($wrapper);
      $reviewGrid.append($col);

      const sw = new Swiper($col[0], {
        direction: "vertical",
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 0,
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
      $reviewGrid.css("grid-template-columns", "repeat(3, 1fr)");

      const numCols = 3;
      const cols = [];

      for (let i = 0; i < numCols; i++) {
        const $col = $('<div class="review-col swiper"></div>').css({
          overflow: "hidden",
          height: "100%"
        });

        const $wrapper = $('<div class="swiper-wrapper"></div>');
        $col.append($wrapper);
        $reviewGrid.append($col);
        cols.push($wrapper);
      }

      const desktopSource = [...sourceCards, ...sourceCards, ...sourceCards, ...sourceCards];

      desktopSource.forEach((card, index) => {
        const colIndex = index % numCols;
        const $slide = $('<div class="swiper-slide"></div>').css({
          height: "auto",
          marginBottom: "30px"
        });

        if (colIndex === 1) {
          $slide.css("transform", "scaleY(-1)");
        }

        $slide.append($(card).clone());
        cols[colIndex].append($slide);
      });

      cols.forEach(($wrapper, index) => {
        const parentCol = $wrapper.parent()[0];
        const isMiddle = index === 1;

        if (isMiddle) {
          $(parentCol).css("transform", "scaleY(-1)");
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
            pauseOnMouseEnter: false
          },
          freeMode: true
        });

        $(parentCol).on("mouseenter", function () {
          sw.autoplay.stop();
        });

        $(parentCol).on("mouseleave", function () {
          sw.autoplay.start();
        });

        swiperInstances.push(sw);
      });
    }
  }

  initClientReviews();

  let resizeTimer;
  $(window).on("resize", function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(initClientReviews, 200);
  });
});

// GSAP/Swiper sections
$(window).on("load", function () {
  // Mission & Vision Timeline Animation
  const timelineLine = document.querySelector(".timeline-line");
  const missionVisionSection = document.querySelector(".mission-vision-section");

  if (timelineLine && missionVisionSection && typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    gsap.registerPlugin(ScrollTrigger);

    const fillLine = document.createElement("div");
    fillLine.className = "timeline-fill";
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

  if (mainPath && valuesSection && typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    const pathLength = mainPath.getTotalLength();

    gsap.set(mainPath, {
      strokeDasharray: pathLength,
      strokeDashoffset: pathLength
    });

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

    $(window).on("load", function () {
      ScrollTrigger.refresh();
    });
  }

  // Mobile Vertical Line Animation
  const mobileLineFill = document.querySelector(".values-mobile-line-fill");

  if (mobileLineFill && valuesSection && typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
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

  // AI Development Process Timeline Fill & Color Activation
  const timelineSection = document.querySelector(".ai-development-process");
  const timelineWrapper = document.querySelector(".process-timeline-wrapper");
  const lineFill = document.querySelector(".line-fill");
  const verticalLine = document.querySelector(".process-vertical-line");
  const stepItems = document.querySelectorAll(".process-step-item");

  if (timelineSection && lineFill && verticalLine && typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    gsap.registerPlugin(ScrollTrigger);

    let thresholds = [];

    const calculateThresholds = () => {
      const firstCircle = stepItems[0].querySelector(".step-number-circle");
      const lastCircle = stepItems[stepItems.length - 1].querySelector(".step-number-circle");
      const wrapperRect = timelineWrapper.getBoundingClientRect();

      const firstRect = firstCircle.getBoundingClientRect();
      const lastRect = lastCircle.getBoundingClientRect();
      const lineTop = (firstRect.top + firstRect.height / 2) - wrapperRect.top;
      const lineBottom = wrapperRect.bottom - (lastRect.top + lastRect.height / 2);

      verticalLine.style.top = `${lineTop}px`;
      verticalLine.style.bottom = `${lineBottom}px`;

      const lineRect = verticalLine.getBoundingClientRect();
      thresholds = Array.from(stepItems).map(item => {
        const circle = item.querySelector(".step-number-circle");
        const circleRect = circle.getBoundingClientRect();
        return (circleRect.top - lineRect.top) / lineRect.height;
      });
    };

    calculateThresholds();
    $(window).on("resize", calculateThresholds);

    gsap.fromTo(lineFill,
      { height: "0%" },
      {
        height: "100%",
        ease: "none",
        scrollTrigger: {
          trigger: timelineWrapper,
          start: "top 70%",
          end: "bottom 80%",
          scrub: 1,
          onUpdate: (self) => {
            const progress = self.progress;

            stepItems.forEach((item, index) => {
              const circle = item.querySelector(".step-number-circle");
              if (progress >= thresholds[index]) {
                circle.classList.add("active-circle");
              } else {
                circle.classList.remove("active-circle");
              }
            });
          }
        }
      }
    );

    ScrollTrigger.refresh();
  }
});

// Service Slider
$(document).ready(function () {
  if ($(".serviceSlider2").length && $(".serviceSlider.service_two_thumb_slider").length) {
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

    new Swiper(".serviceSlider2", {
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

  // Digital Creations Slider
  if ($(".digital-creations-slider").length) {
    new Swiper(".digital-creations-slider", {
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

  // Case Study Detail page animation
  const connectorSection = document.querySelector(".challenge-solution-connector");

  if (connectorSection && typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
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
});