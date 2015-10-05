<?php

	

define ('DB_HOST', 'localhost');
define ('DB_USERNAME', 'root');
define ('DB_PASSWORD','');
define ('DB_NAME', 'admin');
define ('DB_TABLE','admin');


	$conect = @mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD) or die("No se encontró el servidor: " . mysql_error());
	mysql_select_db(DB_NAME,$conect)or die("No se encontró la base de datos: " . mysql_error());

	



	function NewUser()
	{ 


		$userName = $_POST['user']; 
		$email = $_POST['email'];
		$password = $_POST['pw']; 

	 $query = "INSERT INTO admin (user,pw,email) VALUES ('$userName','$password','$email')"; 
	 $data = mysql_query ($query)or die(mysql_error()); 
	 if($data) 
	 	{ 
	 		echo "YOUR REGISTRATION IS COMPLETED..."; 
	 	} 

}

	function SignUp() 
	{ 



	if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 

	{ 

	$query = mysql_query("SELECT * FROM admin WHERE user = '$_POST[user]' AND pw = '$_POST[pw]'") or die(mysql_error()); 

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{ 

	newuser();

	} 

	else 

	{ 

	echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; }
		
	} 		
 
}

if(isset($_POST['submitreg']))
{ 

 	SignUp();

}




 ?>