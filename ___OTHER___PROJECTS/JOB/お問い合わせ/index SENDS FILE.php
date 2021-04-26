<?php

/**
 * PHPMailer multiple files upload and send example
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$msg = '';
if (array_key_exists('userfile', $_FILES)) {
    // Create a message
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;
    $mail->CharSet = 'utf-8';
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(false);
    $mail->Username   = 'sensyocoltd@gmail.com';
    $mail->Password   = 'GOO@Sensyo2020';
    $mail->addAddress('volny@sensyo-ltd.co.jp');     // Add a recipient
    $mail->setFrom('contact@example.com', (empty($name) ? 'Contact form' : $name));
   
    // Attach multiple files one by one
    for ($ct = 0, $ctMax = count($_FILES['userfile']['tmp_name']); $ct < $ctMax; $ct++) {
        // Extract an extension from the provided filename
        $ext = PHPMailer::mb_pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
        // Define a safe location to move the uploaded file to, preserving the extension
        $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'][$ct])) . '.' . $ext;
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            if (!$mail->addAttachment($uploadfile, $filename)) {
                $msg .= 'Failed to attach file ' . $filename;
            }
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    if (!$mail->send()) {
        $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $msg .= 'Message sent!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PHPMailer Upload</title>
</head>
<body>
<?php if (empty($msg)) { ?>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        Select one or more files:
        <input name="userfile[]" type="file" multiple="multiple">
        <input type="submit" value="Send Files">
    </form>
<?php } else {
    echo htmlspecialchars($msg);
} ?>
</body>
</html>