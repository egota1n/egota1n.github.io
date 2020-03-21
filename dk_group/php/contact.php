<?php
require './PHPMailer-master/PHPMailerAutoload.php';


	$subject = htmlspecialchars($_POST['subject']);
	$name = htmlspecialchars($_POST['name']);
	$contact = htmlspecialchars($_POST['contact']);



	$from = $_SERVER[HTTP_HOST];
	$Text = "";
	$tmp = "";
	$preText = "<strong>$subject</strong><br />";

	$mail = new PHPMailer;

	$mail->CharSet = 'utf-8';
	// $mail->addAddress('shelupets666@gmail.com');
	// $mail->addAddress('web@dkgrp.ru');
	$mail->addAddress('rav266@inbox.ru');


	$mail->Subject = $subject;
	$mail->FromName = $from;

	$uploaddir = "./files/";

	foreach ($_FILES as $value){
	    $uploadfile = $uploaddir . basename($value['name']);
	    move_uploaded_file($value['tmp_name'], $uploadfile);
	    $mail->addAttachment($uploadfile, basename($value['name']));
	}



	if ($name) {$preText .= "<strong>Имя: </strong> $name <br />";};
	if ($contact) {$preText .= "<strong>Телефон или email: </strong> $contact <br />";};
	


	$Text = $preText . $Text;

	$mail->msgHTML($Text);

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "OK";
	}

