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
  <title>Update International Service</title>

  <!-- Update Form -->
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

    <?php  include_once('header.php');     ?>

    <div class="container-fluid page-body-wrapper">
      <?php include('sidebar.php');     ?>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <a href="index.php"><i class="mdi mdi-home" style="color: white;"></i></a>
              </span> UPDATE INTERNATIONAL SERVICE
            </h3>
          </div>

          <?php
            if(isset($_POST['update_btn'])) {
              $query="SELECT * FROM `international service` WHERE `ID` = '$_POST[update_id]'";
              $query_run=mysqli_query($con,$query);

              while($row=mysqli_fetch_assoc($query_run)) {
          ?>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">UPDATE SERVICE</h4>
                <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputName1">ID</label>
                      <input type="text" class="form-control" name="newID" value="<?php echo $row['ID']; ?>" readonly>
                    </div>
                    <label>Upload Image</label>
                    <div class="input-group col-xs-12">
                      <input type="file" class="form-control file-upload-info" name="Image" placeholder="Upload Image">
                      <span class="input-group-append"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Description</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="Description" placeholder="Description" value="<?php echo $row['Description']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Sub Button</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="Text" placeholder="Sub Button" value="<?php echo $row['Text']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Url</label>
                    <input type="URL" class="form-control" id="exampleInputEmail3" name="URL" placeholder="URL" value="<?php echo $row['url']; ?>">
                  </div>
                  <button type="submit" name="submit1" class="btn btn-gradient-primary me-2">Submit</button>
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

              $query="UPDATE `international service` SET `Image`='$file_name', `Description`='$_POST[Description]', `Text`='$_POST[Text]', `url`='$_POST[URL]' WHERE `ID`='$_POST[newID]'";
              $query_run=mysqli_query($con,$query);

              if ($query_run) {
                echo "<div class='lds-ring'><div></div><div></div><div></div><div></div></div>";
                echo "<script>
                        setTimeout(function() {
                            window.location='all-service.php';
                        }, 3000);
                      </script>";
                exit();
              } else {
                echo "<script>alert('Error in Data Updating:')</script>";
              }
            }
          ?>
        </div>
        <?php include_once('footer.php');   ?>
      </div>
    </div>
  </div>
</body>

</html>
