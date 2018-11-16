<?php include 'header.php';?>
        
            <form method="post" action="" id="regStud" name="regStud">
  
  KlasseKode:<br>
  <input type="text" name="klasseKode" required="" onfocus="fokus(this)" onblur="misteFokus(this)" 
      onmouseover="musInn(this)"
      onmouseout="musUt(this)"><br>
  <input type="submit" name="klasseInnput" 
      id="klasseInnput" value="Skriv klasse kode">
      <input type="reset" >
</form>
<?php
if (isset($_POST ["klasseKode"]))  
{
$filnavn="data/student.txt";  /* filnavn angitt */
$navn=$_POST ["klasseKode"];
$navn=trim($navn);  /* mellomrom i starten og slutten "trimmet" vekk */
$filoperasjon="r";  /* filoperasjon ("r" for lesing) angitt  */
print ("F&oslash;lgende personer passer til s&oslash;kekriteriet <br> <br>");
print("Fornavn      Etternavn        Klasse <br> <br>");

$fil = fopen($filnavn,$filoperasjon);  /* filen åpnet */
while ($linje = fgets ($fil))  /* en linje lest fra fil */
{
if ($linje != ":")  /* linjen lest fra fil er ikke tom */
{
$del = explode (":" , $linje);  /* innholdet av linjen delt opp i fornavn og etternavn */
$brukernavn=trim($del[0]);  /* fornavn hentet ut */
$fornavn=trim($del[1]);
$etternavn=trim($del[2]);
$klasse=trim($del[3]);  /* etternavn hentet ut */



if (strtoupper($navn)==strtoupper($klasse))
/* fornavn eller etternavn er lik mottatt navn */

{

print ("$fornavn $etternavn $klasse <br />");
}
}
}
fclose ($fil);  

}
?>
        
<?php include 'footer.php';?>

