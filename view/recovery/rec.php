<html>

<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body>

</body>

</html>

<?php


include "../../core/userC.php";

$user1C = new userC();
$recover1C = new recoverC();
$i = 0;

if (!empty($_POST['email'])) {
    if ($user1C->emailExists($_POST['email'])) {

        $recup_email = htmlspecialchars($_POST['email']);

        $recup_code = "";
        for( $i ; $i < 8 ; $i++ ){
          $recup_code .= mt_rand(0,9);
        }

        $pseudo = $user1C->findName($recup_email);

        if($recover1C->emailExists($recup_email) == $recup_email){
          $recover1C->update($recup_email,$recup_code);
        }
        else{
          $recover1C->addrecover($recup_code,$recup_email);
          echo "done";
        }

        $header = "MIME-Version: 1.0\r\n";
        $header .= 'From:"[Work UP]"<elbeuff@gmail.com>' . "\n";
        $header .= 'Content-Type:text/html; charset="utf-8"' . "\n";
        $header .= 'Content-Transfer-Encoding: 8bit';
        $message = '
         <html>
         <head>
           <title>Récupération de mot de passe !</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                    <div align="center">Bonjour <b>' . $pseudo . '</b>,</div>
                    cliquez <a href="localhost/work-up_website/view/recovery/rec.php?section=code&code='. $recup_code .'>ici</a> pour reinitialiser votre mot de passe !<br>
                    A bientot sur <a href="http://localhost/work-up_website/view/index.php">Work UP</a>!!
                    

                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       Ceci est un email automatique, merci de ne pas y répondre
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
         mail($recup_email, "Récupération de mot de passe - Work UP", $message, $header);

    } else {
        echo ('<script>swal("OUPS !", "Email doesn t exist !", "error", {
                buttons: false,
                timer: 1729
            }); </script>');
        header('location: recuperer.html');
    }
} else {
    echo ('<script>swal("OUPS !", "Insert an Email please !", "error", {
            buttons: false,
            timer: 1729
        }); </script>');
    header('location: recuperer.html');
}



?>