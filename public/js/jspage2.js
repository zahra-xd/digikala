// Get the modal
var modalcd = document.getElementById("myModal");
var bodyy = document.getElementsByTagName('body');
// Get the button that opens the modal
var btn = document.getElementById("myBtnn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function oopemodel() {
    modalcd.style.display = "block";
    zoom();
    document.getElementById("mybody").classList.add("sdr");
    bodyy.addClass('.rm');


}

// When the user clicks on <span> (x), close the modal
function closeee() {
    modalcd.style.display = "none";
    document.getElementById("mybody").classList.remove("sdr");
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalcd) {
        modalcd.style.display = "none";
    }
}

//hover zoom
// function imageZoom(imgID, resultID) {
//     var img, lens, result, cx, cy;
//     img = document.getElementById(imgID);
//     result = document.getElementById(resultID);
//     /*create lens:*/
//     lens = document.createElement("DIV");
//     lens.setAttribute("class", "img-zoom-lens");
//     /*insert lens:*/
//     img.parentElement.insertBefore(lens, img);
//     /*calculate the ratio between result DIV and lens:*/
//     cx = result.offsetWidth / lens.offsetWidth;
//     cy = result.offsetHeight / lens.offsetHeight;
//     /*set background properties for the result DIV:*/
//     result.style.backgroundImage = "url('" + img.src + "')";
//     result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
//     /*execute a function when someone moves the cursor over the image, or the lens:*/
//     lens.addEventListener("mousemove", moveLens);
//     img.addEventListener("mousemove", moveLens);
//     /*and also for touch screens:*/
//     lens.addEventListener("touchmove", moveLens);
//     img.addEventListener("touchmove", moveLens);

//     function moveLens(e) {
//         var pos, x, y;
//         /*prevent any other actions that may occur when moving over the image:*/
//         e.preventDefault();
//         /*get the cursor's x and y positions:*/
//         pos = getCursorPos(e);
//         /*calculate the position of the lens:*/
//         x = pos.x - (lens.offsetWidth / 2);
//         y = pos.y - (lens.offsetHeight / 2);
//         /*prevent the lens from being positioned outside the image:*/
//         if (x > img.width - lens.offsetWidth) { x = img.width - lens.offsetWidth; }
//         if (x < 0) { x = 0; }
//         if (y > img.height - lens.offsetHeight) { y = img.height - lens.offsetHeight; }
//         if (y < 0) { y = 0; }
//         /*set the position of the lens:*/
//         lens.style.left = x + "px";
//         lens.style.top = y + "px";
//         /*display what the lens "sees":*/
//         result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
//     }

//     function getCursorPos(e) {
//         var a, x = 0,
//             y = 0;
//         e = e || window.event;
//         /*get the x and y positions of the image:*/
//         a = img.getBoundingClientRect();
//         /*calculate the cursor's x and y coordinates, relative to the image:*/
//         x = e.pageX - a.left;
//         y = e.pageY - a.top;
//         /*consider any page scrolling:*/
//         x = x - window.pageXOffset;
//         y = y - window.pageYOffset;
//         return { x: x, y: y };
//     }
// }
// imageZoom("myimage", "myresult");

// **hover zoom

function imageZoom(imgID, resultID) {
    var img, lens, result, cx, cy;
    img = document.getElementById(imgID);
    result = document.getElementById(resultID);

    lens = document.createElement("DIV");
    lens.setAttribute("class", "img-zoom-lens");

    img.parentElement.insertBefore(lens, img);

    cx = 730 / lens.offsetWidth;
    console.log(cx)
    cy = 550 / lens.offsetHeight;
    console.log(cy)

    result.style.backgroundImage = "url('" + img.srcset + "')";
    result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
    lens.addEventListener("mousemove", moveLens);
    img.addEventListener("mousemove", moveLens);
    lens.addEventListener("touchmove", moveLens);
    img.addEventListener("touchmove", moveLens);

    function moveLens(e) {
        var pos, x, y;
        e.preventDefault();
        pos = getCursorPos(e);
        x = pos.x - (lens.offsetWidth / 2);
        y = pos.y - (lens.offsetHeight / 2);
        if (x > img.width - lens.offsetWidth) { x = img.width - lens.offsetWidth; }
        if (x < 0) { x = 0; }
        if (y > img.height - lens.offsetHeight) { y = img.height - lens.offsetHeight; }
        if (y < 0) { y = 0; }
        lens.style.left = x + "px";
        lens.style.top = y + "px";
        result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0,
            y = 0;
        e = e || window.event;

        a = img.getBoundingClientRect();
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return { x: x, y: y };
    }
}

function hideme(x) {

}

function showme(x) {}
imageZoom("myimage", "myresult");
////
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" c-remodal-gallery__thumb--selected", "");
    }
    slides[slideIndex - 1].style.display = "block";

    dots[slideIndex - 1].className += " c-remodal-gallery__thumb--selected";

}
//read more
function readmore() {
    var dotss = document.getElementById("dotts");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("mostread");

    if (dotss.style.display === "none") {
        dotss.style.display = "inline";
        btnText.innerHTML = "ادامه مطالب";
        moreText.style.display = "none";
    } else {
        dotss.style.display = "none";
        btnText.innerHTML = "مشاهده کمتر";
        moreText.style.display = "inline";
    }
}
// *****

function hover() {

    var navLis = $('.nav-level-1-li');
    var navUl = $('.nav-level-1-ul');
    var offsetleftUl = navUl.offset().left;
    // console.log(offsetleftUl);
    var widthUl = navUl.width();
    // console.log(widthUl);
    var navHover = $('.nav-hoverr');

    navLis.hover(function() {
        var self = $(this);
        var widthCurrentLi = self.width();
        // console.log(widthCurrentLi);
        var offsetleftCurrentLi = self.offset().left;
        // console.log(offsetleftCurrentLi);
        navHover.css({
            'width': widthCurrentLi
        })
        navHover.css({
            'right': widthUl - (offsetleftCurrentLi + widthCurrentLi) + offsetleftUl
        });

        navHover.css('transform', 'scalex(1)');
        $('.t-header-search-lately').hide();
        $('.t-header-search-lately').removeClass('bg-white')
        if (self.hasClass('has-sub')) {
            $('.overlay').addClass('is-active');
        }
    }, function() {
        $('.overlay').removeClass('is-active');
        navHover.css('transform', 'scalex(0)');
    })

}

hover();
window.onresize = function() {
    hover()
}

function myFunction12() {
    var dots2 = document.getElementById("dots2");
    var moreText12 = document.getElementById("more2");
    var btnText12 = document.getElementById("myBtnu");

    if (dots2.style.display === "none") {
        dots2.style.display = "inline";
        btnText12.innerHTML = "+ موارد بیشتر";

        moreText12.style.display = "none";
    } else {
        dots2.style.display = "none";
        btnText12.innerHTML = "  - بستن ";
        moreText12.style.display = "inline";
    }
}

// **********************zoom click************************

function zoom() {
    var main = $('.c-remodal-gallery__content_1'),
        mainImg = main.find('.imggg'),
        bool = false,
        win = $(window),
        widthImg = mainImg.width(),
        // console.log('width Img =  ' + widthImg)
        heightImg = mainImg.height(),
        // console.log('height Img =  ' + heightImg)
        positionFunc = function(e) {
            return x = e.pageX - main.offset().left, y = e.pageY - main.offset().top;
        };
    console.log('width Img =  ' + widthImg)
    var zoomIn = function(e) {
        positionFunc(e);
        mainImg.animate({
            left: -x,
            top: -y,
            width: widthImg * 2.01,
            height: heightImg * 2.01
        }, 200, function() {
            main.bind('mousemove', function(e) {
                positionFunc(e);
                mainImg.css({
                    left: -x,
                    top: -y
                });
            });
        }).css({
            cursor: 'zoom-out',
        });
        bool = true;
    }
    var zoomOut = function() {
        mainImg.animate({
            left: 0,
            top: 0,
            width: widthImg,
            height: heightImg
        }, 100).css({
            cursor: ''
        });
        main.unbind('mousemove');
        bool = false;
    }
    main.bind('mousedown', function(e) {
        if (bool !== true) {
            zoomIn(e);
            main.css({
                height: heightImg
            });
        } else {
            zoomOut();
            main.css({
                height: $(this).height()
            });
        }
    })
    window.scroll(function() {
        if (bool) {
            zoomOut();
        }
    });
}
//// 
// $(document).ready(function() {
//     var main = $('.content__main'),
//         mainImg = main.find('#img_cover'),
//         bool = false,
//         win = $(window),
//         widthImg = mainImg.width(),

//         heightImg = mainImg.height(),

//         positionFunc = function(e) {


//             return x = e.pageX - main.offset().left, y = e.pageY - main.offset().top;
//         };
//     var zoomIn = function(e) {
//         positionFunc(e);
//         mainImg.animate({
//             left: -x,
//             top: -y,
//             width: widthImg * 2.01,
//             height: heightImg * 2.01
//         }, 200, function() {
//             main.bind('mousemove', function(e) {
//                 positionFunc(e);
//                 mainImg.css({
//                     left: -x,
//                     top: -y
//                 });
//             });
//         }).css({
//             cursor: 'zoom-out',
//         });
//         bool = true;
//     }
//     var zoomOut = function() {
//         mainImg.animate({
//             left: 0,
//             top: 0,
//             width: widthImg,
//             height: heightImg
//         }, 100).css({
//             cursor: ''
//         });
//         main.unbind('mousemove');
//         bool = false;
//     }

//     main.bind('mousedown', function(e) {
//         if (bool !== true) {
//             zoomIn(e);
//             main.css({
//                 height: heightImg
//             });
//         } else {
//             zoomOut();
//             main.css({
//                 height: $(this).height()
//             });
//         }
//     })

//     window.scroll(function() {
//         if (bool) {
//             zoomOut();
//         }
//     });
// })