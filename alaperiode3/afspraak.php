<?php
include 'afspraak.html';
?>
<?php

$file = fopen("afspraak.txt", "a");
if (ISSET($_POST["firstname"] )){
    $content ="\nnaam: " . $_POST["firstname"] .
    "\nachternaam: " . $_POST["lastname"].
     "\nBSN nummer: " . $_POST["BSN"]  .
     "\nemail: " . $_POST["email"].
     "\nafspraak datum: " . $_POST["bday"].
     "\ntijd afspraak: " . $_POST["appt"].
     "\ngeboortedatum: " . $_POST["bday"].
     "\ntelefoon: " . $_POST["Telefoon"].
     "\ngeslacht: " . $_POST["Geslacht"].
     "\nvragen: " . $_POST["message"];
    fwrite($file, $content);
    fclose($file);
}
?