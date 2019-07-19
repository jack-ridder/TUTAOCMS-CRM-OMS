<?php

$IIIIIIIIlIlI='implode';$IIIIIIIII1l1='date';
require_once 'config.php';
require_once 'public/tutaosend.php';
$out_trade_no = $GLOBALS[base64_decode('SUlJSUlJSUlJMWwx')](base64_decode
    ('WW1kSGlz'));
$dddate = $GLOBALS[base64_decode('SUlJSUlJSUlJMWwx')](base64_decode
    ('WS1tLWQgSDpp'));
$wproduct = $_POST[base64_decode('d2Zwcm9kdWN0')];
$tutaomun = $_POST[base64_decode('d2ZtdW4=')];
$tutaoprice = $_POST[base64_decode('d2ZwcmljZQ==')];
$zfbjg = $tutaoprice * $alipayzk;
$tutaoname = $_POST[base64_decode('d2ZuYW1l')];
$tutaoprovince = $_POST['tutaoprovince'];
$tutaocity = $_POST['tutaocity'];
$tutaoarea = $_POST['tutaoarea'];
$tutaoaddress = $_POST['tutaoaddress'];
$tutaomob = $_POST['tutaomob'];
$tutaopay = $_POST['tutaopay'];
$tutaoguest = $_POST['tutaoguest'];
$mail = new PHPMailer();
$mail->CharSet = base64_decode('Z2IyMzEy');
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 25;
$mail->Host = $Mailhost;
$mail->Username = $MailUsername;
$mail->Password = $MailPassword;
$mail->From = $MailFrom;
$mail->FromName = $FromName;
$mail->AddAddress($MailTo, $FromName);
$mail->AddAddress($MailTob, $FromName);
$mail->WordWrap = 50;
$mail->IsHTML(true);

?>
