<?php
include("global.inc.php");
$naam = htmlspecialchars($_POST['stressmanagement_aanvraag_naam']);
$organisatie = htmlspecialchars($_POST['stressmanagement_aanvraag_organisatie']);
$functie = htmlspecialchars($_POST['stressmanagement_aanvraag_functie']);
$emailadres = htmlspecialchars($_POST['stressmanagement_aanvraag_emailadres']);
$telefoon = htmlspecialchars($_POST['stressmanagement_aanvraag_telefoon']);
$message="Via de website is een aanvraag verstuurd voor stressmanagementlessen...
naam: ".$naam."
organisatie: ".$organisatie."
functie: ".$functie."
emailadres: ".$emailadres."
telefoon: ".$telefoon."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag stressmanagementlessen",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=stressmanagement_info");
?>
