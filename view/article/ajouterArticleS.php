<html> 
    
<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body style="background:black;">
    
</body>
</html>
<?php
include "../../core/articleC.php";
include "../../entities/article.php";

if (!empty($_POST['title']) and 
    !empty($_POST['content']) and 
    !empty($_POST['user']) 
    
  )
{ 
     
$article1=new article($_POST['title'],$_POST['content'],$_POST['user']);
    

    
$article1C=new articleC();

$article1C->ajouterarticle($article1);
header('Location: afficherArticle.php');
}
else echo("Verifier les Champs! ");




?>

