<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Information</title>

    <?php

      include('dbconnection.php');
      include_once('css.php'); 
          
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
                    <h4 class="card-title">INFORMATION</h4>
                    <div class="card-body">
                    
                  <form method="post" enctype="multipart/form-data">
                    <?php
                      $dis = mysqli_query($con, "SELECT * FROM contact_us");

                      if($dis){
                    
                    echo '<table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Service</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>';

                      while($row = mysqli_fetch_array($dis)){
                        echo "<tr>";
                        echo "<td>"; echo $row['ID']; echo "</td>";
                        echo "<td>"; echo $row['Name']; echo "</td>";
                        echo "<td>"; echo $row['E-mail']; echo "</td>";
                        echo "<td>"; echo $row['Service']; echo "</td>";
                        echo "<td style='max-width: 200px; overflow: hidden; text-overflow: ellipsis;'>"; echo $row['Message']; echo "</td>";
                        echo "<td>";
                        ?>
                        </form>
                            <form method="post" action="del_contact.php">
                              <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                              <button type="submit" name="delete_btn" onclick="confirmDelete(<?php echo $row['ID']; ?>)" style="background-color: red; color: white; padding: 5px 10px; border: none; border-radius: 5px; margin-right: 10px;"><b>DELETE</b></button>
                            </form>
                                        
                      </td>
                      <script>

                        function confirmDelete(id)
                          {
                            var confirmDelete = confirm("Are you sure you want to delete this entry?");
                            if (confirmDelete)
                            {
                                document.getElementById('deleteForm' + id).submit();
                            } 
                            else {
                              //return false;
                            }
                          }

                      </script>
                      </tr>
                      <?php
                      }
                      echo '</tbody>
                      </table>';
                    } else{
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