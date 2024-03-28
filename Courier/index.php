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


<div id="home">
        <div class="site-slider">
            <div class="bx-wrapper">
                <div class="bx-viewport">
                    <ul class="bxslider">
                        <li>
                            <img src="images/slider1.jpg" alt="slider image 1">
                            <div class="slider-content">
                                <a href="international.php"><button class="button type1 right-button" id="button1">
                                    <span class="btn-txt">INTERNATIONAL TRACK SHIPMENT</span>
                                </button></a>
                                <a href="domestic.php"><button class="button type1 right-button" id="button2">
                                    <span class="btn-txt">DOMESTIC TRACK SHIPMENT</span>
                                </button></a>
                            </div>
                        </li>

                        <li>
                            <img src="images/slider3.jpg" alt="slider image 3">
                            <div class="slider-content">
                                <a href="international.php"><button class="button type1 right-button" id="button3">
                                    <span class="btn-txt">INTERNATIONAL TRACK SHIPMENT</span>
                                </button></a>
                                <a href="domestic.php"><button class="button type1 right-button" id="button4">
                                    <span class="btn-txt">DOMESTIC TRACK SHIPMENT</span>
                                </button></a>
                            </div>
                        </li>

                        <?php
                            $query = "SELECT * FROM `slider`";   //change table name;
                            $result = mysqli_query($con, $query);

                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <li>
                        <?php
                            $imagePath = "Image/" . $row['Image'];
                            if (is_file($imagePath)) :
                        ?>
                            <img src="<?php echo $imagePath; ?>" alt="slider image 3">
                            <?php else : ?>
                            <p>Image not found: <?php echo $imagePath; ?></p>
                        <?php endif; ?>
                            <div class="slider-content">
                                <a href="#work"><button class="button type1 right-button" id="button3">
                                    <span class="btn-txt">INTERNATIONAL TRACK SHIPMENT</span>
                                </button></a>
                                <a href="#work3"><button class="button type1 right-button" id="button4">
                                    <span class="btn-txt">DOMESTIC TRACK SHIPMENT</span>
                                </button></a>
                            </div>
                        </li>
                        <?php
                            }
                                        } else {
                                            echo "Query failed: " . mysqli_error($con);
                                        }
                        ?>

                    </ul> <!-- /.bxslider -->
                </div> <!-- /.bx-viewport -->
            </div> <!-- /.bx-wrapper -->
        </div>



<section class="alltracking">
  <div class="custom-card text-center" onclick="showInquiryForm()"> 
    <div class="custom-card-body">
      <h5 class="custom-card-title" style="font-family: serif;">FOR LOGICTIC INQUIRY</h5>
      <p class="custom-card-text" style="padding-bottom: 10px;">You Can Track Your All Orders Just Click Here And Go With it.</p>
      <button class="btn1">Click Here!!</button>
    </div>
  </div>

  <div class="overlay" onclick="closeInquiryForm()">
    <div class="inquiry-form" id="inquiryForm">
	<form class="form" method="post">
    <p class="title"> Logistic Inquiry Form</p>
    <div class="flex">
        <label>
            <input class="input" type="text" placeholder="Name" name="name" required>
        </label>

        <label>
            <input class="input" type="text" placeholder="Number" name="number" required>
        </label>
    </div>

    <label>
        <input class="input" type="email" placeholder="Email" name="email" required>
    </label>

    <label>
        <input class="input" type="text" placeholder="Address From" name="address" required>
    </label>

    <label>
        <input class="input" type="text" placeholder="Address To" name="address2" required>
    </label>

    <label>
        <input class="input" type="text" placeholder="Pincode" name="pincode" required>
    </label>

    <button class="submit" name="submit1">Submit</button>
</form>
     <?php
         if(isset($_POST['submit1']))
         {
           mysqli_query($con,"INSERT INTO `inquiery`(`Name`, `Number`, `Email`, `Address From`, `Address To`, `Pincode`) VALUES 
            ('$_POST[name]','$_POST[number]','$_POST[email]','$_POST[address]','$_POST[address2]','$_POST[pincode]')");
         }
    ?> 

      
    </div>
  </div>
</section>

<script>
  function showInquiryForm() {
    document.querySelector('.overlay').style.display = 'flex';
    document.querySelector('.inquiry-form').style.display = 'block';
  }
  function closeInquiryForm() {

    const clickedElement = document.activeElement;
    const isInForm = document.querySelector('.inquiry-form').contains(clickedElement);

    if (!isInForm) {
        
        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.inquiry-form').style.display = 'none';
    }
}
</script>



<!-- Work section
================================================== -->
<section id="work">
    <div class="heading" style="margin-top: 50px; ">
        <a href="international.php"><h1 style="font-family: serif; padding-bottom: 20px;">INTERNATIONAL</h1></a>
    </div>
    <div id="international-section" style="padding-bottom: 100px;">

        <?php
            $query = "SELECT * FROM `international service`";   //change table name;
            $result = mysqli_query($con, $query);

            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
        ?>

        <div id="international-section" style="padding-bottom: 100px;">
        <?php   
            //require 'data.php';
           
         ?>
            <form method="post" action="" enctype="multipart/form-data">
            <div class="card">
                <div class="card-content wow fadeInUp" data-wow-delay="0.3">
                    <?php
                    $imagePath = "Image/" . $row['Image'];
                    if (is_file($imagePath)) :
                    ?>
                       <img src="<?php echo $imagePath; ?>" alt="logo" width="50" height="50px" style="margin-top: 20px;">

                    <?php else : ?>
                        <p>Image not found: <?php echo $imagePath; ?></p>
                    <?php endif; ?>
                    <hr>
                    <p style="padding-bottom: 40px;"><?php echo $row['Description']; ?></p>
                    <div class="uiverse">
                        <span class="tooltip"><?php echo $row['Text']; ?></span>
                        <a href="<?php echo $row['url'] ?>"><span>Track Shipment</span></a>
                    </div>
                </div>
            </div>
            </form>
        </div>
<?php
    }
} else {
    echo "Query failed: " . mysqli_error($con);
}
?>

        
        <?php //endwhile; ?>
    </div>

    <!-- Form to add a new service -->
    <!-- <form id="addServiceForm" enctype="multipart/form-data">
        <div class="card">
            <div class="card-content wow fadeInUp" data-wow-delay="0.3">
                <hr>

            </div>
        </div>
    </form> -->
    <!-- ========New form section end======== -->

</section><hr style="width: 100%;border-color: rgba(0, 0, 0, 0.304);">

<section id="work3">
    <div class="heading">
        <a href="domestic.php"><h1 style="font-family: serif; padding-bottom: 20px;">DOMESTIC</h1></a>
    </div>
    <div id="international-section" style="padding-bottom: 100px;">


        <?php
            $query = "SELECT * FROM `domestic`";   //change table name;
            $result = mysqli_query($con, $query);

            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
        ?>
        <div id="international-section" style="padding-bottom: 100px;">
        <?php   
            //require 'data.php';
           
         ?>
            <form method="post" action="" enctype="multipart/form-data">
            <div class="card">
                <div class="card-content wow fadeInUp" data-wow-delay="0.3">
                    <?php
                    $imagePath = "Image/" . $row['Image'];
                    if (is_file($imagePath)) :
                    ?>
                       <img src="<?php echo $imagePath; ?>" alt="logo" width="50" height="50px" style="margin-top: 20px;">

                    <?php else : ?>
                        <p>Image not found: <?php echo $imagePath; ?></p>
                    <?php endif; ?>
                    <hr>
                    <p style="padding-bottom: 40px;"><?php echo $row['Description']; ?></p>
                    <div class="uiverse">
                        <span class="tooltip"><?php echo $row['Text']; ?></span>
                        <a href="<?php echo $row['URL']; ?>"><span>Track Shipment</span></a>
                    </div>
                </div>
            </div>
            </form>

        </div>
<?php
    }
} else {
    echo "Query failed: " . mysqli_error($con);
}
?>

    </div>
	
</section>







<!-- About section
================================================== -->
<section id="about" class="parallax-section" style="padding-top: 100px;padding-bottom: 50px;">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<a href="About.php"><h3 class="wow bounceIn" style="color: rgb(255, 208, 0);font-family: serif;">ABOUT US</h3></a>
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
<section id="contact" class="parallax-section" style="padding-top: 100px;">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">TRACK YOUR ORDER</h5>
					<a href="contact.php"><h1 class="heading" style="background: linear-gradient(20deg,#3aea09,#5d1004,#3329eb);color:transparent;background-clip: text;font-family:serif;">CONTACT US</h1></a>
					<hr> 
            </div>
			</div>

			<!-- Contact form section
			================================================== -->
			<div class="col-md-offset-1 col-md-10 col-sm-12">
    <form action="" method="post" class="wow fadeInUp" data-wow-delay="0.3s">
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

            if (mysqli_query($con, $query)) {
                echo "Record inserted successfully";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
            }
         
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