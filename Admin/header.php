<?php

  //session_start();
  // if (!isset($_SESSION['username'])) {
  //     header("Location: login.php");
  //     exit();
  // }

?>

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo3.png" alt="logo" style="height: 50px;" /></a>
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            
            
              
            <li class="nav-item nav-logout d-none d-lg-block">
              <form action="login.php" method="post">
                <input type="hidden" name="logout" value="true">
                <button type="submit" class="nav-link">
                  <i class="mdi mdi-power"></i>
                </button>
              </form>
            </li>
            
            <!-- <?php
                 //Start the session (if not already started)
                 //session_start();

                // Check if the logout action is triggered
                //if (isset($_POST['logout'])) {
                    // Destroy all session data
                   // session_destroy();

                    // Redirect to the login page or any other page after logout
                  // header("Location: login.php"); // Change "login.php" to your desired login page
                    //exit();
                //}
            ?> -->

          </ul>
          
        </div>
      </nav>

      
      