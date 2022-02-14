<?php
include("global.inc.php");
$naam = htmlspecialchars($_POST['lesaanvraag_amsterdam_naam']);
$telefoon = htmlspecialchars($_POST['lesaanvraag_amsterdam_telefoon']);
$emailadres = htmlspecialchars($_POST['lesaanvraag_amsterdam_emailadres']);
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Via de website is een aanvraag verstuurd voor een proefles meditatie in Amsterdam...
naam: ".$naam."
telefoon: ".$telefoon."
emailadres: ".$emailadres."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag proefles meditatie in Amsterdam",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=dru_meditatie_amsterdam");
?>
