<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$btnEnvia = filter_input(INPUT_POST, 'btnEnvia', FILTER_SANITIZE_STRING);
if($btnEnvia) {

    require 'vendor/autoload.php';

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

	$mail = new PHPMailer(true);                              

	try {
	    //Server settings
	    $mail->SMTPDebug = 0;                                 
	    $mail->isSMTP();                                 
	    $mail->Host = 'smtp1.majesan.com.br';  
	    $mail->SMTPAuth = true;                              
	    $mail->Username = 'majesan@majesan.com';               
	    $mail->Password = 'jMby1_93';                         
	    $mail->SMTPSecure = 'tls';                            
	    $mail->Port = 587;                                    

        $mail->setFrom("majesan@majesan.com.br", "MAJESAN");
        $mail->addAddress('majesan@majesan.com.br', $nome);     
        $mail->addReplyTo('majesan@majesan.com.br', 'Information');

	    //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'MAJESAN - Nova Solicitação de Contato!';
        $mail->Body    = '';
        $mail->Body    = '<p>Nome: ' . $nome . '</p>'. 
                         '<p>Email: ' . $email . '</p>'.
                         '<p>Mensagem: ' . $mensagem . '</p>';

	    $mail->send();

        $_SESSION['status'] = "<div class='alert alert-success'><b>Sucesso!</b> Email enviado com êxito. </div>";

	    header('location:index.php');

	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}

}