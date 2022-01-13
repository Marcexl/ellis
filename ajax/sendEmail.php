<?php
/*
 * mixed by marcexl
 * version 11012022
 * - mailer
 * email created 
 * info@ellis-spanish.com 
 * pass: tm3#8^F#~K~Y
 * 
 * no-reply@ellis-spanish.com
 * pass: Nk]5u+ceYjR=
 */ 

$data = new \stdClass();
$data->send = false;
if(isset($_POST))
{
	$fname    = utf8_decode($_POST['fname']);
	$lname    = utf8_decode($_POST['lname']);
	$email    = $_POST['email'];
	$phone    = $_POST['whatsapp'];
	$procedimiento  = utf8_decode($_POST['procedimiento']);
    $sucursal = '';
    if(isset($_POST['sucursales']))
    {
        $sucursal = utf8_decode($_POST['sucursales']);
    }

	$to = 'To: mxlgallardo@gmail.com <mxlgallardo@gmail.com>'; // note the comma
	//$to = 'To: JMartinez <jmartinezro@up.edu.mx>';  

	// Subject
	$subject = 'Nueva solicitud de valoracion gratis';

	// Message
	$message = '
	<html>
	<head>
	  <title>'.$subject.'</title>
	</head>
	<body>
	  <p>Hola se ha registrado una nueva persona:</p>
	  <p><b>Nombre:</b> '.$fname.' '.$lname.'</p>
	  <p><b>Email: </b>'.$email.'</p>
	  <p><b>Whatsapp: </b>'.$phone.'</p>
	  <p><b>Procedimiento: </b>'.$procedimiento.'</p>
	  <p><b>Sucursal: </b>'.$sucursal.'</p>
	</body>
	</html>
	';

	// To send HTML mail, the Content-type header must be set
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

	// Additional headers
	$headers[] = $to;
	$headers[] = 'From: no-reply <no-reply@ellis-spanish.com>';

	// Mail it
	if(mail($to, $subject, $message, implode("\r\n", $headers)))
	{
		$data->send = true;
		echo json_encode($data);
		die();
	}
	else
	{
		/*$error = error_get_last();
        $msg = 'Could not send email: ' . (isset($error['message']) ? $error['message'] : 'unknown');
		$data->msj    = $msg;*/
		$data->msj  = 'Lo sentimos. Por el momento no se ha podido enviar el mensaje. Por favor intente mas tarde.';		
		echo json_encode($data);
		die();
	}
}
else
{
	echo 'ups hello world';
	exit();
}
?>