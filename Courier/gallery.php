<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>GLOBAL SERVICES</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
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

        //require 'Courier/data.php';    
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



  

 
  

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <?php
      $query = "SELECT * FROM `addimage`";
      $result = mysqli_query($con, $query);

      if ($result) {
        while ($row = mysqli_fetch_array($result)) {
          
            $imagePath = "Image/" . $row['Image'];
            if (is_file($imagePath))  :
      ?>
      <div class="swiper-slide">
        <img src="<?php echo $imagePath; ?>" alt="image" >
        <?php else : ?>
          <p>Image not found: <?php echo $imagePath; ?></p>
        <?php endif; ?>
      </div>
      <?php
    }
  } else {
    echo "Query failed: " . mysqli_error($con);
  }
      ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next" style="color: black;"></div>
    <div class="swiper-button-prev" style="color: black;"></div>
    
  </div>

  <!-- Swiper JS -->
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
  

  <!-- Initialize Swiper -->
  <!-- <script>
    var swiper = new Swiper('.mySwiper', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script> -->
  
<!-- Footer section-->
<?php     include('includes/footer.php');    ?>
</body>
</html>