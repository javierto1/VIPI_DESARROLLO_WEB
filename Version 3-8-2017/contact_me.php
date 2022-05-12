<?php

// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone'])     ||
   empty($_POST['email']) 		||  
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
      //echo $_POST;
	echo "No se puede enviar el mensaje mientras tenga campos vacios";
	return false;
   }
	
$name = $_POST['name'];
//$empresa = $_POST['empresa'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
//$select = $_POST['select'];
//$otro = $_POST['otro'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'vipi.desarrolloweb@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$subject = "Vipi Contacto de:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$contenido = "Usted recibe este mensaje desde su sitio WEB.\n\n"."Aqui se muestran los detalles:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nSelect: $select\n\nMessage:\n$message";
$header = "From: vipi.desarrolloweb@gmail.com\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido, $header)){
echo "Mensaje enviado";
} else{        
echo "No se pudo enviar";}

?>