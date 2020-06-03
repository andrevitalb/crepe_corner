<meta http-equiv="refresh" content="2.5;URL=contacto.html"/>
<?php
    date_default_timezone_set('America/Mexico_City');

    $name = $_REQUEST['contactName'];
    $email = $_REQUEST['contactEmail'];
    $tel = $_REQUEST['contactTel'];
    $msg = $_REQUEST['contactMessage'];

    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: '.$name.' <'.$email.'>'."\r\n";

	$message = "
	<html>
	<head>
	<title>Formulario Contacto</title>
	</head>
	<body>
	<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' align='center' valign='top'><img style=' width: 175px; margin-top: 15px; ' src='https://www.yellowpath.mx/proyectos/crepe-corner/assets/images/logo/logo-crepe_corner-color.png'></td>
	</tr>
	<tr>
	<td width='50%' align='right'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Nombre:</strong></td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>$name</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Correo:</strong></td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>$email</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Teléfono:</strong></td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>$tel</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Mensaje:</strong></td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".nl2br($msg)."</td>
	</tr>
	<tr>
	<td colspan='2' align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Enviado el:</strong> ".date('d-m-Y H:i:s')."</td>
	</tr>
	<tr>
	<td width='50%' align='right'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td width='50%' align='right'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	</table>
	</body>
	</html>
    ";
    
    $para = "prueba56@mailinator.com";

    if(mail($para, 'Formulario Contacto', $message, $headers)) echo'<body><link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|PT+Sans:400,700&display=swap" rel="stylesheet"><div><div><img src="https://www.yellowpath.mx/proyectos/crepe-corner/assets/images/logo/logo-crepe_corner-color.png" alt="Logo Medestore"></div><h1>Mensaje Enviado</h1><h4>Gracias por ponerte en contacto con nosotros.<br> Nos pondremos en contacto contigo tan pronto nos sea posible</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: PT Sans Narrow, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: PT Sans, sans-serif;font-weight: 400;margin: 0;}</style></body>';
    else echo'<body><link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|PT+Sans:400,700&display=swap" rel="stylesheet"><div><div><img src="https://www.yellowpath.mx/proyectos/crepe-corner/assets/images/logo/logo-crepe_corner-color.png" alt="Logo Medestore"></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje.</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: PT Sans Narrow, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: PT Sans, sans-serif;font-weight: 400;margin: 0;}</style></body>';
?>