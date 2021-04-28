//  var mybutton = document.getElementById("myBtn");

//  function topFunction() {
//      document.body.scrollTop = 0;
//      document.documentElement.scrollTop = 0;
//  }

//  window.addEventListener('scroll', () => {
//      let mainNav = document.getElementById('my-nav');
//      var menoo = document.getElementById('meno-navbar');
//      if (window.pageYOffset > 80) {
//          mainNav.classList.add('mebg6')
//          menoo.classList.add('menoadd');
//      } else {

//          mainNav.style.display = 'block';
//          menoo.classList.remove('menoadd');

//      }
//  })

//  // تایمر معکوس

//  var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
//  var x = setInterval(function() {

//      var now = new Date().getTime();

//      var distance = countDownDate - now;

//      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//      document.querySelector('.demo').innerHTML = "" + hours +
//          ":" + minutes + ":" + seconds + "";

//  }, 1000);

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtnn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function oopemodel() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeee() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
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
    /*create lens:*/
    lens = document.createElement("DIV");
    lens.setAttribute("class", "img-zoom-lens");
    /*insert lens:*/
    img.parentElement.insertBefore(lens, img);
    /*calculate the ratio between result DIV and lens:*/
    cx = 730 / lens.offsetWidth;
    console.log(cx)
    cy = 750 / lens.offsetHeight;
    console.log(cy)
        /*set background properties for the result DIV:*/
    result.style.backgroundImage = "url('" + img.srcset + "')";
    result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
    /*execute a function when someone moves the cursor over the image, or the lens:*/
    lens.addEventListener("mousemove", moveLens);
    img.addEventListener("mousemove", moveLens);
    /*and also for touch screens:*/
    lens.addEventListener("touchmove", moveLens);
    img.addEventListener("touchmove", moveLens);

    function moveLens(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image:*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        /*calculate the position of the lens:*/
        x = pos.x - (lens.offsetWidth / 2);
        y = pos.y - (lens.offsetHeight / 2);
        /*prevent the lens from being positioned outside the image:*/
        if (x > img.width - lens.offsetWidth) { x = img.width - lens.offsetWidth; }
        if (x < 0) { x = 0; }
        if (y > img.height - lens.offsetHeight) { y = img.height - lens.offsetHeight; }
        if (y < 0) { y = 0; }
        /*set the position of the lens:*/
        lens.style.left = x + "px";
        lens.style.top = y + "px";
        /*display what the lens "sees":*/
        result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0,
            y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return { x: x, y: y };
    }
}

function hideme(x) {


}

function showme(x) {


}
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