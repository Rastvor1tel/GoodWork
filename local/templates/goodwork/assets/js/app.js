!function(e){var o={};function n(t){if(o[t])return o[t].exports;var r=o[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=o,n.d=function(e,o,t){n.o(e,o)||Object.defineProperty(e,o,{enumerable:!0,get:t})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,o){if(1&o&&(e=n(e)),8&o)return e;if(4&o&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(n.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&o&&"string"!=typeof e)for(var r in e)n.d(t,r,function(o){return e[o]}.bind(null,r));return t},n.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(o,"a",o),o},n.o=function(e,o){return Object.prototype.hasOwnProperty.call(e,o)},n.p="",n(n.s=1)}([function(e,o){e.exports=jQuery},function(e,o,n){"use strict";n.r(o);var t=n(0),r=n.n(t);r()((function(){r()(".input").keyup((function(){r()(this).val()?r()(this).addClass("input-active"):r()(this).removeClass("input-active")})),r()("body").on("click",".js-search",(function(e){e.preventDefault(),e.stopPropagation();var o=r()(".header__search_input");o.val()?r()(".header__search").submit():o.toggleClass("input-active")})),r()(document).mouseup((function(e){var o=r()(".header__search_input");o.is(e.target)||r()(".js-search").is(e.target)||o.val()||o.removeClass("input-active")})),r()(".js-phone-mask").mask("+7 (999) 999 99 99",{placeholder:"_"})})),r()((function(){function e(){window.innerWidth<=1024?(r()(".header__contacts").appendTo(".header__nav"),r()(".header__socials").appendTo(".header__nav")):window.innerWidth>1024&&(r()(".header__contacts").insertAfter(".header__search"),r()(".header__socials").insertAfter(".header__contacts"))}function o(){var e=r()(".overlay");return!e.is(":animated")&&(e.fadeOut(600),bodyScrollLock.clearAllBodyScrollLocks(),!0)}function n(){if(window.innerWidth<=1024){var e=r()("body");e.on("click",".js-burger",(function(){var e;r()(this).hasClass("burger-opened")?(r()(this).removeClass("burger-opened"),o()):(r()(this).addClass("burger-opened"),bodyScrollLock.disableBodyScroll(r()(this)),!(e=r()(".overlay")).is(":animated")&&e.fadeIn(600))})),e.on("click",".overlay",(function(){r()(".js-burger").removeClass("burger-opened"),o()}))}}n(),e(),r()(window).on("resize",(function(){n(),e()}))})),r()((function(){new Swiper(".banner",{speed:400,spaceBetween:0,loop:!0,navigation:{nextEl:".banner__control.button-control-next",prevEl:".banner__control.button-control-prev"}}),new Swiper(".works__slider",{speed:400,spaceBetween:0,loop:!0,navigation:{nextEl:".works__control.button-control-next",prevEl:".works__control.button-control-prev"}}),new Swiper(".reviews__slider",{speed:400,spaceBetween:30,loop:!0,navigation:{nextEl:".reviews__control.button-control-next",prevEl:".reviews__control.button-control-prev"},breakpoints:{320:{slidesPerView:1},1024:{slidesPerView:2},1600:{slidesPerView:3}}}),new Swiper(".partners__slider",{speed:400,spaceBetween:0,loop:!0,navigation:{nextEl:".partners__control.button-control-next",prevEl:".partners__control.button-control-prev"},breakpoints:{320:{slidesPerView:1},600:{slidesPerView:2},768:{slidesPerView:3},1024:{slidesPerView:4},1201:{slidesPerView:5},1601:{slidesPerView:6}}})})),ymaps.ready((function(){var e=[55.720773,37.770515];r()(window).width()<=768&&(e=[55.720956,37.773619]);var o=new ymaps.Map("map",{center:e,zoom:17,controls:[]});o.geoObjects.options.set({preset:"islands#Icon",iconColor:"#42c1c7"}),o.geoObjects.add(new ymaps.Placemark([55.720956,37.773619],{balloonContent:"г. Москва, Рязанский пр-т 24, к. 1"},{iconLayout:"default#image",iconImageHref:"/local/templates/goodwork/assets/images/pin.svg",iconImageSize:[37,37],iconImageOffset:[0,0]}))})),r()((function(){var e=r()(".js-scroll-up");r()(window).scroll((function(){r()(window).scrollTop()>300?e.addClass("_visible"):e.removeClass("_visible")})),e.on("click",(function(e){e.preventDefault(),r()("html, body").animate({scrollTop:0},"300")}))})),r()((function(){var e=r()("body");e.on("click",".js-callback",(function(){r()(".popup-callback").addClass("_visible"),bodyScrollLock.disableBodyScroll(r()(this))})),e.on("click",".js-popup-close",(function(){r()(".popup").removeClass("_visible"),bodyScrollLock.clearAllBodyScrollLocks()})),r()(document).mouseup((function(e){var o=r()(".popup._visible");o.is(e.target)&&0===o.has(e.target).length&&!r()(".popupActive").is(e.target)&&(r()(o).removeClass("_visible"),bodyScrollLock.clearAllBodyScrollLocks())}))})),r()((function(){}))}]);
//# sourceMappingURL=app.js.map