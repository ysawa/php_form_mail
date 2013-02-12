<?php require_once './default.php'; ?>
<?php

$mailto = "y_sawa@atoj.co.jp";
$subject = "タイトル";
$content = "内容";
$mail_headers = "From:" . mb_encode_mimeheader("澤 良弘") . "<yoshihirosawa@gmail.com>";

$additional_parameters="-f yoshihirosawa@gmail.com";

mb_send_mail($mailto, $subject, $content, $mail_headers, $additional_parameters);
?>
<?php $subtitle = ''; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='ja'>
<head>
<?php include 'head.php'; ?>
</head>
<body>
<header id='global_head'>
<?php include 'header.php'; ?>
</header>
<section id='global_body'>
<p>ありがとうございました。</p>
</section>
<footer id='global_foot'>
<?php include 'footer.php'; ?>
</footer>
</body>
</html>
