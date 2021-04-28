  var mybutton = document.getElementById("myBtn");

  function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  }

  window.addEventListener('scroll', () => {
      let mainNav = document.getElementById('my-nav');
      var menoo = document.getElementById('meno-navbar');
      if (window.pageYOffset > 80) {
          mainNav.classList.add('mebg6')
          menoo.classList.add('menoadd');
          menoo.classList.add('sw');
      } else {

          mainNav.style.display = 'block';
          menoo.classList.remove('menoadd');
          menoo.classList.remove('sw');

      }
  })

  //  // تایمر معکوس

  var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
  var x = setInterval(function() {

      var now = new Date().getTime();

      var distance = countDownDate - now;

      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.querySelector('.demo').innerHTML = "" + hours +
          ":" + minutes + ":" + seconds + "";

  }, 1000);



  //پیشنهاد لحظه ای

  var progressBar = $('.timeline');
  var slideshow = $('.pishnahad-lahzaei');
  var slidesss = $('.slides');
  var progress;
  var widths = slidesss.width();
  var slideIndexx = 1;
  var timer;
  var width = 0;


  progressbar(0)


  function progressbar(w) {

      if (slideIndexx > slidesss.length) {
          slideIndexx = 1;
      }

      width = w;

      timer = setInterval(timeLine, 20)

      function timeLine() {
          if (width >= 100) {
              clearInterval(timer);
              slideIndexx++;
              progressbar(0)
              showSlide(slideIndexx - 1)


          } else {
              width++;
              $('.log').html(width);
              progressBar.css({ "width": width + '%', });
          }
      }
  }


  function showSlide(x) {
      progress = 0;
      for (var i = 1; i <= x; i++) {
          progress += widths;
      }
      slidesss.css('transform', 'translateX(' + progress + 'px)');
  }


  slideshow.hover(function() {

      clearInterval(timer)

  }, function() {
      clearInterval(timer)
          // alert(width);
      if (width >= 0) {
          width = width;
          progressbar(width);
      }
  });