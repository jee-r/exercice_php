<?php

require('verification.php');

// 1 . Si un utilisateur tente de se connecter et fait bien partie des membres
//et a entré le bon mot de passe, alors on peut reveler $unSecret dans la div revelation

// 2. remplacer le contenu de unSecret par un module de cette page web beaucoup
//plus développé , plusieurs fois la meme card avec le meme contenu (dauphin)

//3. le contenu de ce qui apparaitre si l'on est connecté
// n'est plus stocké dans verification.php, mais sur une autre feuille de php
//qui sera donc un template  par exemple templateDeCardDauphin.php
//il faudra trouver un moyen de récupérer ce contenu depuis verification.php
//pour l'ajouter à cette dernière
// *** se renseigner sur les methodes alternatives qui font a peu pres la meme chose

//4. reprendre ce template et de n'y mettre qu'une card dauphin "type"
// et automatiser la génération de 6 cards identiques plutot qu'une seule
//sur la page verification.php

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MyUpload</title>
  </head>
  <body>
    <div class="container-fluid noPadding">
      <nav class="navbar navbar-dark bg-dark justify-content-between align-items-center">
        <div class="">
          <span class="siteTitle">MyUpload</span>
        </div>
        <form class="form-inline">
          <label for="utilisateur"></label>
          <input type="text" class="form-control mx-1" name="utilisateur" placeholder="Nom d'utilisateur">
          <label for="motDePasse"></label>
          <input type="text" class="form-control mx-1 " name="motDePasse" placeholder="Mot de passe">
          <input type="submit" class="form-control mx-1" value="Se connecter">
        </form>
      </nav>
    </div>

    <div class="container">
      <div class="revelation">
        <?php echo $revelation ?>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
