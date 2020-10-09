<?php


$div_upload = "
  <div class='upload'>
    <form method='post' enctype='multipart/form-data'>
      <div class='uploadBox' >
        <div class='form-group'>
          <label for='uploadfile'>Upload your file</label>
          <input class='btn' type='file' name='uploadfile' class='form-control-file'>
        </div>
        <div class='form-check'>
          <input class='form-check-input' type='checkbox' name='sendbymail' id='sendbymail value='true'>
          <label class='form-check-label' for='sendbymail'>Send by mail</label>
        </div>
        <div class='form-group'>
          <label for='yourEmail'>Your Email address</label>
          <input type='email' class='form-control' id='yourEmail' name='yourEmail' placeholder='name@example.com' required value='abc@abc.com'>
        </div>
        <div class='form-group'>
          <label for='message'>Add a message</label>
          <input type='textarea' class='form-control' id='message' name='message' rows='8' placeholder='Your message must have a minimum length of 10 characters'></textarea>
          <label for='subject'></label>
          <input type='hidden' id='subject' name='subject' value='myUpload'>
        </div>
        <button class='btn btn-primary' type='submit' name='button'>envoyer</button>
      </div>
    </form>
  </div>";


if($_FILES) {
  $monFichier = $_FILES['uploadfile'];
  $nomDuFichier = $monFichier['name'];
  $tmpPathDuFichier = $monFichier['tmp_name'];
  $upload_dir = getcwd()."/uploads/";
  $url = "http://localhost:8080/myUpload/uploads/".$nomDuFichier;

  $upload_success = $div_upload."
        <div class='upload'>
          <div class='uploadBoxSuccess p-3 mb-2 bg-success text-white' >
            <span>Votre fichier a été correctement uploadé</span>
            <span>URL : <a href='".$url."' target='_blank' >".$url."</a>
          </div>
        </div>";

  $upload_failed = $div_upload."
        <div class='upload'>
          <div class='uploadBoxFailed p-3 mb-2 bg-danger text-white' >
            <span>L'upload du fichier a échoué</span>
          </div>
        </div>";

  if(move_uploaded_file($tmpPathDuFichier, $upload_dir.$nomDuFichier)) {
    if(isset($_POST["sendbymail"]) && $_POST["sendbymail"] == "on") {
      $mailreturn = include('sendmail.php');
    }
    $revelation = $upload_success.$mailreturn;
  } else {
    $revelation = $upload_failed;
  }
} else {
  $revelation = $div_upload;
}
 ?>
