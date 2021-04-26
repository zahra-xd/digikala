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
     } else {

         mainNav.style.display = 'block';
         menoo.classList.remove('menoadd');

     }
 })

 // تایمر معکوس

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