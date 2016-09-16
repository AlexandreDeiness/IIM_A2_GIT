<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){


		// TODO
	
		// Force user connection to access dashboard
		if(userConnection($db, $_POST['email'], $_POST['password'])){
<<<<<<< HEAD
			header('Location: dashboard.php');
		}else{
			$error = 'Mauvais identifiant';
		}

		
		
=======
		
			header('Location: dashboard.php');
>>>>>>> origin/register

		}else{
			$error = 'Mauvais identifiants !';
		}
	}else{
<<<<<<< HEAD
		$error = 'Champs requis !';
		
=======
			$error = 'Champs requis !';
>>>>>>> origin/register
	}

}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';