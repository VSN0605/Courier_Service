<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <div class="logo">
                <a href="#home"><img src="images/logo3.png" alt="logo"></a>
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">HOME</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li>
                    <a href="#">TRACK</a>
                    <ul class="option">
                    <li><a href="international.php" >INTERNATIONAL</a></li>
                    <li><a href="domestic.php" >DOMESTIC</a></li>
                    </ul>
                </li>
                <li><a href="logistic.php">LOGISTIC</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li class="search-icon" onclick="openSearchModal()">
					<a href="#"><i class="fas fa-search" style="font-size: 15px;"></i></a>
				  </li>
				  
				  <!-- Search modal -->
				  <div id="searchModal">
					<div class="modal-content">
					  <!-- Your search bar content goes here -->
					  <label for="searchInput"><i class="fas fa-search" style="font-size: 15px;"></i></label>
					  <input type="text" id="searchInput" name="searchInput">
					  <button onclick="closeSearchModal()"><i class="fa-solid fa-xmark" style="font-size: 15px;"></i></button>
					</div>
				  </div>
            </ul>
        </div>
    </div>
</section>
