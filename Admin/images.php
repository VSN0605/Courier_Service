<!DOCTYPE html>
<html lang="en">
  <head>
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
            <!-- SLIDER FORM -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ADD IMAGES</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Image upload</label>
                        <!--<input type="file" name="img[]" class="file-upload-default">-->
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="Image">
                          <span class="input-group-append">
                            <!--<button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>-->
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">URL</label>
                        <input type="URL" class="form-control" id="exampleInputEmail3" name="URL" placeholder="URL" >
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2" name="submit1">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

              <?php
                ob_start();

              if (isset($_POST["submit1"])) {
                // Check if the form fields are set
                if (isset($_FILES['Image']) && isset($_POST['URL'])) {
                    $file_name = $_FILES['Image']['name'];
                    $file_size = $_FILES['Image']['size'];
                    $file_tmp = $_FILES['Image']['tmp_name'];
                    $file_type = $_FILES['Image']['type'];
            
                    // Validate file type, size, or any other necessary checks before uploading
            
                    $upload_path = "Image/";
            
                    // Move the uploaded file to the destination folder
                    if (move_uploaded_file($file_tmp, $upload_path . $file_name)) {
                        // File uploaded successfully
            
                        // Sanitize user input to prevent SQL injection
                        $url = mysqli_real_escape_string($con, $_POST['URL']);
            
                        // Insert data into the database
                        $query = "INSERT INTO `addimage` (`Image`, `URL`) VALUES ('$file_name', '$url')";
                        $result = mysqli_query($con, $query);
            
                        if ($result) {
                            // Redirect to the index.php page after successful insertion
                            //header("Location: index.php");
                            exit();
                        } else {
                            // Handle the case where the SQL query fails
                            echo "Error: " . mysqli_error($con);
                        }
                    } else {
                        // Handle the case where file upload fails
                        echo "Error uploading file.";
                    }
                } else {
                    // Handle the case where form fields are not set
                    echo "Please fill in all the required fields.";
                }
            }

            ob_end_flush();
                
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