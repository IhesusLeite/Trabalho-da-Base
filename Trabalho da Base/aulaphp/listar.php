<?php
	include_once "conexao.php";
	$r = mysqli_query($con,"SELECT * FROM usuario");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<style type="text/css">
		#box{
			display: none;
			width: 300px;
			height: 200px;
			background-color: red;
		}
	</style>
</head>
<body>
	<table border="1px">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Ações</th>
		</tr>
		<?php while($linhas = mysqli_fetch_assoc($r)){ 
			$id = $linhas['id'];
			$nome = $linhas['nome'];
			$email = $linhas['email'];
		?>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $nome; ?></td>
			<td><?php echo $email; ?></td>
			<td>
				<a href="editar.php?id=<?php echo $id;?>">Editar</a>
				<a href="excluir.php?id=<?php echo $id;?>">Excluir</a>
			</td>
		</tr>
	    <?php } ?>
	</table>

	

	
		</form>
	</div>
</body>
</html>