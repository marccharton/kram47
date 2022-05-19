<h1>Les visites comment�es de la Maison de l'hu�tre Ol�ronaise</h1>

<table border="1" width="93%" cellspacing="0" id="parcTab">
  <tr>
    <th width="172" colspan="3">Tarifs 2011</th>
    <th width="126" align="center">Individuelle</th>
    <th width="135" align="center">Tarifs Groupes</th>
    <th align="center"> Partenaires et campings</th>
  </tr>
  <tr>
    <td width="172" align="center">Lieu de visite</td>
    <td width="353" align="center">Son contenu</td>
    <td width="107" align="center">Horaires</td>
    <td width="126" align="center">� partir de 4 personnes</td>
    <td width="135" align="center">� partir de 15 personnes</td>
    <td align="center">� 
      partir de 15 personnes</td>
  </tr>
  <tr>
    <td width="172">
    	Mus�e Ostr�icole et Port de ST TROJAN �le d'Ol�ron
    </td>
    <td width="353">
    	Visite Comment�e du Mus�e Ostr�icole <br />
        Histoire et techniques de l'Ostr�iculture. <br />
        D�couverte du tri Manuel et M�canique. <br />
        Des Claires d'affinage et de l'activit� portuaire. <br />
		Dur�e de la visite 1H30 environ. <br />
        D�gustation d'hu�tres offertes. <br />
    </td>
    <td width="107">
    	Ouvert <br />
      	Toute l'ann�e <br />
	    sur <br />
		r�servation <br />
	    visite 16 H
    </td>
    <td width="126" align="center">
    	Enfants : 6,70 � <br />
        Adultes : 9,00 �<br />
	</td>
    <td width="135" align="center">
    	Mus�e <br />
        Enfants : 4,50 �<br />
		Adultes : 7,95 �<br />
      	Accompagnateurs gratuits
    </td>
    <td align="center">
    	Mus�e <br />
        Enfants : 4,50 � <br />
      	Adultes : 7,95 � <br />
      	Accompagnateurs gratuits<br />
	</td>
  </tr>
  <tr>
    <td width="172" align="center">
    	Visite <br />
      	des parcs � hu�tres<br />
		� mar�e basse<br />
		� St TROJAN
    </td>
    <td width="353" align="center">
    	Visite � pieds des parcs ostr�icoles environnant <br />
      	ST TROJAN<br />
      	D�couverte de la faune <br />
        et de la flore marine de notre r�gion.<br />
      	Pr�voir bottes, Possibilit� location 1,70 �<br />
      	Dur�e de la visite 2 heures environ<br />
		D�gustation d'hu�tres offerte.
    </td>
    <td width="107" align="center">
    	Ouvert <br />
		Toute l'ann�e <br />
		sur <br />
       	r�servation<br />
	</td>
    <td width="126" align="center">
    	Enfants : 7,90 � <br />
		Adultes : 9,90 � <br />
	</td>
    <td width="135" align="center">
    	Mus�e <br />
		Enfants : 4,50 �<br />
		Adultes : 7,95 �<br />
		Accompagnateurs gratuits<br />
	</td>
    <td align="center">
    	Mus�e <br />
        Enfants : 4,50 �<br />
		Adultes : 7,95 �<br />
		Accompagnateurs gratuits<br />
	</td>
  </tr>
  <tr>
    <td width="172" align="center">
    	Mus�e et visite des parcs <br />
        D�gustation
   	</td>
    <td width="353" align="center">
    	Les deux visites dur�e 3H30
    </td>
    <td width="107" align="center">
    	Sur r�servation
    </td>
    <td width="126" align="center">
    	Enfants : 13,00 � <br />
		Adultes : 17,00 � <br />
	</td>
    <td width="135" align="center">
		Enfants : 8,50 �<br />
		Adultes : 14,00 �<br />
	</td>
    <td align="center">
		Enfants : 9,50 �<br />
      	Adultes : 12,50 �<br />
      </td>
  </tr>
</table>

<h2> Les dates ou vous pourrez visiter les parcs (fonction du coefficient de mar�e et de l'heure de basse mer : </h2>


<?php
$monfichier = fopen('assets/parcVisitesHoraires.txt', 'r+');
$nbTab = 1;

while (!feof($monfichier))
{
	addTable($monfichier, $nbTab);
	$nbTab++;
}

function addTable($monfichier, $nbTab)
{
	echo "<table border=\"1\" width=\"500\" height=\"32\" class=\"parcVisitesHorairesTab\" cellspacing=\"0\">\n\t";
	$str = fgets($monfichier); // On lit la premi�re ligne (mois, annee)
	addTitleRow($str);
	$str = fgets($monfichier); // On recupere une ligne du fichier (jour, heure)
	while (!feof($monfichier) && $str != "
") // on verifie si on est pas a la fin d'un tableau
	{
		addRow($str); // On appelle la fonction qui s'occupe de parser et d'ajouter la ligne dans le tableau
		$str = fgets($monfichier); // On lie la prochaine ligne avant de boucler
	}
	echo "</table>\n";
}

function addTitleRow($str)
{
	$posComa = strpos($str, ","); 			// on recupere la position de la virgule
	$posReturnLine = strpos($str, "\n"); 	// on recupere la position du retour a la ligne
	$month = substr($str, 0, $posComa); 	// on recupere le mois (entre le debut et la position de la virgule)
	$year = substr($str, $posComa + 1, $posReturnLine - $posComa - 1); // on recupere l'annee (entre la position de la virgule et le retour a la ligne)
	echo "<tr> \n\t\t<th colspan=\"2\"> " . $month . " " . $year . " </th> \n\t</tr>\n"; // On ecrit ca dans un tableau HTML
}

function addRow($str)
{
	$posComa = strpos($str, ",");
	$posReturnLine = strpos($str, "\n");
	$day = substr($str, 0, $posComa);
	$hour = substr($str, $posComa + 1, $posReturnLine - $posComa - 1);
	echo "\t<tr> \n\t\t<td> " . $day . " </td> \n\t\t<td> " . $hour . " </td> \n\t</tr>\n";
}

fclose($monfichier);
?>

<div style="clear:both;"> <a href="la_visite_des_parcs.htm">Le Webmaster a suivi la visite des parcs...</a> </div>

<img src="assets/pictures/pics/sur-collecteurmasque.jpg" width="567" height="454" lowsrc="Explication%20sur%20les%20collecteurs"><br />

� mar�e basse <i>� SAINT TROJAN </i> <br />
