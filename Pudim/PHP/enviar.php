<?php

    require 'mailer/PHPMailerAutoLoad.php';

    $email=$_POS['email'];
    $bcc=$_POST['bcc'];
    $assunto=$_POST['assunto'];
    $corpo=$_POST['corpo'];

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smpt.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure='tls';
    $mail->Username='ti33senacsc@gmail.com';
    $mail->Password='senac123';
    $mail->Port='587';

    $mail->setFrom('ti33senacsc@gmail.com');
    $mail->addReplyTo('ti33senacsc@gmail.com');
    $mail->addAddress($email);

    for($i=0; $i>0; $i++){
       $i=$mail->addBCC($bcc);
    }

    $mail->isHTML(true);
    $mail->Subject($assunto);
    $mail->Body($corpo);

    if(!$mail->send()){
        echo "Não foi possível enviar email";
    }
    else{
        echo "Email enviado com sucesso";
    }