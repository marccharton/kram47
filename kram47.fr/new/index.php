<!--
<?php
/* 
* @Author: Marc
* @Date:   2014-06-01 17:34:48
* @Last Modified by:   Marc
* @Last Modified time: 2014-06-03 18:25:03
*/
?>
-->

<!doctype html>
<html>
<head>
	<title>Ecole l'etoile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"> </script>
</head>
<body>
	<div id="frise">
	</div>
	<div class="container">
		<?php include("partials/header.inc.php"); ?>

		<?php include("partials/menu.inc.php"); ?>

		<section id="content" >
		<?php
			$pages = array(	"accueil" => "accueil.php",
							"events" => "evenements.php",
							"projetPedago" => "projetPedagogique.php",
							"galerie" => "galerie.php",
							"historique" => "historique.php",
							"articles" => "artciles.php",
							"anciens" => "anciensEleves.php");
			

			$p = (!empty($_GET['p'])) ? htmlentities($_GET['p']) : "accueil";

			 
			 if (!array_key_exists($p, $pages))
				$page = "accueil.php";
			else if (!is_file("partials/".$pages[$p]))
				$page = "erreur.php";
			else
				$page = $pages[$p];

			include("partials/".$page);

		?>
		</section>
	
	</div>

	<?php include("partials/footer.inc.php"); ?>

</body>
</html>
