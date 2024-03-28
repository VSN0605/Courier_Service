
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12" style="padding-top: 30px;">

				<h2 class="wow bounceIn" >GLOBAL SERVICES</h2>
				<ul class="social-icon">
					<li><a href="https://wa.me/7066931116" target="_blank"><i class="fa-brands fa-whatsapp wow fadeIn" data-wow-delay="0.6s"  style="border-radius: 32%;"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram wow fadeIn" data-wow-delay="0.6s"  style="border-radius: 32%;"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-twitter wow fadeIn" data-wow-delay="0.6s"  style="border-radius: 32%;"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook wow fadeIn" data-wow-delay="0.6s"  style="border-radius: 32%;"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
  
	<h6>Designed and Developed by <a href="http://royalswebtechpvtltd.com/">© Royals Webtech.Pvt.Ltd</a></h6>
  <h6>2024 © Global Services All Rights Reserved</h6>
</footer>


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.easing-1.3.js"></script>
<script src="js/plugins.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/new.js"></script>

<script>
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropdown')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.style.display === "block") {
          openDropdown.style.display = "none";
        }
      }
    }
  }
</script>

<!-- <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script> -->

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      speed: 1000, 
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>