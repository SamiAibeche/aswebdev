<?php
$notif="";
	if(isset($_POST['btSend'])){
	  	if(!isset($_POST['name']) || !isset($_POST['lastname']) || !isset($_POST['email']) || !isset($_POST['company']) || !isset($_POST['message']) ){
	  		$notif = "Please try later.";
	  	}
	  	$_POST['name'] = trim($_POST['name']);
	  	if(empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['message']) ){
	  		$notif = "Please fill the required field.";
	  	}
	  	//Regex : Vérifie si les champs envoyer par le formulaire corresponds à ceux attendus?
	  	if (preg_match("/^([a-zA-Z]{2,30})$/",$_POST['name']) !== 1){
	  			$notif = "Please verify the firstname field.";
	  	}
	  	if (preg_match("/^([a-zA-Z]{2,30})$/",$_POST['lastname']) !== 1){
	  			$notif = "Please verify the lastname field.";
	  	}
	  	if (preg_match("/^([A-Z0-9a-z._]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10})$/",$_POST['email']) !== 1){
	  			$notif = "Please verify the email field.";
	  	}
	  	if (preg_match("/^([a-zA-Z0-9:\/.]{0,30})$/i",$_POST['company']) !== 1){
	  			$notif = "Please verify the Company field.";
	  	}
	  	if (preg_match("/^([^;|_<>]{2,500})$/",$_POST['message']) !== 1){
	  			$notif = "Please verify the Message field.";
	  	}
	  	
	  	/* Filtre les données envoyer par formulaire */ 	
	  	$name =  "\r\n Name : ".filter_var($_POST['name'], FILTER_SANITIZE_EMAIL);   
	  	$lastname = "\r\n Lastname : ".filter_var($_POST['lastname'], FILTER_SANITIZE_EMAIL);   
	  	$company =  "\r\n Company : ".filter_var($_POST['company'], FILTER_SANITIZE_EMAIL);
	  	$email =    "\r\n Email  : ".filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	  	$content = "\r\n Message : \r\n".filter_var($_POST['message'], FILTER_SANITIZE_EMAIL);
	  	
	  	$message = $name.$lastname.$email.$company.$content;
	  	$to = "contact@aswebdev.com";
	    $subject="Info from As WebDev";
	    
	  	//Si aucune erreur n'a été trouvée
	  	if($notif===""){
	  		if(mail($to, $subject, $message)){ //Si l'envoie réussit
	  			$notif = "Sucess !";
	  		}else{
	  			$notif = "Please try later.";
	  		}
	  	}
	}

?>