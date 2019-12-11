<?php 

include "../../core/userC.php";
require 'PHPMailer-master/PHPMailerAutoload.php';

$user1C=new userC();
$list=$user1C->afficherUsers();


foreach ($list as $row) {
                        

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
$mail->Body= "bonjour mesdames et messieurs veuillez consulter notre site et visiter notre gallerie :)";
$mail->AltBody ="bonjour mesdames et messieurs veuillez consulter notre site et visiter notre gallerie :)"; //ikteb ili t7eb
$mail->AddAddress($row['email']); // lmail mta3 l 3abed ili bich tab3athlou 
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
        header('Location : supprimerImage.php');
    } 
    else
    {
    ?>
        <script>
        Javascript:alert('Mail sent !');
        </script>
    <?php
    }
}

?>






