<?php

$to = "print@shrishtiprinting.com";
//$to = "ravish.mca@gmail.com";
$subject = "enquiry mail from"." ".$_REQUEST['txtCompanyName'];
$message = $_REQUEST['txtRequirements'];
$from = $_REQUEST['txtEmail'];
$headers = "From:" . $from;
$completeMessage ="Hi there,".PHP_EOL.$message."".PHP_EOL."".PHP_EOL.$_REQUEST['txtContactName'].PHP_EOL.$_REQUEST['txtMobile'];
$headers = "From:" . $from;
mail($to,$subject,$completeMessage,$headers);
//echo ("Mail Sent");
header( 'Location: redirect.html' ) ;
?>