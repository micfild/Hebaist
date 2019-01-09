<html>

<head>
	<title>S'inscrire</title>
</head>

<body>
	<style>
		h1 {
			text-align: center;
		}
		label, input{
			width:100%;
		}

	</style>
	
	
	<h1>S'inscrire</h1>
	
	
	<?php
	
	
		if(!empty($_GET['status']) && $_GET['status'] == "loginAU") {
			echo "login déjà utilisé";
		}

	?>
	
	<form action ="validation.php" method="post">
	<label for ="login">Login</label>
		<input id="login" type = "text" name = "login">
		
		<label for ="password">Mot de passe</label>
		<input id="password" type = "password" name = "password">
		
		<label for ="password-confirmation">Confirmation mot de passe</label>
		<input id="password-confirmation" type = "password" name = "password-confirmation">
		
		<input type="submit" value="s'inscrire">
	
	</form>
	

</body>

</html>




