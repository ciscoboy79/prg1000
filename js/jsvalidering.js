/* mitt første JavaScript
var fornavn = prompt("Fornavn");
var etternavn = prompt("Etternavn");


document.write("Hallo" + " <br />" + fornavn +" "+  etternavn);


**/

/**
 * 
 * Eks 2
 * var tall1 = parseInt(prompt("Tall 1")) ;
var tall2 = parseInt(prompt("Tall 2"))  ;

var sum = tall1 + tall2;
var diff = tall1 - tall2;
var gange = tall1 * tall2;
var sum2;

function regne(tall1 , tall2){
    sum2 = tall1 + tall2;
    document.write(sum);
}

document.write("Dette er summen " + sum + " ");
document.write("Dette er diff " + diff+ "<br/>");
document.write("Dette er gange" + gange+ "<br/>" );
 regne(tall1 , tall2); 
 * 
 * 
 * 
 */


 /**
  * enda ett eks
  * alert("Klar for quiz ");

var svar= prompt("Hva er 3 ganger 3 ");

if (confirm("Er du sikker  pååååååå ")){
    if(svar == 9){
        document.write("Hurra")
    }
    else
    {
        document.write("Du tok feil svar ");
    }
}
else{
    document.write("Tenk deg om og prøv på nytt ditt kjøttis hue ");
}
  * 
  */
/**
 * 
 * var fagkode = prompt("Fagkode ");
var lvoligFagkode = true;


if (!fagkode)
    {
        lvoligFagkode= false;
        document.write("Her kommer en mld")
    }
if (fagkode.length!= 7)
    {
        document.write("Her kommer en mld");
    }

if(fagkode) {
    var tegn1 = fagkode[0].toLocaleUpperCase();
    var tegn2 = fagkode[0].toLocaleUpperCase();
    var tegn3 = fagkode[0].toLocaleUpperCase();
    if(tegn1 < "A" || tegn1 >"Z" || tegn2 < "A" || tegn1 >"Z" || tegn3 < "A" || tegn1 >"Z")
    {
        lvoligFagkode= false;
        document.write("Her kommer en mld ");
    }
    var siffer = fagkode.substr(3,4)
    if(isNaN(siffer)) 
    {
        lvoligFagkode= false;
        document.write("Her kommer en mld");
    }
}
if(lvoligFagkode){
    document.write("Denne er riktig ")
}
 */

 /**
  * 
  * 
  */

 function fokus(element){
    element.style.background="yellow";
  }  
  function misteFokus(element){

    element.style.background="white";
  }
  function musInn(element){
    element.style.background="blue";
    document.getElementById("mouse").innerHTML="Klassekode må bestå av 2 store bokstaver og ett siffer";
   
    
  }

  function musUt(element){
      element.style.background="white";
      document.getElementById("mouse").innerHTML="";
  }
  function musInn2(element){
    element.style.background="blue";
    document.getElementById("mouse").innerHTML="Skriv inn klassenavn."
   
    
  }

  function musUt2(element){
      element.style.background="white";
      document.getElementById("mouse").innerHTML=""
  }




   function musInn(element){
    element.style.background="blue";
    document.getElementById("mouse").innerHTML="Klassekode må bestå av 2 store bokstaver og ett siffer";
   
    
  }

  function musUt(element){
      element.style.background="white";
      document.getElementById("mouse").innerHTML="";
  }
  function musInn2(element){
    element.style.background="blue";
    document.getElementById("mouse").innerHTML="Skriv inn klassenavn."
   
    
  }

  function musUt2(element){
      element.style.background="white";
      document.getElementById("mouse").innerHTML=""
  }

function musInn3(element){
    element.style.background="blue";
    document.getElementById("mouse").innerHTML="Brukernavn obligatorisk";
}
  
function musUt3(element){
  element.style.background="white";
  document.getElementById("mouse").innerHTML="";
}
  function musInn4(element){
  element.style.background="blue";
  document.getElementById("mouse").innerHTML="Fornavn obligatorisk";
  }
  function musUt4(element){
  element.style.background="white";
  document.getElementById("mouse").innerHTML="";
  }

  function musInn5(element){
  element.style.background="blue";
document.getElementById("mouse").innerHTML="Etternavn obligatorisk";
  }
function musUt5(element){
element.style.background="white";
document.getElementById("mouse").innerHTML="";
}
 
 

