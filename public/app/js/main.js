$(document).ready(function () {

    $('#tabs-btn-1').click(function () {
        $('#tab-content-1').css('display', 'block');
        $(this).addClass('active')
        $('#tabs-btn-2').removeClass('active');
        $('#tabs-btn-3').removeClass('active');
        $('#tabs-btn-4').removeClass('active');
        $('#tabs-btn-5').removeClass('active');
        $('#tab-content-2').css('display', 'none');
        $('#tab-content-3').css('display', 'none');
        $('#tab-content-4').css('display', 'none');
        $('#tab-content-5').css('display', 'none');
    });
    $('#tabs-btn-2').click(function () {
        $('#tab-content-1').css('display', 'none');
        $(this).addClass('active')
        $('#tabs-btn-1').removeClass('active');
        $('#tabs-btn-3').removeClass('active');
        $('#tabs-btn-4').removeClass('active');
        $('#tabs-btn-5').removeClass('active');
        $('#tab-content-2').css('display', 'block');
        $('#tab-content-3').css('display', 'none');
        $('#tab-content-4').css('display', 'none');
        $('#tab-content-5').css('display', 'none');
    });
    $('#tabs-btn-3').click(function () {
        $('#tab-content-1').css('display', 'none');
        $(this).addClass('active')
        $('#tabs-btn-1').removeClass('active');
        $('#tabs-btn-2').removeClass('active');
        $('#tabs-btn-4').removeClass('active');
        $('#tabs-btn-5').removeClass('active');
        $('#tab-content-2').css('display', 'none');
        $('#tab-content-3').css('display', 'block');
        $('#tab-content-4').css('display', 'none');
        $('#tab-content-5').css('display', 'none');
    });
    $('#tabs-btn-4').click(function () {
        $('#tab-content-1').css('display', 'none');
        $(this).addClass('active')
        $('#tabs-btn-2').removeClass('active');
        $('#tabs-btn-3').removeClass('active');
        $('#tabs-btn-1').removeClass('active');
        $('#tabs-btn-5').removeClass('active');
        $('#tab-content-2').css('display', 'none');
        $('#tab-content-3').css('display', 'none');
        $('#tab-content-4').css('display', 'block');
        $('#tab-content-5').css('display', 'none');
    });
    $('#tabs-btn-5').click(function () {
        $('#tab-content-1').css('display', 'none');
        $(this).addClass('active')
        $('#tabs-btn-2').removeClass('active');
        $('#tabs-btn-3').removeClass('active');
        $('#tabs-btn-1').removeClass('active');
        $('#tabs-btn-4').removeClass('active');
        $('#tab-content-2').css('display', 'none');
        $('#tab-content-3').css('display', 'none');
        $('#tab-content-4').css('display', 'none');
        $('#tab-content-5').css('display', 'block');
    });

    $('.product-in-slider').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        nextArrow: `<button class="product-in-slider-arrow btn arrow-right">
            <svg 
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="35px" height="66px">
                <path fill-rule="evenodd" opacity="0.502"  fill="rgb(255, 255, 255)"
                d="M34.992,33.149 L2.150,65.991 L0.007,63.849 L30.858,32.999 L0.007,2.149 L2.150,0.006 L34.992,32.850 L34.843,32.999 L34.992,33.149 Z"/>
            </svg>
            </button>`,
        prevArrow: `<button class="product-in-slider-arrow btn arrow-left">
            <svg 
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="35px" height="66px">
                <path fill-rule="evenodd"  opacity="0.502" fill="rgb(255, 255, 255)"
                d="M34.993,63.849 L32.850,65.991 L0.008,33.149 L0.157,32.999 L0.008,32.850 L32.850,0.006 L34.993,2.149 L4.142,32.999 L34.993,63.849 Z"/>
            </svg>
            </button>`,
    });

    setTimeout(() => {
        $('.loader-wrap').remove();
    }, 4000);

    $('.sertificates-block').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        // centerMode: false,
        // focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    centerMode: false,
                }
            }
        ],
        prevArrow: `<button class="sertificate-slider-arrow btn arrow-right">
             <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px" height="36px">
                <path fill-rule="evenodd"  opacity="0.6" fill="#d1d1d1"
                d="M19.992,33.849 L17.850,35.991 L0.007,18.149 L0.157,17.999 L0.007,17.850 L17.850,0.006 L19.992,2.149 L4.142,17.999 L19.992,33.849 Z"/>
                </svg>
            </button>`,
        nextArrow: `<button class="sertificate-slider-arrow btn arrow-left">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px" height="36px">
                <path fill-rule="evenodd"  opacity="0.6" fill="#d1d1d1"
                d="M19.992,33.849 L17.850,35.991 L0.007,18.149 L0.157,17.999 L0.007,17.850 L17.850,0.006 L19.992,2.149 L4.142,17.999 L19.992,33.849 Z"/>
                </svg>
            </button>`,
    });

    $('.photo-in-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        fade: true,
        asNavFor: '.photo-in-slider-nav',
        prevArrow: `<button class="photo-slider-arrow btn arrow-right">
             <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px" height="36px">
                <path fill-rule="evenodd"  opacity="0.6" fill="#ffffff"
                d="M19.992,33.849 L17.850,35.991 L0.007,18.149 L0.157,17.999 L0.007,17.850 L17.850,0.006 L19.992,2.149 L4.142,17.999 L19.992,33.849 Z"/>
                </svg>
            </button>`,
        nextArrow: `<button class="photo-slider-arrow btn arrow-left">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px" height="36px">
                <path fill-rule="evenodd"  opacity="0.6" fill="#ffffff"
                d="M19.992,33.849 L17.850,35.991 L0.007,18.149 L0.157,17.999 L0.007,17.850 L17.850,0.006 L19.992,2.149 L4.142,17.999 L19.992,33.849 Z"/>
                </svg>
            </button>`,
    });
    $('.photo-in-slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.photo-in-slider-for',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }
        ],
    });

    wow = new WOW(
        {
            boxClass: 'wow',      // default
            animateClass: 'animated', // default
            offset: 0,          // default
            mobile: true,       // default
            live: false        // default

        }
    )
    wow.init();

    // function videoUrl(link) {
    //     $('#mainVideo').src = link;
    // }

    $('.question-title-block').click(function () {
        var wrap = $(this).closest('.question-wrap');
        wrap.find('.question-title-block').toggleClass('active')
        wrap.find('.question-text').slideToggle();
    });

    var videoBlog = $('.media-main-video');
    var videoTeg = $('.media-main-video-item')[0];

    play = false;

    videoBlog.click(function () {
        if (play) {
            videoTeg.pause();
            play = false;
            $('.media-video-play').css('opacity', 1)
        } else {
            videoTeg.play();
            play = true;
            $('.media-video-play').css('opacity', 0)
        }
    });

    //     /* Menu modal */
    $('.hamburger').click(function () {
        $('.header-item-bottom').fadeIn();
    });
    function closeSerchModal(e) {
        var target = $(e.target);
        if (target.is('.header-item-bottom')) {
            target.fadeOut();
        }
    }
    $('.header-item-bottom').click(closeSerchModal);

    //     /* Menu modal */

    $('.header-lang-top').click(function () {
        $('.header-lang-bottom').slideToggle();
    });

    $('.header-slider').slick({
        dots: false,
        arrows: true,
        fade: true,
        // autoplay: true,
        // autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    dots: true,
                    arrow: false
                }
            }
        ],
        prevArrow: `<button class="header-slider-arrow btn arrow-right">
            <svg 
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="45px" height="86px">
                <path fill-rule="evenodd"  opacity="0.502" fill="#c3c1bf"
                d="M44.992,83.850 L42.850,85.991 L0.007,43.149 L0.157,42.999 L0.007,42.850 L42.850,0.006 L44.992,2.149 L4.142,42.999 L44.992,83.850 Z"/>
                </svg>
            </button>`,
        nextArrow: `<button class="header-slider-arrow btn arrow-left">
           <svg 
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="45px" height="86px">
                <path fill-rule="evenodd"  opacity="0.502" fill="#c3c1bf"
                d="M44.992,83.850 L42.850,85.991 L0.007,43.149 L0.157,42.999 L0.007,42.850 L42.850,0.006 L44.992,2.149 L4.142,42.999 L44.992,83.850 Z"/>
                </svg>
            </button>`,
    });
});

let pathList = document.querySelectorAll('.map-path');
let tooltip = document.querySelector('.map-tooltip');
let title = tooltip.querySelector('[data-title="title"]');
let text = tooltip.querySelector('[data-title="text"]');
let square = tooltip.querySelector('[data-square="square"]');

pathList.forEach(path => {
    path.addEventListener('mousemove', function (e) {
        tooltip.style.top = `${e.pageY - 260}px`;
        tooltip.style.left = `${e.pageX - 0}px`;
        tooltip.style.opacity = 1;
        tooltip.style.visibility = 'visible';

        title.textContent = this.attributes.title.textContent
        text.textContent = this.dataset.pathtext
        square.textContent = this.dataset.squaremetr
    });

    path.addEventListener('mouseleave', function (e) {
        tooltip.style.opacity = 0;
        tooltip.style.visibility = 'hidden';
    });
});
//production slider left-arrow
/*<svg
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="20px" height="36px">
<path fill-rule="evenodd"  opacity="0.6" fill="rgb(255, 255, 255)"
 d="M19.992,33.849 L17.850,35.991 L0.007,18.149 L0.157,17.999 L0.007,17.850 L17.850,0.006 L19.992,2.149 L4.142,17.999 L19.992,33.849 Z"/>
</svg>

//production slider right-arrow
<svg
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="20px" height="36px">
<path fill-rule="evenodd"  fill="rgb(0, 203, 113)"
 d="M19.992,18.149 L2.149,35.991 L0.007,33.849 L15.858,17.999 L0.007,2.149 L2.149,0.006 L19.992,17.850 L19.843,17.999 L19.992,18.149 Z"/>
</svg>*/


// const tabsList = document.querySelectorAll('.tabs');

// function calculateLeft(element) {
//     return element ? element.offsetWidth + calculateLeft(element.previousElementSibling) : 16;
// }

// tabsList.forEach(tabs => {
//     const indicator = tabs.querySelector('.indicator');
//     tabs.addEventListener('click', function (e) {
//         if (e.target.nodeName === 'A') {
//             e.preventDefault();
//             for (let i = 0; i < tabs.children.length; i++) {
//                 if (window.CP.shouldStopExecution(0)) break;
//                 tabs.children[i].classList.remove('active');
//             } window.CP.exitedLoop(0);
//             e.target.parentNode.classList.add('active');
//             indicator.style.left = `${calculateLeft(e.target.parentNode.previousElementSibling)}px`;
//             indicator.style.width = `${e.target.offsetWidth}px`;
//         }
//     });
// });



