<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];

//$mail->SMTPDebug = 2;                               // Enable verbose debug output

//$mail->isSMTP();                                 // Set mailer to use SMTP
$mail->SMTPAuth = true;
$mail->Host = 'ssl://smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                              // Enable SMTP authentication
$mail->Username = 'foxpolar608@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'ieatrabbits$32'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('foxpolar608@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('atlantreni@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Ритуальные услуги - Заявка клиента';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email .'<br>' .$message;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: success.html');
}
?>