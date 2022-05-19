function displayPics()
{
  var photos = document.getElementById('galerie_mini') ;
  // On r�cup�re l'�l�ment ayant pour id galerie_mini
  var liens = photos.getElementsByTagName('a') ;
  // On r�cup�re dans une variable tous les liens contenu dans galerie_mini
  var big_photo = document.getElementById('big_pict') ;
  // Ici c'est l'�l�ment ayant pour id big_pict qui est r�cup�r�, c'est notre photo en taille normale

  var titre_photo = document.getElementById('photo').getElementsByTagName('dt')[0] ;
  // Et enfin le titre de la photo de taille normale
  // Une boucle parcourant l'ensemble des liens contenu dans galerie_mini
  for (var i = 0 ; i < liens.length ; ++i) {
    // Au clique sur ces liens 
    liens[i].onclick = function() {
      big_photo.src = this.href; // On change l'attribut src de l'image en le rempla�ant par la valeur du lien
      big_photo.alt = this.title; // On change son titre
      // titre_photo.firstChild.nodeValue = this.title; // On change le texte de titre de la photo
      titre_photo.firstChild.nodeValue = "";
      return false; // Et pour finir on inhibe l'action r�elle du lien
    };
  }
}

// Il ne reste plus qu'� appeler notre fonction au chargement de la page
window.onload = displayPics;