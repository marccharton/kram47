<html>
  <head>
	<?php 
       	include "Classes/Menu.php";
	?> 
    <title>AD Proddij</title>
      <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" href="styles/siteGlobal.css" type="text/css"/>
        <link rel="stylesheet" href="styles/ie_siteGlobal.css" type="text/css" />
      <![endif]-->
      <!--[if !IE]> -->
        <link rel="stylesheet" href="styles/siteGlobal.css" type="text/css"/>
      <!-- <![endif]-->   
  </head>
<body>
    <div id="globalSite">
      <header> 
        <!-- 
        <img id="header_logo" src="assets/pictures/oldLogo.png" />
        <span id="header_title"> AD-ProdDij </span>
        -->
        <img id="header_bg" src="assets/pictures/banniere2.png" />   
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
			/*	
          $headers = 	'From: abuse@bankofamerica.com' . "\r\n" . 'Reply-To: kramoogle@gmail.com' . "\r\n";
				
				  $ip = $_SERVER["REMOTE_ADDR"];    
				  mail("kramoogle@gmail.com", "Connection sur kram47.fr/ADproddij" , "Message envoyé depuis le site \"http://kram47.fr/ADproddij\"\n" . "Et mon IP est : " . $ip . ".", $headers);
      */
          
          ?>
      </section>
      <footer> 
        <ul class="nav_menu">
            <?php					
                $menu->printFooterMenu();	
            ?>
        </ul>
      </footer>
    </div>
</body>
</html>