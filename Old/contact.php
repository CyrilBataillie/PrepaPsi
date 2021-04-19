<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="1; url=contacts2.html" />
<title>Envoi</title>
</head>
  
<body>
<?php

$TO = "cyril.bataillie@hotmail.fr";

 
$h = "From: Prepa PSI contact" . $TO;

$subject = "Contact depuis le site prepa.psi.free.fr";
 
$message = "";

 
while (list($key, $val) = each($HTTP_POST_VARS)) {

$message .= "$key : $val\n";

}

 
mail($TO, $subject, $message, $h);

 
?>


</body>
</html>