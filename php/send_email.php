<?php $destinatario = "yo.smartacademy@gmail.com"; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = '<html>'; 
$cuerpo .= '<head>';
$cuerpo .= '<title>Prueba de correo</title>';
$cuerpo .= '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">';
$cuerpo .= '<link href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>';
$cuerpo .= '<link href="../css/styles.css" rel="stylesheet" type="text/css"/>';
$cuerpo .= '<link rel="stylesheet" href="../Icons/bootstrap-icons-1.5.0/bootstrap-icons.css">';
$cuerpo .= '</head>';
$cuerpo .= '<body>';
$cuerpo .= '<img src="" alt="YO.SMART ACADEMY" width="100" height="45" class="img-fluid rounded addmargint">';
$cuerpo .= '<h1>Hola amigos!</h1>';
$cuerpo .= '<p> <b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. </p>'; 
$cuerpo .= '</body>';
$cuerpo .= '</html> '; 
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Carlos Valdez <carlosevg1999@gmail.com>\r\n"; 
//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: solicitantes.ys@gmail.com\r\n"; 
//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 
//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 
//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 
mail($destinatario,$asunto,$cuerpo,$headers) ?>