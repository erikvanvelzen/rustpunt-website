<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','name');
pt_register('POST','address');
if($name=="" ){
$errors=1;
$error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
}
if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="name: ".$name."
address: ".$address."
";
$message = stripslashes($message);
mail("joris.van.zundert@gmail.com","Form Submitted at your website",$message,"From: phpFormGenerator");

header("Refresh: 0;url=http://www.rust-punt.com");
?><?php 
}
?>