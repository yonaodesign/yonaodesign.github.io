  <?php

/**
 * PHPMailer simple contact form example.
 * If you want to accept and send uploads in your form, look at the send_file_upload example.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
if (array_key_exists('userfile', $_FILES)) {
    // Create a message
    $mail = new PHPMailer();
    $mail->setFrom('from@example.com', 'First Last');
    $mail->addAddress('whoto@example.com', 'John Doe');
    $mail->Subject = 'PHPMailer file sender';
    $mail->Body = 'My message body';
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

if (array_key_exists('to', $_POST)) {
    $err = false;
    $msg = '';
    $email = '';
    //Apply some basic validation and filtering to the subject
    if (array_key_exists('subject', $_POST)) {
        $subject = substr(strip_tags($_POST['subject']), 0, 255);
    } else {
        $subject = 'No subject given';
    }

    //Apply some basic validation and filtering to the furigana
    if (array_key_exists('furigana', $_POST)) {
        $furigana = substr(strip_tags($_POST['furigana']), 0, 255);
    } else {
        $furigana = 'No furigana given';
    }

    //Apply some basic validation and filtering to the furigana
    if (array_key_exists('pet', $_POST)) {
        $pet = substr(strip_tags($_POST['pet']), 0, 255);
    } else {
        $pet = 'No pet given';
    }

    //Apply some basic validation and filtering to the query
    if (array_key_exists('query', $_POST)) {
        //Limit length and strip HTML tags
        $query = substr(strip_tags($_POST['query']), 0, 16384);
    } else {
        $query = '';
        $msg = 'No query provided!';
        $err = true;
    }
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }
    //Validate to address
    //Never allow arbitrary input for the 'to' address as it will turn your form into a spam gateway!
    //Substitute appropriate addresses from your own domain, or simply use a single, fixed address
    if (array_key_exists('to', $_POST) && in_array($_POST['to'], ['sales', 'support', 'accounts'], true)) {
        $to = $_POST['to'] . '@example.com';
    } else {
        $to = 'support@example.com';
    }
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= 'Error: invalid email address provided';
        $err = true;
    }
    if (!$err) {
 //Server settings
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

 //Recipients
 $mail->addAddress('volny@sensyo-ltd.co.jp');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');



        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('contact@example.com', (empty($name) ? 'Contact form' : $name));
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Contact form: ' . $subject;
        $mail->Body = "Contact form submission {$query} {$furigana} !";

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


        if (!$mail->send()) {
            $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $msg .= 'Message sent!';
        }
    
}
} ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>PHPMailer Contact Form</title>
  </head>

  <body>
      <h1>お問い合わせ</h1>
      <?php if (empty($msg)) { ?>
      <form method="post">
          <label for="to">部署</label>
          <select name="to" id="to">
              <option value="sales">営業</option>
              <option value="support" selected="selected">サポート</option>
              <option value="accounts">経理</option>
          </select>

          <br>

          <input type="hidden" name="MAX_FILE_SIZE" value="100000">
          <input name="userfile[]" type="file" multiple="multiple">

          <label for="subject">件名: <input type="text" name="subject" id="subject" maxlength="255"></label><br>
          <label for="name">お名前: <input type="text" name="name" id="name" maxlength="255"></label><br>
          <label for="name">フリガナ: <input type="text" name="furigana" id="furigana" maxlength="255"></label><br>
          <label for="name">PET: <input type="text" name="pet" id="pet" maxlength="255"></label><br>
          <label for="email">メールアドレス: <input type="email" name="email" id="email" maxlength="255"></label><br>
          <label for="query">メッセージ:</label><br>
          <textarea cols="30" rows="8" name="query" id="query" placeholder="内容ー"></textarea><br>
          <input type="submit" value="送信">
      </form>
      <?php } else {
    echo $msg;
} ?>
  </body>

  </html>