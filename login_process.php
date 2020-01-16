
<!DOCTYPE html>
<html>

 <head>
 
  <title>Bem vindo ao meu chat</title>
  
  <?php
  include_once  'connect_db.php';
  include_once  'header.php';
  ?>


 </head>

<body>

<?php

//connects to db
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	$sql="select password from users WHERE username='$username';";
	//$sql="SELECT * FROM users;";
	$result= mysqli_query($conn,$sql);
	if ($result===False)
	{
		echo "usuario inexistente";

	}
	else {
			
			//echo $result;

			$row=mysqli_fetch_assoc($result);
			$password_bd= $row['password'];
			if($password_bd ==$password)
			{
				echo "sua senha=".$password;
				//setcookie('username',$username,time()+60*60*7);
				//setcookie('password',$password,time()+60*60*7);
				session_start();
				$_SESSION['username'] =$username;
				header("location: home.php");
			}
			else{
				echo "senha incorreta";
			}
			//var_dump($result);
			//echo $row;
			//$password=$_POST['password'];

		    
		    
	}

?>
</body>
</html>
