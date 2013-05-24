<?php 

	session_start();
	$GLOBALS['DEBUG_MODE'] = 1;

	require ('../class/class.phpmailer.php');
	
	// Configuration du site
	include_once('../config/paramFile.php');

	// Récupération des valeurs du formulaire.
	$nom = '';
	$email = '';
	$message = '';
	
	// EMAIL
	if (isset($_REQUEST['email']) && $_REQUEST['email']!='') {
		$email = $_REQUEST['email'];
		
		// NOM
		if (isset($_REQUEST['nom']) && $_REQUEST['nom']!='') {
			$nom = $_REQUEST['nom'];
		} else {
			$nom = 'Nom non renseign&eacute';
		}
	
		// MESSAGE
		if (isset($_REQUEST['message']) && $_REQUEST['message']!='') {
			$message = $_REQUEST['message'];
		} else {
			$message = 'Pas de message...';
		}


		$body = "<html xmlns=\"http://www.w3.org/1999/xhtml\">";
		$body .= "<head>";
		$body .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />";
		$body .= "<title>DSIN : Digital & Social Interactions</title>";
		$body .= "<style type=\"text/css\">";
		$body .= "<!-- .style1 { font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 10px;}";
		$body .= ".colorBold {font-weight:bold;color:#FFCB01;}";
		$body .= "--></style>";
		$body .= "</head>";
		$body .= "<body>";
		$body .= "<p class=\"style1\" ><img src=\"http://www.digital-and-social-interactions.com/images/logo/logo_DSIN_transparent.jpg\" alt=\"logo DSIN\" /></p>";
		$body .= "<p class=\"style1\">La personne suivante souhaite entrer en contact avec DSIN via le site : </p>";
		$body .= "<ul class=\"style1\">";
		$body .= "<li class=\"style1\">Nom : <span class=\"colorBold\">".$nom."</span></li>";
		$body .= "<li class=\"style1\">Email : <span class=\"colorBold\">".$email."</span></li>";
		$body .= "<li class=\"style1\">Message : <span class=\"colorBold\">".$message."</span></li>";
		$body .= "</ul>";
		//$body .= "<p class=\"style1\">Acc&egrave;s &agrave; l'administration du site en cliquant sur le lien suivant : <a href="._URL_WWW."/".T_PAGE_ADMIN." >"._URL_WWW."/".T_PAGE_ADMIN."</a></p>"; 

		$body .= "</body>";
		$body .= "</html>";
		
		

		$mail = new PHPmailer();
		$mail->IsSMTP();
		$mail->IsHTML();
		
		$mail->Mailer = "smtp";
		
		$mail->Host = _MAIL_HOST;
		
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = _MAIL_USERNAME; // SMTP username
		$mail->Password = _MAIL_PWD; // SMTP password
		
		$mail->From= _MAIL_FROM;
		
		//$mail->AddAddress(_MAIL_TO);
		//$mail->AddAddress('david.semhoun@cgi.com');
		//$mail->AddAddress('marc.trilling@cgi.com');
		
		$mail->AddReplyTo(_MAIL_REPLY);


		$mail->AddAddress("nicochoppin@gmail.com");
		
		$mail->Subject='-= Demande de Renseignements =-';
		$mail->Body=$body;
		
		if(!$mail->Send()){ //Teste le return code de la fonction
			echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
			//header('Location: http://www.digital-and-social-interactions.com/?sentMail=0#contact');
		}
		else{
			echo 'Votre mail a été envoyé. Nous vous contacterons au plus vite. Merci';
			//header('Location: http://www.digital-and-social-interactions.com/?sentMail=1#contact');
		}
		$mail->SmtpClose();
		unset($mail);
	
	} else {
		$email = 'Email non renseign&eacute';
		echo $email;
	}
?>