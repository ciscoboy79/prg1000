<?php include 'header.php';?>
        
            <?php 




/*

$myfile = fopen("student.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("student.txt"));


*/
$filnavn="data/student.txt";  /* filnavn angitt */
$filoperasjon="r";  /* filoperasjon ("r" 
-
fo
r lesing) angitt  */
print ("F&oslash;lgende personer er registrert <br> <br>"); 
$fil = fopen($filnavn,$filoperasjon);  /* filen åpnet */
while ($linje = fgets ($fil))  /* en linje lest fra fil */
{
if ($linje != "")  /* linjen lest fra fil er ikke tom */
{
$del = explode (":" , $linje);  
/* innholdet av linjen delt opp i fornavn og etternavn */
$fornavn=trim($del[0]);  /* fornavn hentet ut */
$etternavn=trim($del[1]);  /* etternavn hentet ut */
print ("$fornavn $etternavn <br />");
}
}
fclose ($fil);     /* filen lukket */
//print(explode(" ", $myfile));
//fclose($myfile);

 ?>
         <?php include 'footer.php';?>