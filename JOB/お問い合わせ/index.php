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
 $mail->addAddress('volny@sensyo-ltd.co.jp');
 $mail->setFrom('contact@example.com', (empty($name) ? 'Contact form' : $name));
 $mail->addAddress($to);
 $mail->addReplyTo($email, $name);
 $mail->Subject = 'Contact form: ' . $subject;
 $mail->Body = 
 
 "Contact form submission:
  Name: {$name}
  Furigana: {$furigana}
  Company: {$onsha}
  Furigana: {$onshafurigana}
  Message: {$query}
  Email: {$email}
    !";

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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>START</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-white navbar-custom fixed-top align-items-center">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="logo"><svg width="75" height="75" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40 79.1666C18.3688 79.1666 0.833313 61.6311 0.833313 39.9999C0.833313 18.3688 18.3688 0.833252 40 0.833252C61.6311 0.833252 79.1666 18.3688 79.1666 39.9999C79.1429 61.6212 61.6213 79.1428 40 79.1666ZM8.66665 40.6736C8.85197 57.9118 22.9277 71.7623 40.1666 71.6701C57.4055 71.577 71.3315 57.5759 71.3315 40.3367C71.3315 23.0976 57.4055 9.09653 40.1666 9.00341C22.9277 8.91121 8.85197 22.7617 8.66665 39.9999V40.6736ZM43.9166 59.5833H36.0833V43.9166H20.4166V36.0833H36.0833V20.4166H43.9166V36.0833H59.5833V43.9166H43.9166V59.5833Z" fill="blue" /></svg>
      人材
      </span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="pull-right">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link" href="#">サービスの流れ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ご利用者の声</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">会社概要</a>
            </li>
            <li class="nav-item"><a href="お問い合わせ/" class="btn btn-primary btn-xs smallbtn py-4 px-5">無料のお問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h2 class="masthead-subheading mb-0"> 一日一時間から、<br>誰かの力になりませんか</h2>
      </div>
    </div>
  </header>




  <section class="spacer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 order-lg-2">

        </div>
        <div class="col-lg-12 order-lg-1">
          <div class="p-5">

<h2 class="display-4">お問い合わせ</h2>
    <?php if (empty($msg)) { ?>  
        <form method="post">
        <br>

<!--        <div class="row p-2">
        <div class="col-3">
            <label for="to">部署</label>
        </div>
        <div class="col-8">
            <select name="to" id="to">
            <option value="sales">営業</option>
            <option value="support" selected="selected">サポート</option>
            <option value="accounts">経理</option>
        </select>
    </div>
     </div>
    -->
     <div class="row p-2">
         <div class="col-3"><label for="subject">件名:</div>
         <div class="col-9"><input type="text" name="subject" id="subject" maxlength="255" style="width:100%"></label></div>
     </div>

     <div class="row p-2">
         <div class="col-3"><label for="onsha">御社名:</div>
         <div class="col-9"><input type="text" name="onsha" id="onsha" maxlength="255" style="width:100%"></label></div>
     </div>

     <div class="row p-2">
         <div class="col-3"><label for="onsha-furigana">フリガナ:</div>
         <div class="col-9"><input type="text" name="onsha-furigana" id="onsha-furigana" maxlength="255" style="width:100%"></label></div>
     </div>


  
     <div class="row p-2">
         <div class="col-3"><label for="name">名前:</div>
         <div class="col-9">  <input type="text" name="name" id="name" maxlength="255" style="width:100%"></label></div>
     </div>

     <div class="row p-2">
         <div class="col-3"><label for="furigana">フリガナ: </div>
         <div class="col-9"><input type="text" name="furigana" id="furigana" maxlength="255" style="width:100%"></label></div>
     </div>

     <div class="row p-2">
         <div class="col-3"><label for="email">メールアドレス: </div>
         <div class="col-9"><input cols="60" type="email" name="email" id="email" maxlength="255" style="width:100%"></label></div>
     </div>
        
     <div class="row p-2">
         <div class="col-3"><label for="file">添付</div>
         <div class="col-9"> <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        <input name="userfile[]" type="file" multiple="multiple"></div>
     </div>


     <div class="row p-2">
         <div class="col-3"><label for="query">メッセージ:</label></div>
         <div class="col-9"><textarea cols="60" rows="8" name="query" id="query" placeholder="内容ー" style="width:100%"></textarea></div>
     </div>


        <input type="submit" value="送信" class="p-2 px-5 smallbtn" style="color:white">

    </form>
    <?php } else {
    echo $msg;
} ?>
  </section>


  <section class="spacer section-gray">
    <div class="container align-items-center p-5">
      <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block megabtn m-5" style="font-size:60px;">無料のお問い合わせ</button>
    </div>
  </section>


  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center small">Copyright &copy; Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    (function () {
      const image = document.querySelectorAll('.img-wrap');

      const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.intersectionRatio > 0) {
            entry.target.classList.add('img-animation');
          } else {
            entry.target.classList.remove('img-animationOLD');
          }
        });
      });

      Array.prototype.forEach.call(image, function (img) {
        observer.observe(img);
      });
    })();</script>

</body>

</html>