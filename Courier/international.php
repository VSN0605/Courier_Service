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
<section id="work">
    <div class="heading" style="margin-top: 50px; ">
        <h1 style="font-family: serif; padding-bottom: 20px;">INTERNATIONAL</h1>
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
  </div>	
</section>



<!-- Footer section-->
<?php     include('includes/footer.php');    ?>
</body>
</html>