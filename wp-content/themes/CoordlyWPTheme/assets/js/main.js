function updateNavbarOnScroll() {
  var navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("coordly-navbar-scrolled", "py-0", "shadow");
    navbar.classList.remove("py-4");
  } else {
    navbar.classList.remove("coordly-navbar-scrolled", "py-0", "shadow");
    navbar.classList.add("py-4");
  }
}
window.addEventListener("scroll", updateNavbarOnScroll);
window.addEventListener("load", updateNavbarOnScroll);

if (!document.getElementById("nav-blog")) {
  document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");
    const navbarCollapse = document.querySelector(".navbar-collapse");

    navLinks.forEach((link) => {
      link.addEventListener("click", function (event) {
        if (
          window.innerWidth < 992 &&
          !link.classList.contains("dropdown-toggle")
        ) {
          navbarCollapse.classList.remove("show");
        }
      });
    });    
  });
}

/*
const swiper1 = new Swiper(".swiper-1", {
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    bulletClass: "swiper-pagination-bullet",
    bulletActiveClass: "swiper-pagination-bullet-active",
  },
  navigation: false,
});

const swiper2 = new Swiper(".swiper-2", {
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    bulletClass: "swiper-pagination-bullet",
    bulletActiveClass: "swiper-pagination-bullet-active",
  },
  navigation: false,
});

const swiper3 = new Swiper(".swiper-3", {
  slidesPerView: 5,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  breakpoints: {
    1000: {
      slidesPerView: 5,
    },
    600: {
      slidesPerView: 3,
    },
    350: {
      slidesPerView: 2,
    },
    250: {
      slidesPerView: 1,
    },
  },
});

const swiper4 = new Swiper(".swiper-4", {
  loop: false,
  spaceBetween: 40,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    bulletClass: "swiper-pagination-bullet",
    bulletActiveClass: "swiper-pagination-bullet-active",
    renderBullet: function (index, className) {
      const text1 = ["#1", "#2", "#3", "#4", "#5", "#6"];
      const text2 = [
        "Cadastre sua <br />primeira obra",
        "Plotagens",
        "Notificações",
        "Atividades",
        "BIM",
        "Personalização",
      ];
      return (
        '<h2 class="' +
        className +
        '">' +
        text1[index] +
        '<br /><p class="coordly-bullet-text">' +
        text2[index] +
        "</p></h2>"
      );
    },
  },
  navigation: false,
});
*/

const swiper5 = new Swiper(".swiper-5", {
  slidesPerView: 4,
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
  breakpoints: {
    1000: {
      slidesPerView: 4,
    },
    750: {
      slidesPerView: 3,
    },
    500: {
      slidesPerView: 2,
    },
    350: {
      slidesPerView: 1,
    },
  },
});

const fills = [
  document.querySelector(".progress-fill-1"),
  document.querySelector(".progress-fill-2"),
  document.querySelector(".progress-fill-3"),
  document.querySelector(".progress-fill-4"),
];
const swiper6 = new Swiper(".swiper-6", {
  direction: "vertical",
  loop: false,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  on: {
    autoplayTimeLeft(s, time, progress) {
      const active = this.activeIndex;
      fills.forEach((fill, idx) => {
        if (idx < active) {
          fill.style.height = "100%";
        } else if (idx > active) {
          fill.style.height = "0%";
        } else {
          fill.style.height = (1 - progress) * 100 + "%";
        }
      });
    },
  },
});

const items = document.querySelectorAll(".swiper-nav-cstm .nav-item-cstm");
items.forEach((div, i) => {
  div.addEventListener("click", () => swiper6.slideTo(i));
});


const swiper7 = new Swiper(".swiper-7", {
  direction: "horizontal",
  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: true,
  },
  navigation: {
    nextEl: ".swiper-7-next",
    prevEl: ".swiper-7-prev",
  },
});