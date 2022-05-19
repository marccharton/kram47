<html>
	<head>
		<title> Structure de base </title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
	                            <img src="assets/pictures/logoComplet.jpg" id="banniereLogo">
								<div id="banniereTitre"> 
	                               	La maison de l'huitre Ol&eacute;ronaise
                                </div>
                                <div id="pageTime">
								  <script language="javascript">
                                    var date_du_jour, heure, minute; 
                                    date_du_jour = new Date();
                                    heure = date_du_jour.getHours();
                                    minute = date_du_jour.getMinutes();
                                    
                                    document.write("Il est ", heure, "H");
									if (minute > 10)
	                                    document.write(minute, "<br />");
									else
	                                    document.write("0", minute, "<br />");
                                  </script>
                                  <SCRIPT LANGUAGE="JavaScript">
									  <!--
									  var today=new Date();	
									  
									  var month=today.getMonth();
									  var day_of_week=today.getDay();
									  
									  if (month == 0) {  document.month="janvier";  }
									  if (month == 1) {  document.month="fevrier";  }
									  if (month == 2) {  document.month="mars";  }
									  if (month == 3) {  document.month="avril";  }
									  if (month == 4) {  document.month="mai";  }
									  if (month == 5) {  document.month="juin";  }
									  if (month == 6) {  document.month="juillet";  }
									  if (month == 7) {  document.month="ao&ucirc;t";  }
									  if (month == 8) {  document.month="septembre";  }
									  if (month == 9) {  document.month="octobre";  }
									  if (month == 10) {  document.month="novembre";  }
									  if (month == 11) {  document.month="décembre";  }
									  
									  switch (day_of_week)
									  {
									   case 0: document.day="dimanche"; break;
									   case 1: document.day="lundi"; break;
									   case 2: document.day="mardi"; break;
									   case 3: document.day="mercredi"; break;
									   case 4: document.day="jeudi"; break;
									   case 5: document.day="vendredi"; break;
									   case 6: document.day="samedi"; break;
									  }
									  
									  document.writeln(document.day + " " + today.getDate() + " " + document.month + ". ")
									  -->
									</script>
                                </div>
                    	</header>
						<nav>
							<ul id="mainMenu">
							<?php 
								$pagesName = array ('accueil', 'vente', 'Galerie', 'ostreiculture', 'musee', 'parc', 'resto', 'liens', 'infosPratique', 'parcHuitres');
/*
								$pagesTitle = map( 'accueil':'Accueil'
												   'vente':'Vente d\'huitre'
												   'Galerie':'Galerie Photo'
												   'ostreiculture':'Histoire de l'Ostreiculture'
												   'musee':'Espace culturel'
												   'parc':'Les visites'
												   'resto':'Restaurant'
												   'liens':'Liens utiles'
												   'infosPratique':'Quelques infos'
												   'parcHuitres':'L'estrans et ses particularités');

								foreach ($pagesName as $pageName)
									echo '<a class="menuLink" href="index.php?page=' . $pageName . '"><li> ' . strtoupper($pageTitle[pageName]) . '</li></a>';
*/
								foreach ($pagesName as $pageName)
									echo '<a class="menuLink" href="index.php?page=' . $pageName . '"><li> ' . strtoupper($pageName) . '</li></a>';
							  ?>				  
	                        </ul>
                     	</nav>
						<section>						
	                        <?php 
								function checkPage ($page)
								{
									$pagesName = array ('accueil', 
														'vente', 
														'Galerie', 
														'ostreiculture', 
														'musee', 
														'parc', 
														'resto', 
														'liens', 
														'vente', 
														'infosPratique', 
														'parcHuitres');
														
									foreach ($pagesName as $pageName)
										if ($page == $pageName)
											return true;
									echo "<div class=\"badRedirection\">";
									echo "Mauvaise Page <br/>";
									echo "<span style=\"font-size:30px;\"> Vous allez etre redirig&eacute; vers l'accueil </span>";
									echo "</div>";
									header('Refresh: 2; url=index.php?page=accueil');
									return false;
								}					
								if (!isset($_GET['page']))
									include "pages/accueil.php";
								else
								{
									$page = $_GET['page'];
									if (checkPage($page))
										include "pages/" . $page . ".php";
								}
							?>
                    	</section>
			<footer align="center">
				<div id="banniereContact">
	    	        Patricia et Marc Texier <br />
	        		17370 le port SAINT TROJAN LES BAINS <br />
	                Tel : 05 46 76 08 16 - Fax  : 05 46 76 42 81 <br />
	        	</div>
	        </footer>
        </div>
	</body>
</html>