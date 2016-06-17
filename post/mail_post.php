<?php

 //ini_set("display_errors","Off");
 
  if(isset($_POST)){
    $from = 'From: CMI Website';
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = isset($_POST['message']) ? $_POST['message'] : NULL;
    $check1 = isset($_POST['checkbox1']) ? $_POST['checkbox1'] : NULL;
    $check2 = isset($_POST['checkbox2']) ? $_POST['checkbox2'] : NULL;
    $check3 = isset($_POST['checkbox3']) ? $_POST['checkbox3'] : NULL;
    $check4 = isset($_POST['checkbox4']) ? $_POST['checkbox4'] : NULL;
    $to = 'acelizondo11@gmail.com';
    $subject = "Feedback from $email";
    $body = "From: $name\n E-Mail: $email\n Message:\n $check1\n $check2\n $check3\n $check4\n $message";

    if(isset($_POST['submit'])) {
        if (mail($to, $subject, $body, $from)) {
            echo "<div class='modal-reveal' id='pop-up' data-reveal=''>Your message has been sent!</div>";
        } else {
            print_r(error_get_last());
            echo "<div class='modal-reveal' role='dialog' id='pop-up' data-reveal='>Something went wrong, go back and try again!</div>";
        }
    }
  }
?>