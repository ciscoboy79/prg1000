<?php include 'header.php';?>

<?php 
$klassekode = $klassenavn = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $klassekode = $_POST["klassekode"];
  $klassenavn = $_POST["klassenavn"];

if ($klassekode == "" || $klassenavn == "") {

  	echo "Obligatorisk felt" ;



  }else {

	$file = 'data/Klasse.txt';


	$current = $klassekode . ":" . $klassenavn . "\n";

	file_put_contents($file, $current, FILE_APPEND);

	echo "Klassen er registrert" ;
   


  }




}

 ?>

<script type="text/javascript">


function validateForm() {
    

    var klassekode = document.forms["classform"]["klassekode"].value;
    var klassenavn = document.forms["classform"]["klassenavn"].value;


    if (klassekode == "") {

        document.getElementById("mouse").innerHTML="Klassekode nødvendig";
        return false;

    }

    re = /[A-Z]{2}[0-9]{1}$/;
      if(!re.test(klassekode)) {
                document.getElementById("mouse").innerHTML="Må bestå av to store bokstaver og ett siffer";

        return false;
      }

      if (klassenavn == "") {
                document.getElementById("mouse").innerHTML="Klassenavn nødvendig";
          return false;
      }
}





</script>







<form  novalidate onsubmit="return validateForm()" name="classform" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  Klassekode:


  <input  type="text" name="klassekode" id="klassekode" required=""
  onmouseover="musInn(this)" 
  onmouseout="musUt(this)" ><br><br>
  Klassenavn:
  <input type="text" name="klassenavn" id="klassenavn" required="" 
  onmouseover="musInn2(this)" 
  onmouseout="musUt2(this)"
 
  ><br><br>

  <input type="submit" value="Registrer">

  <input type="reset" value="Nullstill">

<p id="mouse" style="color: red"></p>

</form>

<?php include 'footer.php';?>