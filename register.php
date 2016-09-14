<?php session_start();
require('config/config.php');
require('model/functions.fn.php');

/*===============================
	Register
===============================*/

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

		header('Location: login.php');

	}else{
		$error = 'Champs requis !';
	}
}

// username and email available
isUsernameAvailable();
isEmailAvailable();

include 'view/register.php';
include 'view/_footer.php';
