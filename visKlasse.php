<?php include 'header.php';?>
        
            <?php 


$myfile = fopen("data/Klasse.txt", "r") or die("Kan ikke åpne fil ");
echo fread($myfile,filesize("data/Klasse.txt"));
fclose($myfile);


 ?>
        
        <?php include 'footer.php';?>