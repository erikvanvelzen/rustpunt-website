<?php
include("global.inc.php");
pt_register('POST','lesaanvraag_amsterdam_naam');
pt_register('POST','lesaanvraag_amsterdam_telefoon');
pt_register('POST','lesaanvraag_amsterdam_emailadres');
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Via de website is een aanvraag verstuurd voor een proefles yoga in Amsterdam...
naam: ".$lesaanvraag_amsterdam_naam."
telefoon: ".$lesaanvraag_amsterdam_telefoon."
emailadres: ".$lesaanvraag_amsterdam_emailadres."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag proefles yoga in Amsterdam",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=dru_yoga_amsterdam");
?>
