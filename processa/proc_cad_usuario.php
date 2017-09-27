<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$nome 				= $_POST["nome"];
$cpf	 			= $_POST["cpf"];
$endereco 			= $_POST["endereco"];
$bairro 			= $_POST["bairro"];
$cidade 			= $_POST["cidade"];
$cep 				= $_POST["cep"];
$email 				= $_POST["email"];
$telefone		 	= $_POST["telefone"];
$query = mysql_query("INSERT INTO funcionarios (nome, cpf, endereco, bairro, cidade, cep, email, telefone) VALUES ('$nome', '$cpf','$endereco','$bairro', '$cidade', '$cep', '$email','$telefone'))");

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;http://localhost/projeto/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;http://localhost/projeto/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi cadastrado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>