<?php

include('dbconnection.php');
$dbconfig = mysqli_select_db($con, "golbal courier");

if($dbconfig)
{

}
else{
    echo
        '<div class="card">
            <div class="card-content wow fadeInUp" data-wow-delay="0.3">
                <hr>
                <p style="padding-bottom: 40px;">datbase connection failed</p>
                <div class="uiverse">
                    <span class="tooltip">DHL</span>
                    <a href="#"><span> (:  </span></a>
                </div>
            </div>
        </div>';
}

?>


