<?php
include("global.inc.php");
pt_register('POST','meditatie_aanvraag_naam');
pt_register('POST','meditatie_aanvraag_telefoon');
pt_register('POST','meditatie_aanvraag_emailadres');
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Via de website is een aanvraag verstuurd voor meditatielessen...
naam: ".$meditatie_aanvraag_naam."
telefoon: ".$meditatie_aanvraag_telefoon."
emailadres: ".$meditatie_aanvraag_emailadres."
";
$message = stripslashes($message);
mail(form_recipient(),"Aanvraag meditatielessen",$message,"From: phpFormGenerator");

header("Refresh: 0;url=bedankt.htm?origin=contact_info_meditatie");
?>
