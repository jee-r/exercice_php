<?php

function login($loginCard) {
  switch ($loginCard) {
    case 'pasConnecter':
      $pasConnecter = "<div class='row justify-content-center align-items-center mt-4'>
                      <div class='card col-6' style='width: 18rem;'>
                        <div class='card-body'>
                          <h5 class='card-title'>Vous n'êtes pas connecter, connectez vous pour acceder a la basse cour.</h5>
                          </div>
                          </div>
                          </div>";
      return $pasConnecter;
      break;
    case 'mauvaisLogin':
      $mauvaisLogin = "<div class='row justify-content-center align-items-center mt-4'>
                        <div class='card col-6' style='width: 18rem;'>
                          <div class='card-body'>
                            <h5 class='card-title textRed'>Mauvais mot de pass ou mauvais utilisateur, reessayer de vous connectez pour acceder a la base cour</h5>
                            </div>
                            </div>
                            </div>";
      return $mauvaisLogin;
      break;
    case 'champRequis':
      $champRequis = "<div class='row justify-content-center align-items-center mt-4'>
                          <div class='card col-6' style='width: 18rem;'>
                            <div class='card-body'>
                              <h5 class='card-title textRed'>Les champs utilisateur et mot de passe sont requis, reessayer de vous connectez pour acceder a la base cour</h5>
                              </div>
                              </div>
                              </div>";
        return $champRequis;
        break;
    default:
      print_r('Error');
      break;
  }
}

function genCard2($Ncard) {
  // print_r($Ncard);
  $cards = "<div class='row justify-content-around'>";

  for ($i=0; $i < $Ncard ; $i++) {
    $card = "<div class='col-4 p-1'>
              <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='img/poule_".$i.".jpg' alt='Poule".$i."'>
                <div class='card-body'>
                  <h5 class='card-title'>Les elephants roses existent en Picardie</h5>
                  <p class='card-text'></p>
                </div>
              </div>
            </div>";
    $cards = $cards.$card;
  }
    $cards = $cards."</div>";
    return $cards;
}



?>
