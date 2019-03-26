
<?php


include 'kapvergunning eng.html';
$file = fopen("kapvergunning.txt", "a");
if (ISSET($_POST["firstname"] )){
    $content ="\nFirst name: " . $_POST["firstname"] .
    "\nFirst name: " . $_POST["firstname"].
     "\nLast name: " . $_POST["lastname"].
     "\nE-mail: " . $_POST["email"].
     "\nGender: " . $_POST["Geslacht"].
     "\nDate of birth:" . $_POST["bday"].
     "\neigenaar: " . $_POST["naam"].
     "\nReason to cut a tree:" . $_POST["kap"].
     "\nQuestions?: " . $_POST["message"];
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