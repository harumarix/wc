$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.btn-next',
            prevEl: '.btn-prev',
        },
        
        on: {
            reachEnd: function () {
                document.querySelector('.btn-next').style.opacity = 0.5;
                document.querySelector('.btn-next').style.cursor = "auto";
            },
    
            reachBeginning:  function () {
                document.querySelector('.btn-prev').style.opacity = 0.5;
                document.querySelector('.btn-prev').style.cursor = "auto";
            },
    
            fromEdge: function () {
                document.querySelector('.btn-prev').style.opacity = 1;
                document.querySelector('.btn-next').style.opacity = 1;
                document.querySelector('.btn-prev').style.cursor = "pointer";
                document.querySelector('.btn-next').style.cursor = "pointer";
            }
        }
        });
    
        var swiperOffers = new Swiper('.swiper-container-offers', {
        navigation: {
                nextEl: '.btn-next-offers',
                prevEl: '.btn-prev-offers',
            },
        
        slidesPerView: 2,
        spaceBetween: 30,
    
        on: {
            reachEnd: function () {
                document.querySelector('.btn-next-offers').style.opacity = 0.3;
                document.querySelector('.btn-next-offers').style.cursor = "auto";
            },
    
            reachBeginning:  function () {
                document.querySelector('.btn-prev-offers').style.opacity = 0.3;
                document.querySelector('.btn-prev-offers').style.cursor = "auto";
            },
    
            fromEdge: function () {
                document.querySelector('.btn-prev-offers').style.opacity = 1;
                document.querySelector('.btn-next-offers').style.opacity = 1;
                document.querySelector('.btn-prev-offers').style.cursor = "pointer";
                document.querySelector('.btn-next-offers').style.cursor = "pointer";
            }
        }
        })
        
        var swiperBg = new Swiper('.swiper-container-bg', {
            navigation: {
                nextEl: '.btn-next-bg',
                prevEl: '.btn-prev-bg',
            },
    
            pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        
        on: {
            reachEnd: function () {
                document.querySelector('.btn-next-bg').style.opacity = 0.3;
                document.querySelector('.btn-next-bg').style.cursor = "auto";
            },
    
            reachBeginning:  function () {
                document.querySelector('.btn-prev-bg').style.opacity = 0.3;
                document.querySelector('.btn-prev-bg').style.cursor = "auto";
            },
    
            fromEdge: function () {
                document.querySelector('.btn-prev-bg').style.opacity = 1;
                document.querySelector('.btn-next-bg').style.opacity = 1;
                document.querySelector('.btn-prev-bg').style.cursor = "pointer";
                document.querySelector('.btn-next-bg').style.cursor = "pointer";
            }
        }
    })
})