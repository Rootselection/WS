// Swiper Header
var swiper = new Swiper(".swiperHeader", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    lazy: true,
    renderBullet: function (index, className) {
      return '<div class="' + className + ' swiper-pagination__bullet-wrapper">' + ('0') + (index + 1) + "</div>";
    },
  },
});

// Swiper Comment
var swiper = new Swiper(".commentsSwiper", {
  navigation: {
    nextEl: ".commentsSwiper-arrow-next",
    prevEl: ".commentsSwiper-arrow-prev",
    slidesPerView: 'auto'
  },
});

// Swiper Blockquote
var swiper = new Swiper(".blockquoteSwiper", {
  navigation: {
    nextEl: ".blockquoteSwiper-arrow-next",
    prevEl: ".blockquoteSwiper-arrow-prev",
    slidesPerView: 'auto'
  },
});

// Odometer Count Animation

let isInViewport = function (elem) {
  let distance = elem.getBoundingClientRect();
  return (
      distance.top >= 0 &&
      distance.left >= 0 &&
      distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      distance.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};
let findMe = document.querySelector('.stats');

window.addEventListener('scroll', function (event) {
  if (isInViewport(findMe)) {
      setTimeout(function () {
          odometer1.innerHTML = 42;
          odometer2.innerHTML = 123;
          odometer3.innerHTML = 15;
          odometer4.innerHTML = 99;
          odometer5.innerHTML = 24;
      }, 100);
  }
}, false);

// Header Fixed
const hideNav = () => {
  const hiddenNavClassName = "nav--hidden";
  const fixedNavClassName = "nav--fixed";
  const headerHeight = 36;
  const navHeight = 42;
  let initialYvalue = window.scrollY;
  let body = document.querySelector('body');

  let isItHidden = true;
  let isItFixed = true;

  window.addEventListener('scroll', (ev) => {
    const scrollY = window.scrollY;
    if (scrollY > headerHeight) {
      body.classList.add(fixedNavClassName);
    }
    if (scrollY > headerHeight) {
      makeItFixed();

      if (scrollY > headerHeight + navHeight && scrollY > initialYvalue) {
        hide();
      } else {
        show();
      }
    } else {
      makeItNotFixed();
    }

    initialYvalue = scrollY;
  });

  function hide() {
    if (!isItHidden) {
      body.classList.add(hiddenNavClassName);
      isItHidden = true;
    }
  }

  function show() {
    if (isItHidden) {
      body.classList.remove(hiddenNavClassName);
      isItHidden = false;
    }
  }

  function makeItFixed() {
    if (!isItFixed) {
      body.classList.add(fixedNavClassName);
      isItFixed = true;
    }
  }

  function makeItNotFixed() {
    if (isItFixed) {
      body.classList.remove(fixedNavClassName);
      isItFixed = false;
    }
  }
}
hideNav();

// Menu Header

document.getElementById('menuBtn').onclick = function () {
  document.getElementById('menu__body').classList.add('active');
  document.getElementById('menu__inner').classList.add('active');
  document.getElementById('menu__mask').classList.add('active');
  document.body.classList.add('overflow-hidden');
}
document.getElementById('menu__close').onclick = function () {
  document.getElementById('menu__body').classList.remove('active');
  document.getElementById('menu__inner').classList.remove('active');
  document.getElementById('menu__mask').classList.remove('active');
  document.body.classList.remove('overflow-hidden');
}
document.getElementById('menu__mask').onclick = function () {
  document.getElementById('menu__body').classList.remove('active');
  document.getElementById('menu__inner').classList.remove('active');
  document.getElementById('menu__mask').classList.remove('active');
  document.body.classList.remove('overflow-hidden');
}
document.getElementsByName('menu__link').onclick = function () {
  document.getElementById('menu__body').classList.remove('active') ;
  document.getElementById('menu__inner').classList.remove('active');
  document.getElementById('menu__mask').classList.remove('active');
  document.body.classList.remove('overflow-hidden');
}


const parent = document.getElementById('menu__list');
parent.onclick = function (event) {
  document.getElementById('menu__body').classList.remove('active');
  document.getElementById('menu__inner').classList.remove('active');
};


