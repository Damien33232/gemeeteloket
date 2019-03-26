
<?php
include 'testen.html';
?>
<?php

$file = fopen("aanvraag.txt", "a");
if (ISSET($_POST["firstname"] )){
    $content ="\nnaam: " . $_POST["firstname"] .
    "\nachternaam: " . $_POST["lastname"].
     "\nBSN nummer: " . $_POST["BSN"]  .
     "\nemail: " . $_POST["email"].
     "\ngeboortedatum: " . $_POST["bday"].
     "\ntelefoon: " . $_POST["Telefoon"].
     "\ngeslacht: " . $_POST["Geslacht"].
     "\nvragen: " . $_POST["message"];
    fwrite($file, $content);
    fclose($file);
}
?>


<style>
#rest{
     border: 4px solid black;
	margin-top:0%;
	position:absolute;
	width:34%;
	height:28%;

}





#p1{
	   margin-left:37%;
    position: absolute;
    text-align:center;
    width:30%;

}

#p2{    
       margin-left:37%;
    position: absolute;
    text-align:center;
    width:30%;
    

}    

#id{
    margin-left:37%;
    position: absolute;
    text-align:center;
    width:30%;
}

#di{
    margin-left:33%;
    text-align:center;
    position: absolute;
}
</style>
