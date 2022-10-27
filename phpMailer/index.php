
<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace

require 'C:\Users\Shailesh.DESKTOP\Desktop\mail\PHPMailerAutoload.php';

// require '../vendor/autoload.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

$mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 587;// TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isHTML(true);// Set email format to HTML

$mail->Username = 'Shailesh208ss@gmail.com';// SMTP username
$mail->Password = 'ypysetlhptppfjod';// SMTP password

$mail->setFrom('shailesh208ss@gmail.com', 'Shailesh Sharma');//Your application NAME and EMAIL
$mail->Subject = 'Test';//Message subject
$mail->MsgHTML('HTML code');// Message body
$mail->addAddress('bonzoxm416@gmail.com', 'bonzo');// Target email

    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>