<?php 


require 'PHPMailer-master/PHPMailerAutoload.php';





$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPAuth = true;
$mail->Debugoutput='html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 25;
$mail->isHTML(true);
$mail->Username = "
kechida.amina1999@gmail.com
"; //hedha l mail ili bcih tab3eth bih inty 
$mail->Password = "181JFT30071999"; //mdp l mail mte3ik 
$mail->setFrom("
kechida.amina1999@gmail.com
"); //nafss l mail mte3ik t3awdou 
$mail->Subject = "3aslema"; //sujet mta3 l mail mte3ik
$mail->Body= "Nous avons reçue votre réclamation et nous allons la traiter dans les plus brefs délais ";
$mail->AltBody ="Nous avons reçue votre réclamation et nous allons la traiter dans les plus brefs délais "; //ikteb ili t7eb
$mail->AddAddress("skander.baccouche@esprit.tn"); // lmail mta3 l 3abed ili bich tab3athlou 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//var_dump($mail);
if (!$mail->send()) 
    { 
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else
    {


    ?>
        <script>
        Javascript:alert('Mail sent !');
        </script>
    <?php
    }


?>






