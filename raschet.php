<?php
$post = (!empty($_POST)) ? true : false;
$c = true;
if($post) {
	$phone = $_POST['phone'];
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
	if(!$phone || strlen($phone) < 11 || !is_numeric($phone)) {$error .= 'Не корректный номер <br/>';}
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
			$send = mail($admin_email, 'Заявка на бесплатный расчет', $message, $headers );
			if($send) {echo 'OK';}
			}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
