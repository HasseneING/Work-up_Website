<?php
include "../../core/gallerieC.php";
$gallerie1C=new gallerieC();
$liste=$gallerie1C->afficherGallerie();

?>
<html> 
<h1> OUR GALLERY </h1>
<link rel="stylesheet" href="show.css">
<div class="gallery">
    <?php
                  foreach($liste as $row){
                    ?>
   
    <div class="col-lg-3">
        <a href="<?php echo $row['title']; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"]; ?>" >
            <a href="uploads/images/<?php echo $row['file_name']; ?>"><img src="uploads/images/<?php echo $row['file_name']; ?>" alt="" /></a>
            <p><?php echo $row["title"]; ?></p>
        </a>
    </div>
    <?php
     }
     ?>
</div>

<!-- Fancybox CSS library -->
<link rel="stylesheet" type="text/css"  href="show.css"">

<!-- Stylesheet file -->
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>
<!-- Initialize fancybox -->
<script>
  $("[data-fancybox]").fancybox();
</script>