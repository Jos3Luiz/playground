<?php
  include_once  'connect_db.php';
?>
<!DOCTYPE html>
<html>

 <head>
 <title>Bem vindo ao meu chat</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
 </head>

<body>

<?php
session_start();
$user= $_SESSION['username']; 
?>


<br> Bem vindo ao chat, <?php $user ?>. Conversem entre si e sejam educados !</br>
<div class="boxed">
    


<form id="myForm" action="publish.php" method="post">
    usuario: <?php echo $user; ?> <br>
    Titulo: <input type="text" name="titulo" size="50" autofocus/><br>
    Mensagem: <input type="text" name="conteudo" size="100" /><br>
    <input type="submit" value="Submit" />
</form>


</div>
<br>
    <?php


    $sql="SELECT * FROM posts ;";
    $result= mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_array($result))
    {
        echo "<div class=\"boxed\">";
        echo "Autor: ".$row['poster']."<br>";
        echo "Titulo:".$row['titulo']."<br><br>";
        echo "Postagem: ".$row['conteudo']."<br>";
        $date=$row['date'];
        echo "<br>Publicado em:".date('m/d/Y', $date)."<br>";
        echo "Likes: ".$row['likes']."<br>";
        


        echo "</div><br>";

    }




?>


</body>
</html>







