<?php
$post = (!empty($_POST)) ? true : false;
$c = true;
if($post) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$error = '';
	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
	if(!$name || mb_strlen($name, 'UTF-8') < 2) {$error .= 'Имя не должно быть короче 2-х символов <br/>';}
	if(!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {$error .= 'Не правильный E-mail <br/>';}
	if(!$message || mb_strlen($message, 'UTF-8') < 1) {$error .= 'Введите сообщение <br/>';}
	if(!$error) {
		$admin_email = "info@gk-resurs.ru";
		$message = "<table style='width: 100%;'>$message</table>";
		function adopt($text) {
				return '=?UTF-8?B?'.base64_encode($text).'?=';
			}
			$headers = "MIME-Version: 1.0" . PHP_EOL .
			"Content-Type: text/html; charset=utf-8" . PHP_EOL .
			'From: '.adopt($email).' <info@gk-resurs.ru>' . PHP_EOL .
			'Reply-To: info@gk-resurs.ru' . PHP_EOL;
			$send = mail($admin_email, 'Заявка на бесплатную консультацию', $message, $headers );
			if($send) {echo 'OK';}
			}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
