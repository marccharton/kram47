<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
	<?php 
       	include "Classes/Menu.php";
	?> 
    <title>Ecole Etoile</title>
    <!-- <link rel="stylesheet" href="styles/ie_siteGlobal.css" type="text/css" /> -->  
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css"/>      
        <link rel="stylesheet" href="styles/siteGlobal.css" type="text/css"/>
      <![endif]-->
      <!--[if !IE]> -->
          <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css"/>
          <link rel="stylesheet" href="styles/siteGlobal.css" type="text/css"/>
      <!-- <![endif]-->   
  </head>
<body>
<!--    <img src="assets/pictures/livre.png" width="300px" style="position: absolute;right: 0px;" />
    <img src="assets/pictures/livre2.png" width="300px" style="position: absolute;bottom: 10%;" />
    <img src="assets/pictures/crayon.png" width="300px" style="position: absolute;left: 0px;" />
    <img src="assets/pictures/ecolier.png" width="300px" style="position: absolute;right: 0px;bottom:0px;" />-->

    <div id="globalSite">
      <header> 
        <!-- 
        <img id="header_logo" src="assets/pictures/oldLogo.png" />
        <span id="header_title"> AD-ProdDij </span>
        -->
        <img id="header_bg" src="assets/pictures/Banniere3.jpg" /> 
      </header>
      <nav>
        <ul class="nav_menu">
            <?php 
                $menu = new Menu();
                $menu->printHeadMenu();
            ?>
        </ul>
      </nav>
      <section> 
          <?php				
                $menu->includePage();
          ?>
      </section>
      <div class="nav_menu" id="socialBar">
          <a href="http://www.facebook.com" target="_blank" class="btn btn-primary btn-small"> Facebook </a>
      </div>
    </div>

    <footer> 
        <?php
            include "pages/footer.php";
        ?>
    </footer>
</body>
</html>