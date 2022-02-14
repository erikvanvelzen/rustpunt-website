<?php
include("global.inc.php");
pt_register('POST','lesaanvraag_utrecht_naam');
pt_register('POST','lesaanvraag_utrecht_telefoon');
pt_register('POST','lesaanvraag_utrecht_emailadres');
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Via de website is een aanvraag verstuurd voor een proefles yoga in Utrecht...
naam: ".$lesaanvraag_utrecht_naam."
telefoon: ".$lesaanvraag_utrecht_telefoon."
emailadres: ".$lesaanvraag_utrecht_emailadres."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag proefles yoga in Utrecht",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=dru_yoga_utrecht");
?>
