<?php 
	include_once('conexao.php');
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body>
	<form method="POST">
		<fieldset><legend>Alterar</legend>
		<input type="text" name="nome" required><br>
		<input type="email" name="email" required><br>
		<input type="submit" name="alterar" value="Alterar">
		</fieldset>
		<?php 
			if (isset($_POST['alterar'])) {
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				mysqli_query($con ,"UPDATE usuario SET nome='$nome',email='$email' WHERE id=$id");
				header('location:listar.php');
			}
		?>
	</form>
</body>
</html>