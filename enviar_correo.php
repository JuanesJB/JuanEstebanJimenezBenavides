<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Aquí puedes agregar el código para enviar el correo electrónico utilizando la información proporcionada en el formulario

  // Ejemplo de uso de la función mail() para enviar el correo
  $to = "j.jimenezb@uniandes.edu.co";
  $subject = "Nuevo mensaje de contacto";
  $body = "Nombre: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Mensaje: " . $message;
  $headers = "From: " . $email;

  // Intenta enviar el correo
  if (mail($to, $subject, $body, $headers)) {
    // Si el correo se envió correctamente, muestra un mensaje de éxito
    echo "¡El mensaje ha sido enviado!";
  } else {
    // Si hubo un error al enviar el correo, muestra un mensaje de error
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente.";
  }
}
?>
