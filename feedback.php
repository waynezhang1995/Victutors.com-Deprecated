
<?php

$Email = json_decode($_POST["email"]);

$message = $Email->subject . "\r\n" . $Email->text . "\r\n";
$message = wordwrap($message, 70, "\r\n");
// Send
mail('info@victutors.com', 'Feedback from Victutors', $message);
echo "OK";

?>
