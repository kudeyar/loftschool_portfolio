<?php

require_once '/lib/PHPMailerAutoload.php';
if (isset($_POST['send'])) {
    $user = trim(htmlspecialchars($_POST['user']));
    $email = trim(htmlspecialchars($_POST['email']));
    $message = trim(htmlspecialchars($_POST['message']));
    if ($user != '' or $email != '' or $message != '') {
        $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'skkudeyarus@gmail.com';                 // SMTP username
        $mail->Password = 'uht,fysqlbgkjv';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->From = 'skkudeyarus@gmail.com';
        $mail->FromName = 'Karpov';
        $mail->addAddress('kudeyar-rolevik@yandex.ru', 'Joe User');     // Add a recipient
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Письмо с сайта портфолио';
        $mail->Body = "<html> 
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
        $mail->AltBody = "$email, $message";

        
        
        
//        $mail = new PHPMailer;
//
//        $mail->isSMTP();
//        $mail->Host = "smtp1.example.com;smtp2.example.com";
//        $mail->SMTPAuth = TRUE;
//        $mail->SMTPSecure = "ssl";
//        $mail->Port = 465;
//        $mail->CharSet = 'UTF-8';
//
//        $mail->Username = "kkykapeky@yandex.ru";
//        $mail->Password = "123654789654123";
//        $mail->setFrom('kkykapeky@yandex.ru', 'Coder');
//        $mail->Subject = "Письмо с сайта портфолио";
//        $mail->msgHTML("<html> 
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
//                        </html>");
//        $address = "kudeyar-rolevik@yandex.ru";
//        $mail->addAddress($address, 'Karpov');
        if ($mail->send()) {
            echo 'ok';
            return true;
        } else {
            echo 'no';
            return false;
        }
    } else {
        return FALSE;
    }
}