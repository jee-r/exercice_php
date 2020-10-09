<?php

require('card.php');

$membres = array(
    'patricia' => 'zebre',
    'michel' => 'dauphin',
    'pascal' =>  'cheval',
    'magali' => 'tortue'
);

if (isset($_GET['utilisateur']) && isset($_GET['motDePasse'])) {
  if ($_GET['utilisateur'] != "" && $_GET['motDePasse'] != "") {
    if ( isset($membres[$_GET['utilisateur']]) && $membres[$_GET['utilisateur']] == $_GET['motDePasse']) {
      include('upload.php');
      // $revelation = uploadForm();
    } else {
      $revelation = login('mauvaisLogin');
    }
  } else {
    $revelation = login('champRequis');
  }
} else {
    $revelation = login('pasConnecter');
}


?>
