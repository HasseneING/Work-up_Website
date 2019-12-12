<?php session_start();?>
<html>

<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body>



  <?php


  include "../../core/userC.php";
  require 'PHPMailer-master/PHPMailerAutoload.php';

  $user1C = new userC();
  $recover1C = new recoverC();

  if (!empty($_POST['email'])) {
    if ($user1C->emailExists($_POST['email'])) {

      $recup_email = htmlspecialchars($_POST['email']);

      $recup_code = "";
      for ($i = 0; $i < 8; $i++) {
        $recup_code .= mt_rand(0, 9);
      }
      $_SESSION['code']=$recup_code;
      $_SESSION['rec']=$recup_email;
      $pseudo = $user1C->findName($recup_email);

      if ($recover1C->emailExists($recup_email) == $recup_email) {
        $recover1C->update($recup_email, $recup_code);
      } else {
        $recover1C->addrecover($recup_code, $recup_email);
      }

      $mail = new PHPMailer();
      $mail->IsSmtp();
      $mail->SMTPAuth = true;
      $mail->Debugoutput = 'html';
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 25;
      $mail->isHTML(true);
      $mail->Username = "kechida.amina1999@gmail.com";
      $mail->Password = "181JFT30071999";
      $mail->setFrom("kechida.amina1999@gmail.com");
      $mail->Subject = "Code of recovery WORKUP";
      $mail->Body = "<p>Hello <h3>" . $pseudo . "</h3> !</p><br><p>This is your code : " . $recup_code . " Now you can recover your password !</p>
    <h2>IT'S AN AUTOMATIC MESSAGE PLEASE DON'T REPLY !</h2>";
      $mail->AltBody = "HAVE A GOOD DAY !";
      $mail->AddAddress($recup_email);
      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
       ?>
        <form id="fourma" action="aftermail.php">
          <input type="hidden" name="email" value="<?php $recup_email ?>">
          <input type="hidden" name="code" value="<?php $recup_code ?>">
          <input type="submit" value="confirm">
        </form>
  <?php
      }
    } else {
      echo ('<script>swal("OUPS !", "Email doesn t exist !", "error", {
                buttons: false,
                timer: 1729
            }); </script>');
      header("refresh:1.7;url=recuperer.html");
    }
  } else {
    echo ('<script>swal("OUPS !", "Insert an Email please !", "error", {
            buttons: false,
            timer: 1729
        }); </script>');
    header("refresh:1.7;url=recuperer.html");
  }
  ?>

</body>

</html>