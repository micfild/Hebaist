<?php



//on récupère une valeur avec la méthode get
//$login = $_GET['login'];


//POST
//var_dump ($_POST);

	
	
$logins = ['héloïse', 'Laurie', 'Christophe', 'Vincent', 'Danièle', 'Théau'];


//TEST si login existe
$formLogin = $_POST["login"];

if(checkIfLoginExist($formLogin, $logins) == true){
	header('Location: /?status=loginAU');
}else{
	header('Location: confirm-register.php?user='. $formLogin);
}


/*==================================
FUNCTIONS
==================================*/

function checkIfLoginExist($login, $loginTab){
	foreach($loginTab as $currentLogin){
		if($login === $currentLogin){
			return true;
		}
			
	}
	return false;
}

