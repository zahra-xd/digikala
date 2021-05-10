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

  $(document).on('click touchstart', function(e) {
      var headerSearchBox = $('.t-header-search-box');
      var input = $('.input-t-header-search');
      if ($(e.target).parent().is(headerSearchBox) || $(e.target).parent().parent().is(headerSearchBox)) {
          // if ($(e.target).is(csearch) || csearch.has(e.target).length == 1) {

          input.addClass('bg-white')
          $('.overlay').addClass('is-active');
          $('.t-header-search-lately').show();
      } else {
          input.removeClass('bg-white');
          $('.overlay').removeClass('is-active');
          $('.t-header-search-lately').hide();
      }
  })

  var modal = document.getElementById("myModal2");
  var bodyy1 = document.getElementsByTagName('body');

  // Get the button that opens the modal
  var btn2 = document.getElementById("myopen1");

  // Get the <span> element that closes the modal
  var span2 = document.getElementsByClassName("closee")[0];

  // When the user clicks the button, open the modal 
  btn2.onclick = function() {
      modal.style.display = "block";
      document.getElementById("mybody").classList.add("sdr");
  }

  // When the user clicks on <span> (x), close the modal
  span2.onclick = function() {
      modal.style.display = "none";
      document.getElementById("mybody").classList.remove("sdr");
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }