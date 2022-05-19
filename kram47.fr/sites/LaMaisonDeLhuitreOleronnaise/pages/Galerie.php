<h1> Galerie Photo </h1>
<div id="galerie">
  <ul id="galerie_mini">
	    <?php
		$dirname = './assets/pictures/Galerie/';
		$dir = opendir($dirname); 

		while($file = readdir($dir)) 
		{
			if($file != '.' && $file != '..' && !is_dir($dirname.$file))
			{
			    $trouve_moi = ".";
				$position = strpos($file, $trouve_moi);
				$imageName = substr($file, 0, $position);
			    echo '<li><a href="' . $dirname.$file . '" title="'.$imageName.'">
				<img class="imgMini" src="' . $dirname.$file . '" alt="Le titre de la photo" width="100" height="100"/></a></li>';
			}
		}
		closedir($dir);
	 ?> 
</ul>

  <dl id="photo">
    <dt>Choisissez une photo</dt>
    <dd><img id="big_pict" src="" alt="Apercu" width="800"/></dd>
  </dl>
</div>
