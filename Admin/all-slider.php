<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Slider Data</title>
    <?php

      include('dbconnection.php');   //insert connection

      include_once('css.php');

      //include_once('service1.php');

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
                    <h4 class="card-title">All SLIDER</h4>
                    <div class="card-body">
                    
                    <form method="post" enctype="multipart/form-data">
                      <?php
                        $dis = mysqli_query($con, "SELECT * FROM `slider`");

                        if($dis){
                         echo '<table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Image</th>
                          <th>Heading</th>
                          <th>Url</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>';

                      while ($row = mysqli_fetch_array($dis)){
                          echo "<tr>";
                          echo "<td>"; echo $row['ID']; echo "</td>";
                          echo "<td>";?><img src="Image/<?php echo $row['Image'];?>" width="10px" height="10px"><?php echo "</td>";
                          echo "<td>"; echo $row['Heading']; echo"</td>";
                          echo "<td>"; echo $row['URL']; echo "</td>";
                          echo "<td>";
                          ?>
                    </form>

                            <!--Update Button-->
                            <form action="update-slider.php" method="post">
                              <input type="hidden" name="update_id" value="<?php echo $row['ID']; ?>">
                              <button type="submit" name="update_btn" style="background-color: green; color: white; padding: 5px 10px; border: none; border-radius: 5px; margin-bottom: 10px;"><b>UPDATE</b></button>
                            </form>

                            <!--Delete Button-->
                            <form method="post" action="delete-service.php">
                                <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                                <button type="submit" name="delete_btn" onclick="confirmDelete(<?php echo $row['ID']; ?>)" style="background-color: red; color: white; padding: 5px 10px; border: none; border-radius: 5px; margin-bottom: 10px;"><b>DELETE</b></button>
                            </form>

                            <!--Delete entry confirmation message-->
                            <script>

                              function confirmDelete(id)
                                {
                                  var confirmDelete = confirm("Are you sure you want to delete this entry?");
                                  if (confirmDelete)
                                  {
                                      document.getElementById('deleteForm' + id).submit();
                                  } 
                                  else {
                                    
                                  }
                                }

                            </script>

                        </td>
                        </tr>
                      
                        <?php
                        }
                          echo '</tbody>
                          </table>';
                      } else {
                        echo "Error: " . mysqli_error($con);
                      }
                      
                      ?>
                  
                  </div>
                  </div>
                </div>
              </div>
           
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