<?php
	include_once  'connect_db.php';
?>
<!DOCTYPE html>
<html>
<body>

<?php

//connects to db
	session_start();

	if (isset($_POST['titulo'] , $_POST['conteudo'],$_SESSION['username'] ))
	{
		$username=$_SESSION['username']; 
		$titulo=$_POST['titulo']; 
		$conteudo=$_POST['conteudo']; 

		if ($titulo=="" or $conteudo=="" or $username=="" )
		{
			echo "campos nulos nao sao permitidos";
		}
		else
		{
			$agora=time();
			$likes=0;
			$sql="insert into posts (poster,titulo,conteudo,date,likes) VALUES ('$username','$titulo','$conteudo','$agora','$likes');";
			$result= mysqli_query($conn,$sql);
			
			echo "Postado com sucesso";
	

		}
	}




?>
</body>
</html>