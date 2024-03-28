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
		


<!-- Plan section
================================================== -->



<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section" style="padding-top: 100px;">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">TRACK YOUR ORDER</h5>
					<h1 class="heading" style="background: linear-gradient(20deg,#3aea09,#5d1004,#3329eb);color:transparent;background-clip: text;font-family:serif;">CONTACT US</h1>
					<hr> 
            </div>
			</div>

			<!-- Contact form section
			================================================== -->
			<div class="col-md-offset-1 col-md-10 col-sm-12">
    <form method="post" class="wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-md-4 col-sm-6">
            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
        </div>
        <div class="col-md-4 col-sm-6">
            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
        </div>
        <div class="col-md-4 col-sm-12">
            <select class="form-control" name="service" id="services" style="height: 53px;">
                <option value="">Select Services</option>
                <option value="INTERNATIONAL">INTERNATIONAL</option>
                <option value="DOMESTIC">DOMESTIC</option>
            </select>
        </div>
        <div class="col-md-12 col-sm-12">
            <textarea class="form-control" rows="7" name="message" id="message" placeholder="Message"></textarea>
        </div>
        <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
            <input type="submit" class="form-control" value="SHOOT MESSAGE" style="border-radius: 32px;" name="submit2">
        </div>
    </form>
    <?php
         if(isset($_POST['submit2']))
        {

            mysqli_query($con, "INSERT INTO `contact_us`(`Name`, `E-mail`, `Service`, `Message`) VALUES 
                ('$_POST[name]','$_POST[email]','$_POST[service]','$_POST[message]')");

            // if (mysqli_query($con, $query)) {
            //     echo "Record inserted successfully";
            // } else {
            //     echo "Error: " . $query . "<br>" . mysqli_error($con);
            // }
            
        }
        
    ?>

</div>	

			<!-- Contact detail section
			================================================== -->
			<div class="contact-detail col-md-12 col-sm-12">
				<div class="col-md-6 col-sm-6">
					<h3><i class="fa-solid fa-envelope" style="font-size: 40px;padding: left 20px;"></i> EMAIL</h3>
					<p><a href="#">globalservices300@gmail.com</a></p>
				</div>
				<div class="col-md-6 col-sm-6">
					<h3><i class="fa-solid fa-square-phone" style="font-size: 40px;padding: left 20px;"></i> PHONES</h3>
					<p> For Normal Track Shipment | <a href="#">7066931116 </a></p>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Footer section-->
<?php     include('includes/footer.php');    ?>
</body>
</html>