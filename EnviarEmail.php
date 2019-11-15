<?php

	$sender_name = $_POST['form-name'];
	$sender_email = $_POST['form-email'];
	$subject = $_POST['form-Subject'];
	$mail_body = $_POST['form-text'];
	
	$body = $sender_name." ha enviado un mensaje<br><br> Nombre: ".$sender_name."<br>Email: ".$sender_email."<br>Asunto: ".$subject."<br>Mensaje: ".$mail_body;

    if (isset($_POST['form-name']) && isset($_POST['form-email']) && isset($_POST['form-Subject']) && ($sender_name != '') && ($sender_email != '') && ($subject != '')) {
        sendMail($sender_name, $sender_email, $body, $subject);
    } else {
        header("Status: 401 Error");
        echo "Por favor, completa el formulario para poder enviar tu mensaje";
    }

	function sendMail($sender, $sender_mail, $body, $subject) {
		$to = 'info@brangus.com.uy'; // Set Receiver Email Here
		$myemail = $sender_mail; // Set Sender Email Here
		//$subject = "Consulta web"; // Set Subject Here
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";            
		$headers .= "From: brangus.com.uy <sender@brangus.com.uy>\r\n"; // Set Header Here

        	$headers .= "Bcc: pazfraschini@gmail.com\r\n";
        	$headers .= "Bcc: piarovira98@gmail.com\r\n";
		
		$message = $body;
		
		$sentmail = mail($to,$subject,$message,$headers);
		if($sentmail) {
            header("HTTP/1.1 200 OK");
		    echo "Tu mensaje ha sido enviado. Te responderemos muy pronto!";
		}
		else {
            header("Status: 400 Error");
		    echo "Ha ocurrido un error y no fue posible enviar tu mensaje";
		}
	}

?>