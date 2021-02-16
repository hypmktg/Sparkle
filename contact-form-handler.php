<?php

  $name = $_POST["fname"];
  $lastname = $_POST["lname"];
  $email = $_POST["email"];
  $mesage = $_POST["subject"];

  $email_form = "sophia.permetei@ovb.es";

  $email_subject = "New Customer Submission";

  $email_body = "Nombre: $name.\n".
                "Apellidos: $lastname.\n".
                "Email: $email.\n".
                "Mensaje: $mesage.\n";

  $to = "sophiamaasbrand@mail.com";

  $headers = "From: $email_from \r\n";

  $headers.="Reply-To: $visitor_email\r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");




?>
