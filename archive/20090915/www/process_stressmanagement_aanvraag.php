<?php
include("global.inc.php");
pt_register('POST','stressmanagement_aanvraag_naam');
pt_register('POST','stressmanagement_aanvraag_organisatie');
pt_register('POST','stressmanagement_aanvraag_functie');
pt_register('POST','stressmanagement_aanvraag_emailadres');
pt_register('POST','stressmanagement_aanvraag_telefoon');
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Via de website is een aanvraag verstuurd voor stressmanagementlessen...
naam: ".$stressmanagement_aanvraag_naam."
organisatie: ".$stressmanagement_aanvraag_organisatie."
functie: ".$stressmanagement_aanvraag_functie."
emailadres: ".$stressmanagement_aanvraag_emailadres."
telefoon: ".$stressmanagement_aanvraag_telefoon."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag stressmanagementlessen",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=stressmanagement_info");
?>
