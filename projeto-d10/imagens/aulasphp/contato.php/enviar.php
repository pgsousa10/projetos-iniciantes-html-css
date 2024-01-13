<?php
    $to = "pedro.gsousa0266@gmail.com"; // Destinatario

    $assunto = "Formulario do site";

    $mensagem = $_POST['mensagem']." - ".$_POST['nome'];

    $email = $_POST['email']; // Remetende

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso8859-1';
    $headers[] = 'To: $to';
    $headers[] = 'From: $email';
    
    $status = mail($to, $assunto, $mensagem, implode("\r\n", $headers));

    if ($status==true) {
        print "Mensagem enviada com sucesso!";
    }else{
        print "Não foi possivel enviar!"
    }