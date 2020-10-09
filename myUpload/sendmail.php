<?php

if (isset($_POST['yourEmail']) && isset($_POST['message']) && isset($_POST['subject'])) {
  $yourEmail = $_POST['yourEmail'];
  $validEmail = filter_var($yourEmail, FILTER_VALIDATE_EMAIL);
  $subject = $_POST['subject'];
  $subjectLenght = strlen($subject);
  $message = $_POST['message'];
  $messageLenght = strlen($message);
  if ($validEmail && $messageLenght > 10) {
    // print_r("OK");
    // $notification_text = "Format Valid";
    $myEmail = "devphp+jee@jeer";
    $headers = "From :".$yourEmail;
    if(mail($myEmail,$subject,$message,$headers)) {
      $notification_text = "Mail Send";
      $bgCard = "bg-success";
    } else {
      $notification_text = "Mail NOT Send";
      $bgCard = "bg-danger";
    }
  } else {
    $bgCard = "bg-danger";
    $notification_text = "Format Invalid";
    // print_r("NOK");
    // return print_r($validEmail." ".$subjectLenght." ".$messageLenght);
  }
  $notification = "<div class='upload p-3 mb-2 text-white ".$bgCard."'>
                <span>
                  ".$notification_text."
                </span>
              </div>";
  return $notification;
} else {
  return;
}

?>
