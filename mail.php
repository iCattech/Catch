<?php
 $to      = 'denis@icat.tech';
 $subject = 'le sujet';
 $message = 'Bonjour !';
 $headers = 'From: dcariat@gmail.com' . "\r\n" .
 'Reply-To: denis.cariat@catch-charleroi.be' . "\r\n" .
 'X-Mailer: PHP/' . phpversion();
 

 mail($to, $subject, $message, $headers);
 ?>