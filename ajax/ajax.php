<?php
  $classCode = $_GET["cc"]; // Henter teksten fra GET-arrayen, og setter dette til en variabel
  $classCode = strtoupper($classCode); // Setter teksten til store bokstaver

  $filnavn = "/home/051419/public_html/prg1000/prgtest/data/student.txt";

  $fil = fopen($filnavn, "r") or print("Fatal feil: Klarer ikke åpne filen, kontakt systemadministrator.");
  //print("<br>Følgene students ble funnet med " . $classCode . " class code:<br><br>");
  print("<table class=\"tabell1\" style='float:right'>\n");
  print("<caption>Student</caption\n");
  print("<tr>\n<th>Brukernavn</th>\n<th>Fornavn</th>\n<th>Etternavn</th>\n<th>Klassekode</th>\n</tr>\n");
  while($linje = fgetcsv($fil, 0, ":")) {
    if($classCode == $linje[3]) {
      print("<tr>");

      foreach ($linje as $celle) {
    		print("<td>".$celle."</td>\n");
    	}
    	print("</tr>\n");
    }
  }
  print("</table>");

  fclose($fil);

?>