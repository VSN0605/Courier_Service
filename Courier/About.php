<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>GLOBAL SERVICES</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="path/to/style.css?v=<?php echo time(); ?>" />
<!--

Template 2078 Adventure

http://www.tooplate.com/view/2078-adventure

-->
	<!-- Bootstrap CSS
   ================================================== -->
   <?php  
        
        // $con=mysqli_connect("localhost","root","","golbal courier");    //change database name;
        include('dbconnection.php');
   		include_once('includes/css.php');
		//include_once('data.php');
        //include_once('all-service.php');

        //require 'Courier/data.php';     //new php code;

   ?>

   
   
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	
	
<!-- Preloader section
================================================== -->
<section  class="preloader">

	<div class="spinner"></div>

</section>


<!-- Navigation section
================================================== -->



<?php     include('includes/header.php');    ?>


<!-- Homepage section
================================================== -->
<!-- <div id="home">
    <div class="site-slider">
        <ul class="bxslider">
			
            <li>
                <img src="images/slider1.jpg" alt="slider image 1">
                <div class="slider-content">
                    <a href='#work'><button class="button type1 right-button" id="button2">
                        <span class="btn-txt" style="font-family: serif;">INTERNATIONAL TRACK SHIPMENT</span>
                    </button></a>
					<a href='#work3'><button class="button type1 right-button" id="button2">
                        <span class="btn-txt" style="font-family: serif;">DOMESTIC TRACK SHIPMENT</span>
                    </button></a>
                </div>
            </li>
           
            <li>
                <img src="images/slider3.jpg" alt="slider image 3">
                <div class="slider-content">
					<a href='#work'><button class="button type1 right-button" id="button2">
                        <span class="btn-txt" style="font-family: serif;">INTERNATIONAL TRACK SHIPMENT</span>
                    </button></a>
                    <a href='#work3'><button class="button type1 right-button" id="button2">
                        <span class="btn-txt" style="font-family: serif;">DOMESTIC TRACK SHIPMENT</span>
                    </button></a>
                </div>
            </li>
        </ul> 
    </div>
</div> -->










<!-- Work section
================================================== -->







<!-- About section
================================================== -->
<section id="about" class="parallax-section" style="padding-top: 150px;padding-bottom: 150px;">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h3 class="wow bounceIn" style="color: rgb(255, 208, 0);font-family: serif;">ABOUT US</h3>
					<h1 class="heading color-black" style="font-family: serif;">WHO WE ARE</h1>
					
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<h3 class="color-black">OUR STORY</h3>
				<h2>GLOBAL SERVICES</h2>
				<p class="color-black">Welcome to [Global Services], where your parcels find their express journey to destinations with precision and care. At the heart of our service is a commitment to reliability and customer satisfaction.</p>
					<p class="color-black">Our strength lies in the perfect blend of technology and a dedicated team. With cutting-edge tools and a skilled workforce, we provide a courier experience that's not just about delivering packages but delivering peace of mind.
				</p>
			</div>

			<div class="col-md-6 col-sm-12">
				<h2 class="mobile-top">WHY CHOOSE US?</h2>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          							Very Quick Response
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<p>Phasellus odio lacus, posuere vel sodales a, facilisis vitae ligula. Pellentesque leo ligula, lobortis ut sapien blandit, convallis pulvinar nisi. Proin tempor congue nibh. Nam non maximus metus, nec tincidunt nulla.</p>
      						</div>
   						 </div>
 					 </div>

    				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          							High Quality Team
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
        						<p>Nullam vehicula tincidunt ultrices. Curabitur id magna velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pretium tortor ultrices ligula dictum placerat. Donec eget augue sapien. Curabitur vel orci magna. Sed id eros consequat nibh congue euismod.</p>
      						</div>
   						 </div>
 					 </div>

 					 <div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          							Special Awards
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
        						<p>Morbi pellentesque nisl at sapien congue facilisis. Proin consequat pharetra hendrerit. Aliquam vulputate, ligula ut pellentesque molestie, dolor nisi semper augue, sit amet porta risus sem non sapien. Cras vel pulvinar sapien, in consequat purus. Aliquam at varius augue.</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div>
		</div>
	</div>
</section>
			

		


<!-- team section
================================================== -->



<!-- Portfolio section
================================================== -->



		


<!-- Plan section
================================================== -->



<!-- Contact section
================================================== -->



<!-- Footer section-->
<?php     include('includes/footer.php');    ?>
</body>
</html>