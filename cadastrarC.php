<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "contatos";
$conn = new mysqli($servername, $username, $password, $bd);
if ($conn->connect_error) {
	die("conncection failed: " . $conn->connect_error);
}	

$nome = $_POST['nome'];
$numero = $_POST['numero'];
$email = $_POST['email'];

$sql = "INSERT INTO contato(nome, numero, email) values ('$nome','$numero','$email')";
if ($conn->query($sql)===TRUE) {
	echo "criado com sucesso!";
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			text-decoration: none;
			background-size: 1379px 657px;
		}
		#botao{

		}
		#botao ul{
			list-style: none;
		}
		#botao ul li{
			background-color: #12094c;
			line-height: 50px;
			width: 180px;
			color: white;
			text-align: center;

		}
		#botao ul li:hover{
			background-color: #6658c4;
		}
	</style>		
</head>
<body bgcolor="#0099cc">
<div id="botao">
<ul>
	<a href="menuH.html"><li>voltar para o menu</li></a><br>
	<a href="cadastrar.html"><li>Cadastrar outro contato</li></a>
</ul>
</div>
</body>
</html>