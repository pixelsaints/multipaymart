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
        }, 100);
        document.body.style.overflow = 'hidden';
      });

      function closeSidebar() {
        sidebar.classList.remove('active');
        setTimeout(() => {
          overlay.classList.remove('active');
          document.body.style.overflow = '';
        }, 200);
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

      //vaoucer
      // const voucherSwiper = new Swiper(".vouchers-slider .swiper", {
      //   loop: true,
      //   slidesPerView: 1,
      //   spaceBetween: 0,

      //   autoplay: {
      //     delay: 6000,
      //     disableOnInteraction: false,
      //     pauseOnMouseEnter: true,
      //   },

      //   pagination: {
      //     el: ".swiper-pagination",
      //     clickable: true,
      //   },
      // });


    }

  };

  // LOAD Functions
  $(window).on("load", function () {
    init.sideMenu();
    init.swiperSliders();
  });
});