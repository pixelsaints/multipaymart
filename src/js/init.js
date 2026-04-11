$(function () {

  var init = {

    sideMenu: function () {
      const ham = document.querySelector('.ham');
      const sidebar = document.querySelector('.sidebar');
      const overlay = document.querySelector('.overlay');
      const closeBtn = document.querySelector('.close-menu');

      if (!sidebar || !ham || !overlay || !closeBtn) return;

      // OPEN
      ham.addEventListener('click', (e) => {
        e.preventDefault();
        overlay.classList.add('active');
        setTimeout(() => {
          sidebar.classList.add('active');
        }, 500);
        document.body.style.overflow = 'hidden';
      });

      function closeSidebar() {
        sidebar.classList.remove('active');
        setTimeout(() => {
          overlay.classList.remove('active');
          document.body.style.overflow = '';
        }, 500);
      }

      closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        closeSidebar();
      });

      overlay.addEventListener('click', () => {
        closeSidebar();
      });
    },

    swiperSliders: function () {

      // Main Banner
      const swiper = new Swiper(".home-slider .swiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 16,
        // slidesPerView: "auto",
        centeredSlides: true,

        autoplay: {
          delay: 6000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },

        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    },

    drawer : function(){

      const triggers = document.querySelectorAll('[data-target]');
      const drawers = document.querySelectorAll('.drawer');
      const body = document.body;

      let activeDrawer = null;
      // gsap.set(document.querySelectorAll('.drawer-wrapper'), { yPercent: 100 });

      // 🔓 OPEN DRAWER
      triggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
          e.preventDefault();

          const target = trigger.getAttribute('data-target');
          const drawer = document.querySelector(`.drawer[data-src="${target}"]`);
          if (!drawer) return;

          // Close any open drawer first
          if (activeDrawer) closeDrawer(activeDrawer);

          activeDrawer = drawer;
          drawer.style.display = 'block';

          const overlay = drawer.querySelector('.drawer-overlay');
          const wrapper = drawer.querySelector('.drawer-wrapper');

          // Reset initial states
          gsap.set(overlay, { opacity: 0 });
          gsap.set(wrapper, { yPercent: 100 });

          // Timeline animation
          const tl = gsap.timeline();

          tl.to(overlay, {
            opacity: 1,
            duration: 0.4,
            ease: "power4.out"
          })
            .to(wrapper, {
              yPercent: 0,
              duration: 0.6,
              ease: "power4.out"
            }, "-=0.2"); // slight overlap

          body.classList.add('drawer-open');
          document.body.style.overflow = 'hidden';
        });
      });

      // 🔒 CLOSE DRAWER
      const closeDrawer = (drawer) => {
        const overlay = drawer.querySelector('.drawer-overlay');
        const wrapper = drawer.querySelector('.drawer-wrapper');

        const tl = gsap.timeline({
          onComplete: () => {
            drawer.style.display = 'none';
            activeDrawer = null;
          }
        });

        tl.to(wrapper, {
          yPercent: 100,
          duration: 0.6,
          ease: "power4.in"
        })
          .to(overlay, {
            opacity: 0,
            duration: 0.4,
            ease: "power4.in"
          }, "-=0.1");

        body.classList.remove('drawer-open');
        document.body.style.overflow = '';
      };

      // 🎯 Attach close events
      drawers.forEach(drawer => {
        const overlay = drawer.querySelector('.drawer-overlay');
        const closeBtn = drawer.querySelector('.drawer-close');

        overlay?.addEventListener('click', () => closeDrawer(drawer));

        closeBtn?.addEventListener('click', (e) => {
          e.preventDefault();
          closeDrawer(drawer);
        });
      });

      // ⌨️ ESC key
      document.addEventListener('keydown', (e) => {
        if (e.key === "Escape" && activeDrawer) {
          closeDrawer(activeDrawer);
        }
      });
    }

  };

  // LOAD Functions
  $(window).on("load", function () {
    init.sideMenu();
    init.swiperSliders();
    init.drawer();
  });
});