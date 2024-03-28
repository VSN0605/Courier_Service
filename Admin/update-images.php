<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
    .lds-ring {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: none;
    }

    .lds-ring div {
      box-sizing: border-box;
      display: block;
      position: absolute;
      width: 64px;
      height: 64px;
      margin: 8px;
      border: 8px solid #fff;
      border-radius: 50%;
      animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      border-color: #9a55ff transparent transparent transparent;
    }

    .lds-ring div:nth-child(1) {
      animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
      animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
      animation-delay: -0.15s;
    }

    @keyframes lds-ring {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
  <script>
   <?php
      if(isset($_POST["submit1"])) {
         echo "document.addEventListener('DOMContentLoaded', function() {
                  document.querySelector('.lds-ring').style.display = 'inline-block';
               });";
      }
   ?>
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Images</title>

    <?php 

       include_once('css.php');

       include('dbconnection.php');
    ?>


  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      


      <?php  include_once('header.php');     ?>



      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        

     
          <?php     include('sidebar.php');     ?>



        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <a href="index.php"><i class="mdi mdi-home" style="color: white;"></i></a>
                </span> Dashboard
              </h3>
            </div>
            <?php
                if(isset($_POST['update_btn'])) {
                $query="SELECT * FROM `addimage` WHERE `ID` = '$_POST[update_id]'";
                $query_run=mysqli_query($con,$query);

                while($row=mysqli_fetch_assoc($query_run)) {
            ?>
            <!-- SLIDER FORM -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ADD IMAGES</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">

                    <div class="form-group">
                      <label for="exampleInputName1">ID</label>
                      <input type="text" class="form-control" name="newID" value="<?php echo $row['ID']; ?>" readonly>
                    </div>
                        <label>Image upload</label>
                        <!--<input type="file" name="img[]" class="file-upload-default">-->
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="Image" value="<?php echo $row['Image']; ?>" placeholder="Upload Image">
                          <span class="input-group-append">
                            <!--<button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>-->
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">URL</label>
                        <input type="URL" class="form-control" id="exampleInputEmail3" name="URL" value="<?php echo $row['URL']; ?>" placeholder="URL" >
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2" name="submit1">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php
              }
            }

            if(isset($_POST["submit1"])) {
              if(isset($_FILES['Image'])) {
                $file_name=$_FILES['Image']['name'];
                $file_size=$_FILES['Image']['size'];
                $file_tmp=$_FILES['Image']['tmp_name'];
                $file_type=$_FILES['Image']['type'];
                move_uploaded_file($file_tmp,"Image/".$file_name);
              }

              $query="UPDATE `addimage` SET `Image`='$file_name', `URL`='$_POST[URL]' WHERE `ID`='$_POST[newID]'";
              $query_run=mysqli_query($con,$query);

              if ($query_run) {
                echo "<div class='lds-ring'><div></div><div></div><div></div><div></div></div>";
                echo "<script>
                        setTimeout(function() {
                            window.location='all-images.php';
                        }, 3000);
                      </script>";
                exit();
              } else {
                echo "<script>alert('Error in Data Updating:')</script>";
              }
            }
          ?>
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php      include_once('footer.php');   ?>
        </div>
      </div>
    </div>
    
    <!-- End custom js for this page -->
  </body>
</html>