<?php
include("global.inc.php");
pt_register('POST','sms_welzijn_aanvraag_naam');
pt_register('POST','sms_welzijn_aanvraag_06');
pt_register('POST','sms_welzijn_aanvraag_emailadres');
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Via de website is een aanvraag verstuurd voor een SMS-abonnement...
naam: ".$sms_welzijn_aanvraag_naam."
mobiel nummer: ".$sms_welzijn_aanvraag_06."
emailadres: ".$sms_welzijn_aanvraag_emailadres."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag SMS-abonnement",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=welzijn_info");
?>
