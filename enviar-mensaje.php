<?php
header("http://www.arponestructuras.com.ar/contacto/");
$nombre = $_POST['nombre']; 
$correo = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

require("PHPMailer/_lib/class.phpmailer.php");
$mail = new PHPMailer();

//Luego tenemos que iniciar la validación por SMTP:
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.arponestructuras.com.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Username = "info@arponestructuras.com.ar"; // Correo completo a utilizar
$mail->Password = "2425"; // Contraseña
$mail->Port = 465; // Puerto a utilizar

//Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
$mail->From = "info@arponestructuras.com.ar"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Formulario";

//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
$mail->AddAddress("info@arponestructuras.com.ar"); // Esta es la dirección a donde enviamos
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = “Nuevo contacto desde Arponestructuras.com.ar”; // Este es el titulo del email.
$body = “$nombre <p>Ha enviado el siguiente mensaje</p>”;
$body .= “Acá continuo el <strong>mensaje</strong>”;
$mail->Body = $body; // Mensaje a enviar
$exito = $mail->Send(); // Envía el correo.

//También podríamos agregar simples verificaciones para saber si se envió:
if($exito){
header("http://www.arponestructuras.com.ar/contacto/");
}else{
echo ‘Hubo un inconveniente. Contacta a un administrador.’;
}

?>