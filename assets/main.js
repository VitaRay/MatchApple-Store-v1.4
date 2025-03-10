// page-up-button
document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopButton = document.getElementById('scrollToTop');

    // Показать кнопку при прокрутке
    window.addEventListener('scroll', function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollToTopButton.style.display = 'block';
        } else {
            scrollToTopButton.style.display = 'none';
        }
    });

    // Прокрутка вверх при нажатии на кнопку
    scrollToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Плавная прокрутка
        });
    });
});

// smooth-scroll

SmoothScroll({ 
    animationTime: 400,  // Время скролла (400 = 0.4 секунды) 
    stepSize: 100,   // Размер шага в пикселях 
// Дополнительные настройки: 
    accelerationDelta: 30,  // Ускорение 
    accelerationMax: 2,   // Максимальное ускорение  
    keyboardSupport: true, // Поддержка клавиатуры 
    arrowScroll: 100,  // Шаг скролла стрелками на клавиатуре в пикселях 
    pulseAlgorithm: true, 
    pulseScale: 4, 
    pulseNormalize: 1, 
 touchpadsupport: true, //Поддержка тачпада 
}) 

// page-name-scroll

window.addEventListener('scroll', function() {
    const pageName = document.querySelector('.page-name');
    const sticky = pageName.offsetTop;

    if (window.pageYOffset > sticky) {
        pageName.classList.add('fixed');
    } else {
        pageName.classList.remove('fixed');
    }
});




// banner-switcher

// Получаем все радио-кнопки слайдера
const switches = document.querySelectorAll('input[name="slider"]');
let currentIndex = 0; // Индекс текущего слайда

function switchSlide() {
    // Сначала выключаем текущую радио-кнопку
    switches[currentIndex].checked = false;
    // Увеличиваем индекс для следующего слайда
    currentIndex = (currentIndex + 1) % switches.length;
    // Включаем следующую радио-кнопку
    switches[currentIndex].checked = true;
}
// Запускаем переключение слайдов каждые 0.5 секунды (500 миллисекунд)
setInterval(switchSlide, 500);




// carousel-func

let currentSlide1 = document.querySelector(".item:first-child");
let cloneSlide1 = currentSlide1.cloneNode(false);
let slidesWrapper1 = document.querySelector(".wrapper1");

var left1 = document.querySelector(".left1");
var right1 = document.querySelector(".right1");
var viewport1 = document.querySelector(".viewport1");

left1.addEventListener("click", function () {
   if (viewport1.scrollLeft > 1010) {
      viewport1.scrollTo({
         left: 0
      });
   }
   viewport1.scrollBy({
      left: 340,
      behavior: "smooth"
   });
});
right1.addEventListener("click", function () {
   if (viewport1.scrollLeft <= 0) {
      viewport1.scrollTo({
         left: 1800
      });
   }
   viewport1.scrollBy({
      left: -340,
      behavior: "smooth"
   });
});

let currentSlide2 = document.querySelector(".item:first-child");
let cloneSlide2 = currentSlide2.cloneNode(false);
let slidesWrapper2 = document.querySelector(".wrapper2");

var left2 = document.querySelector(".left2");
var right2 = document.querySelector(".right2");
var viewport2 = document.querySelector(".viewport2");
left2.addEventListener("click", function () {
   if (viewport2.scrollLeft > 1010) {
      viewport2.scrollTo({
         left: 0
      });
   }
   viewport2.scrollBy({
      left: 340,
      behavior: "smooth"
   });
});
right2.addEventListener("click", function () {
   if (viewport2.scrollLeft <= 0) {
      viewport2.scrollTo({
         left: 1800
      });
   }
   viewport2.scrollBy({
      left: -340,
      behavior: "smooth"
   });
});

let currentSlide3 = document.querySelector(".item:first-child");
let cloneSlide3 = currentSlide3.cloneNode(false);
let slidesWrapper3 = document.querySelector(".wrapper3");

var left3 = document.querySelector(".left3");
var right3 = document.querySelector(".right3");
var viewport3 = document.querySelector(".viewport3");
left3.addEventListener("click", function () {
   if (viewport3.scrollLeft > 1010) {
      viewport3.scrollTo({
         left: 0
      });
   }
   viewport3.scrollBy({
      left: 340,
      behavior: "smooth"
   });
});
right3.addEventListener("click", function () {
   if (viewport3.scrollLeft <= 0) {
      viewport3.scrollTo({
         left: 1800
      });
   }
   viewport3.scrollBy({
      left: -340,
      behavior: "smooth"
   });
});

let currentSlide4 = document.querySelector(".item:first-child");
let cloneSlide4 = currentSlide4.cloneNode(false);
let slidesWrapper4 = document.querySelector(".wrapper4");

var left4 = document.querySelector(".left4");
var right4 = document.querySelector(".right4");
var viewport4 = document.querySelector(".viewport4");
left4.addEventListener("click", function () {
   if (viewport4.scrollLeft > 1010) {
      viewport4.scrollTo({
         left: 0
      });
   }
   viewport4.scrollBy({
      left: 340,
      behavior: "smooth"
   });
});
right4.addEventListener("click", function () {
   if (viewport4.scrollLeft <= 0) {
      viewport4.scrollTo({
         left: 1800
      });
   }
   viewport4.scrollBy({
      left: -340,
      behavior: "smooth"
   });
});

let currentSlide5 = document.querySelector(".item:first-child");
let cloneSlide5 = currentSlide4.cloneNode(false);
let slidesWrapper5 = document.querySelector(".wrapper5");

var left5 = document.querySelector(".left5");
var right5 = document.querySelector(".right5");
var viewport5 = document.querySelector(".viewport5");
left5.addEventListener("click", function () {
   if (viewport5.scrollLeft > 1010) {
      viewport5.scrollTo({
         left: 0
      });
   }
   viewport5.scrollBy({
      left: 340,
      behavior: "smooth"
   });
});
right5.addEventListener("click", function () {
   if (viewport5.scrollLeft <= 0) {
      viewport5.scrollTo({
         left: 1800
      });
   }
   viewport5.scrollBy({
      left: -340,
      behavior: "smooth"
   });
});

