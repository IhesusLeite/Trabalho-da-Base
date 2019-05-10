<?php 
	include_once('conexao.php');
	$id = $_GET['id'];
	 $u = mysqli_query($con, "DELETE FROM usuario WHERE id=$id");
	if ($u) {
		header('location:listar.php');
	}
?>