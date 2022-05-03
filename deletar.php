<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "contatos";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$id = $_POST['id'];
$sql = "DELETE FROM contato WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso";
} else {
    echo "Erro ao deletar registro: " . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>deletar</title>
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
			width: 140px;
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
	<a href="deletarH.html"><li>deletar outro registro</li></a>
</ul>
</div>
</body>
</html>