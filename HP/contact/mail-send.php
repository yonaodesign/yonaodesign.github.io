<?php
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port     = 465;  
$mail->Username = "sensyocoltd@gmail.com";
$mail->Password = "GOO@Sensyo2020";
$mail->Host = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->CharSet = 'UTF-8';
$mail->SetFrom($_POST["userEmail"], $_POST["userName"]);
$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress("volny@sensyo-ltd.co.jp");	
$mail->Subject = $_POST["userName"]."様よりメールが届きました。";
$mail->WordWrap   = 80;
$mail->MsgHTML(
	"ホームページよりの新規お問い合わせのお知らせです。<br><br>".
	$_POST["userName"].
	"様よりメールが届きました。<br><br>
	■ご用件その他<br>".
	$_POST["whatdo"].
	"<br><br>■御社名<br>".
	$_POST["companyName"].
	"<br><br>■お名前<br>".
	$_POST["userName"].
	"<br><br>■ふりがな<br>".
	$_POST["userNameFurigana"].
	"<br><br>■お電話番号<br>".
	$_POST["phoneNumber"].
	"<br><br>■FAX番号<br>".
	$_POST["faxNumber"].
	"<br><br>■住所<br>〒".
	$_POST["zipCode"].
	" ".
	$_POST["address"].
	"<br><br>■お問い合わせ内容<br>".
	$_POST["content"]);

foreach ($_FILES["attachment"]["name"] as $k => $v) {
    $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
}

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>問題が発生したため、メールは送信されていません。</p>";
} else {
	echo "<p class='success'>送信しました。</p>";
}	
?>