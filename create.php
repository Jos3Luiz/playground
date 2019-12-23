<?php
	include_once  'connect_db.php';
?>
<!DOCTYPE html>
<html>
<body>

<?php

//connects to db
	$username=$_POST['user'];
	$password=$_POST['password'];
	$email=$_POST['email'];

	$sql="select * from users WHERE username='$username';";
	$result= mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) === 0)
	{
		$sql="insert into users (username,password,email) VALUES ('$username','$password','$email');";
		
		$result= mysqli_query($conn,$sql);
		echo "login criado com sucesso<br>";
		echo "<a href='home.php'>clique aqui</a> para prosseguir para a sala de chat";
	}
	else{
		echo "já existe um usuario com esse nome!";
		echo "<br><a href='create_account.php'>clique aqui</a> para voltar";
	}
	//$sql="insert into users (username,password,email) VALUES ('$username','$password','$email');";
	//$sql="SELECT * FROM users;";
	//$result= mysqli_query($conn,$sql);
	//$row=mysqli_fetch_assoc($result);
	//echo $row['username'];
	//echo $result;
	//$password=$_POST['password'];

    
    //header("location: login.php")
?>
</body>
</html>