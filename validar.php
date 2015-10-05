<?php
	session_start(); 
?>

		<?php

if(isset($_SESSION['user'])){ 

echo '<script> window.location="index.php"; </script>';

} else {

			include 'serv.php';
			if(isset($_POST['login'])){
				$usuario = $_POST['user'];
				$pw = $_POST['pw'];
				$log = mysql_query("SELECT * FROM admin WHERE user='$usuario' AND pw='$pw'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["user"] = $row['user']; 
				  	echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
					echo '<script> window.location="index.php"; </script>';
				} else {
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}

		}

	?>	