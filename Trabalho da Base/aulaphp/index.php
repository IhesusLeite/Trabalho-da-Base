<html>
<head>
	<title>Cadastror</title>
	<style>
		*{
			padding: 0px;
			margin: 0px;
			font-family: 'roboto';
		}
		form{
			width: 300px;
			margin: 0 auto;
		}
		legend{
			text-align: center;
			font-size: 50px;
			font-weight: bold;
			color: blue;
		}
		fieldset{
			border: 3px solid blue;
			padding: 10px;
		}
		input{
			width: 100%;
			padding: 5px;
			margin-top: 5px;
			font-size: 15px;
			border-radius: 2px;
			border: 1px solid;
			background-color: rgba(190,355,0,0.6);
			outline: 0px;
			font-weight: bold;
		}
		input[type="submit"]{
			background-color: black;
			color: #fff;
			font-size: 20px;
			width: 50%;
			margin-left: 25%;
			border: 0px;
		}
		input:focus{
			border:1.5px solid blue;
			background-color: lightblue;
		}
		input[type="submit"]:hover{
			background-color: blue;
			color: black;
		}
		
		
	</style>
</head>
<body>
	<form action="index.php" method="POST">
		<fieldset>
			<legend >Cadastro</legend>
		<input type="text" name="nome"placeholder="Digite seu Nome" required autocomplete="off"><br>
		<input type="email" name="email"placeholder="Digite seu Email" required autocomplete="off"><br>
		<input type="password" name="senha"placeholder="Digite sua Senha" required ><br>
		<input type="submit" name="enviar" value="Cadastrar" onclick="abrir()"> 
		</fieldset>

	</form>
	<?php
	include_once "conexao.php";
	if (isset($_POST['enviar'])) {
	  	$nome =$_POST['nome'];
	  	$email =$_POST['email'];
	  	$senha =$_POST['senha'];
	  	mysqli_query($con ,"INSERT INTO usuario(nome, email, senha)VALUES('$nome','$email','$senha')");
	  	mysqli_close($con);
	  	
	  }  
	?>
	
</body>
</html>