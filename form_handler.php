<?php 
$ToEmail = 'shawan@sarkarelectricalsolution.com'; 
$EmailSubject = 'Site contact form'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
$MESSAGE_BODY .= "Phone: ".$_POST["phone"]."<br>"; 
$MESSAGE_BODY .= "Subject: ".$_POST["subject"]."<br>"; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["textarea"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)  ; 
$data = [ 'success' => true ];
 
header('Content-type: application/json');
echo json_encode( $data );

?>