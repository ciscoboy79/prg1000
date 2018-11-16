<?php include 'header.php';?>

<script>
function loadClasses(tekst) {
    var foresporsel = new XMLHttpRequest();

    foresporsel.onreadystatechange = function() {
        if(foresporsel.readyState == 4 && foresporsel.status == 200) {
            document.getElementById("classlist").innerHTML = foresporsel.responseText;
        }
    }

    foresporsel.open("GET", "ajax/ajax.php?cc=" + tekst);
    foresporsel.send();
}

</script>



  <?php

$brukernavn = $klassekode = $fornavn = $etternavn = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $brukernavn = $_POST["brukernavn"];
  $klassekode = $_POST["klassekode"];
  $fornavn = $_POST["fornavn"];
  $etternavn = $_POST["etternavn"];

  if ($klassekode == "" || $brukernavn == "" || $fornavn == "" || $etternavn == "") {

    echo "Obligatorisk felt" ;



  }else {

  $file = 'data/student.txt';


  $current = $brukernavn . ":" . $fornavn  . ":" . $etternavn . ":" . $klassekode . "\n";
  file_put_contents($file, $current, FILE_APPEND);

  echo "Studenten er registrert" ;
  }
}
    ?>




<div id="classlist" style="color: blue"></div>



<form novalidate onsubmit="return validateForm()" name="studentform" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  Brukernavn:
  <input type="text" name="brukernavn" id="brukernavn" required=""
  onmouseover="musInn3(this)"
   onmouseout="musUt3(this)" ><br><br>
  Fornavn:
  <input type="text" name="fornavn" id="fornavn" required=""
  onmouseover="musInn4(this)"
   onmouseout="musUt4(this)" ><br><br>
  Etternavn:
  <input type="text" name="etternavn" id="etternavn" required=""
  onmouseover="musInn5(this)"
   onmouseout="musUt5(this)" ><br><br>
  Klassekode:

<select name="klassekode" id="klassekode" 
onChange="loadClasses(document.getElementById('klassekode').value)">
<option>Velg klasse</option>
 <?php 
// dropdown classes

$myfile = file ("data/Klasse.txt");

foreach($myfile as $line){
  $pieces = explode(":", $line);

// html can use both ' and ", printing HTML with php - using a SINGLE quote to avoid having to /" (also called an ESCAPE)
  echo "<option value= '" .  $pieces[0] . "'>" . $pieces[1] . "</option>" ;

}

   ?>

 </select>

 <p id="mouse" style="color: red"></p>


  <input type="submit" value="Registrer">

  <input type="reset" value="nullstill">

</form>




<br><br><br><br><br><br><br><br>


<script type="text/javascript">




function validateForm() {
    

    var brukernavn = document.forms["studentform"]["brukernavn"].value;
    var fornavn = document.forms["studentform"]["fornavn"].value;
    var etternavn = document.forms["studentform"]["etternavn"].value;
    var klassekode = document.forms["studentform"]["klassekode"].value;

    if (brukernavn == "") {
      document.getElementById("mouse").innerHTML="Brukernavn obligatorisk";

        return false;
        }

    if (fornavn == "") {
      document.getElementById("mouse").innerHTML="Fornavn obligatorisk";

        return false; 
        }   

    if (etternavn == "") {
      document.getElementById("mouse").innerHTML="Etternavn obligatorisk";
        return false;
        }

    if (klassekode == "") {
      document.getElementById("mouse").innerHTML="Klassekode obligatorisk";
        return false;
    }
}
</script>

<?php include 'footer.php';?>


