<?php 
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$comentario=$_POST['comentario'];

	$destino='fl@gmail.com';
	$asunto=$nombre . ' envio una consulta a traves de la web';
	$cuerpo = 'Nombre: ' . $nombre . "\r\n";
	$cuerpo .= 'Email: ' . $email . "\r\n";
	$cuerpo .= 'Tel: ' . $tel . "\r\n";
	$cuerpo .= 'Comentario: ' . $comentario;

	$remitente="From: sitio web <$email>";


	$asunto_usuario='Aviso de recibo de consulta';
	$contenido_usuario='Hola' . $nombre . 'enviaste la sig. comentario: ' .
						 $comentario  . "\r\n";
	$contenido_usuario.= 'A la brevedad nos comunicaremos';

	$remitente_usuario="From: sitio web <info@transportes.com>";



	mail($destino,$asunto,$cuerpo,$remitente);

	mail($email, $asunto_usuario, $contenido_usuario, $remitente_usuario);

	header('location:contacto.php?envio=ok#contacto');
 ?>