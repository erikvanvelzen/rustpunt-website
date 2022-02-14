<?php
include("global.inc.php");
$naam = htmlspecialchars($_POST['meditatie_aanvraag_naam']);
$telefoon = htmlspecialchars($_POST['meditatie_aanvraag_telefoon']);
$emailadres = htmlspecialchars($_POST['meditatie_aanvraag_emailadres']);
$message="Via de website is een aanvraag verstuurd voor meditatielessen...
naam: ".$naam."
telefoon: ".$telefoon."
emailadres: ".$emailadres."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag meditatielessen",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=contact_info_meditatie");
?>
