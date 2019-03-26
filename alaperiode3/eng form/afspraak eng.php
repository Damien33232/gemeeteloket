<?php
include 'afspraak eng.html';
?>
<?php

$file = fopen("afspraak eng.txt", "a");
if (ISSET($_POST["firstname"] )){
    $content ="\nfirst name: " . $_POST["firstname"] .
    "\nsurname: " . $_POST["lastname"].
     "\nBSN: " . $_POST["BSN"]  .
     "\nemail: " . $_POST["email"].
     "\nappointment: " . $_POST["bday"].
     "\ntime: " . $_POST["appt"].
     "\ndate of birth: " . $_POST["bday"].
     "\nphone number: " . $_POST["Telefoon"].
     "\ngender: " . $_POST["Geslacht"].
     "\nquestions   5: " . $_POST["message"];
    fwrite($file, $content);
    fclose($file);
}
?>