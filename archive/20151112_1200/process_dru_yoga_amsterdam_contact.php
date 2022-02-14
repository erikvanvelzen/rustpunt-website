<?php
include("global.inc.php");
$naam = htmlspecialchars($_POST['lesaanvraag_amsterdam_naam']);
$telefoon = htmlspecialchars($_POST['lesaanvraag_amsterdam_telefoon']);
$emailadres = htmlspecialchars($_POST['lesaanvraag_amsterdam_emailadres']);
$message="Via de website is een aanvraag verstuurd voor een proefles yoga in Amsterdam...
naam: ".$naam."
telefoon: ".$telefoon."
emailadres: ".$emailadres."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag proefles yoga in Amsterdam",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=contact_info_dru_yoga_amsterdam");
?>
