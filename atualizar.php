<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "contatos";


$conn = mysqli_connect($servername, $username, $password, $bd);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$atributoAtt = $_POST['x'];
$novoValor = $_POST['novo'];
$atributoPEncontrar = $_POST['y'];
$valorPEncontrar = $_POST['valor'];

	

if (($atributoAtt == "nome")||($atributoAtt == "email")&&($atributoPEncontrar == "nome")||($atributoPEncontrar == "email")){
	$sql = "UPDATE contato SET $atributoAtt='$novoValor' WHERE $atributoPEncontrar='$valorPEncontrar'";
} // caso o atributo a ser alterado seja nome ou email, por ser string "$novoValor" está entre aspas (''). Este if irá rodar se tanto $novoValor quanto $valorPEncontrar forem strings.

else if (($atributoPEncontrar == "nome")||($atributoPEncontrar == "email")) {
	$sql = "UPDATE contato SET $atributoAtt=$novoValor WHERE $atributoPEncontrar='$valorPEncontrar'";
} // caso $novoValor seja number enquanto $valorPEncontrar seja string.

else{
$sql = "UPDATE contato SET $atributoAtt=$novoValor WHERE $atributoPEncontrar=$valorPEncontrar";
} // caso tanto $novoValor quanto $valorPEncontrar forem number.
if (mysqli_query($conn, $sql)) {
    echo "Atualização feita com sucesso";
} else {
    echo "Erro ao gravar o registro: " . mysqli_error($conn);
} // se a conexão ($conn) tiver sucesso e $sql não houver erro, aparece a mensagem "Atualização feita com sucesso", senão, aparece a mensagem "Erro ao gravar o registro: " junto a mensagem de erro do mysqli_error.

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>atualizar</title>
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
	<a href="atualizarH.html"><li>alterar outro registro</li></a>
</ul>
</div>
</body>
</html>