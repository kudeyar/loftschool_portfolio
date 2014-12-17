<?php

session_start();
require_once 'lib/PHPMailerAutoload.php';
if (isset($_POST['send'])) {
    $user = trim(htmlspecialchars($_POST['user']));
    $email = trim(htmlspecialchars($_POST['email']));
    $message = trim(htmlspecialchars($_POST['message']));
    $capcha_form = strtoupper(trim(htmlspecialchars($_POST['capcha'])));
    $capcha_sess = $_SESSION['capcha'];

    if ($capcha_form != $capcha_sess) {
        echo "capcha_no";
        return FALSE;
    } else {
        if ($user != '' or $email != '' or $message != '') {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $to = "skkudeyarus@gmail.com";
                $subject = "Письмо с сайта портфолио";
                $message = " 
                        <html> 
                            <head> 
                                <title>Письмо с сайта</title> 
                            </head> 
                            <body> 
                                <h3>$user</h3>
                                <h3>$email</h3>    
                                <p>
                                    $message
                                </p> 
                            </body> 
                        </html>";

                $headers = "Content-type: text/html; charset=utf-8 \r\n";


// не смог я запилить через PHPMailer, он ошибку выдавал все время что не может подключиться к SMTP серверу
// 
//                $mail = new PHPMailer;
//                $mail->isSMTP();                                      // Set mailer to use SMTP
//                $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
//                $mail->SMTPAuth = true;                               // Enable SMTP authentication
//                $mail->Username = 'kkykapeky@yandex.ru';                 // SMTP username
//                $mail->Password = '123654789654123';                           // SMTP password
//                $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
//                $mail->Port = 465;                                    // TCP port to connect to
//                $mail->CharSet = 'UTF-8';
//                $mail->From = 'kkykapeky@yandex.ru';
//                $mail->FromName = 'Сообщение с сайта';
//                $mail->addAddress($email, $user);     // Add a recipient
//                $mail->WordWrap = "80";
//                $mail->Subject = 'Письмо с сайта портфолио';
//                $mail->SMTPDebug = 1;
//                $mail->Body = "<html> 
//                            <head> 
//                                <title>Письмо с сайта</title> 
//                            </head> 
//                            <body> 
//                                <h3>$user</h3>
//                                <h3>$email</h3>    
//                                <p>
//                                    $message
//                                </p> 
//                            </body> 
//                        </html>";
                $send = mail($to, $subject, $message, $headers);
                if ($send == TRUE) {
                    echo 'ok';
                } else {
                    echo 'no';
                }
            } else {
                echo 'email_no';
            }
        }
    }
}
