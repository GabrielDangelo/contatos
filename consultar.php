<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "contatos";


$conn = new mysqli($servername, $username, $password, $bd);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nome, numero, email FROM contato";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
	echo '<table border="1">';
while($row = $result->fetch_assoc()) {
echo "<tr><td>id: ". $row["id"]."</td><td>nome: " . $row["nome"]."</td><td>numero: " . $row["numero"]. "</td><td> email: " . $row["email"]. "</td></tr><br>";
}
echo '</table>';
} else {
echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultar</title>
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
	<a href="menuH.html"><li>voltar para o menu</li></a>
</ul>
</div>
</body>
</html>