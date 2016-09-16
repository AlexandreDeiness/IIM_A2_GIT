<?php session_start();
include('config/config.php');
include('model/functions.fn.php');

/*===============================
	Register
===============================*/

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['username']) && !empty($_POST['username'])){

		userRegistration($db, $_POST['username'], $_POST['email'], $_POST['password']);

		header('Location: login.php');

	}else{
		$error = 'Champs requis !';
	
}

// username and email available
if(isUsernameAvailable($db, $_POST['username'])){

	header('Location: login.php');

}else{

	$error = 'Username indisponible';
}

if(isEmailAvailable($db, $_POST['email'])){

	header('Location: login.php');

}else{

	$error = 'Email indisponible';
	
}

include 'view/_header.php';
include 'view/register.php';
include 'view/_footer.php';
