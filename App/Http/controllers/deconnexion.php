<?php
	if (version_compare(phpversion(), '7.2.18', '<')) {
		 if(session_id() == '') {
			session_start();
		 }
	 }
	 else
	 {
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	 }
	session_destroy();
	
	// Suppression des cookies de connexion automatique
	//setcookie('login', '');
	//setcookie('pass_hache', '');
	 
    header("Location:../../../Resources/login-form-20/index.php");
