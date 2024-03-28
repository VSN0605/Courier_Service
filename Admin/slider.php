<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Slider</title>

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
            <!-- SLIDER FORM -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ADD SLIDER</h4>
                    <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Image upload</label>
                        <!-- <input type="file" name="img[]" class="file-upload-default"> -->
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="Image">
                          <span class="input-group-append">
                            <!--<button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>-->
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Heading</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Heading" name="Heading">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Url</label>
                        <input type="URL" class="form-control" id="exampleInputEmail3" placeholder="URL" name="URL">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2" name="submit1">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php

              if(isset($_POST["submit1"]))
              {
                if(isset($_FILES['Image']))
                {
                    $file_name=$_FILES['Image']['name'];
                    $file_size=$_FILES['Image']['size'];
                    $file_tmp=$_FILES['Image']['tmp_name'];
                    $file_type=$_FILES['Image']['type'];
                    move_uploaded_file($file_tmp,"Image/".$file_name);
                }
                mysqli_query($con,"INSERT INTO `slider` (`Image`, `Heading`, `URL`)VALUES('$file_name', '$_POST[Heading]', '$_POST[URL]')");

                //header("Location: index.php");
                  //exit();
              }
              ?>
           
            <!-- END OF SLIDER FORM -->
            
            
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