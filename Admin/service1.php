<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add International Service</title>

     <?php 
         include_once('css.php'); 

         include('dbconnection.php');
    
    ?>


  </head>

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
                    <h4 class="card-title">ADD SERVICE</h4>
                    <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group" enctype="multipart/form-data">
                        <label>Image upload</label>
                        <!-- <input type="file" name="img" class="file-upload-default"> -->
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="Image">
                          <span class="input-group-append">
                            <!--<button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>-->
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" name="description" id="exampleInputName1" placeholder="Description">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Text</label>
                        <input type="text" class="form-control" name="text" id="exampleInputEmail3" placeholder="Text">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">URL</label>
                        <input type="url" class="form-control" name="url" id="exampleInputName1" placeholder="URL">
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

                
                  mysqli_query($con,"INSERT INTO `international service` (`Image`, `Description`, `Text`, `url`)VALUES('$file_name', '$_POST[description]', '$_POST[text]', '$_POST[url]')");
                  //Change the table columns name as per your database columns and insert the name in table fields;

                  //header("Location: index.php");
                  exit();
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
</body>
</html>