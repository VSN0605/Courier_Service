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






<section class="alltracking" style="margin-top: 150px;margin-bottom:150px;">
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



<!-- Footer section-->
<?php     include('includes/footer.php');    ?>
</body>
</html>