<?php
  require_once 'connect_db.php';

	$login = mysql_real_escape_string($_POST['login']);
	$senha = mysql_real_escape_string($_POST['senha']);

	$sql = mysql_query("SELECT * FROM tab_usuario WHERE login = '$login' AND senha = '$senha'") or die(mysql_error());
	$row = @mysql_num_rows($sql);
	if ($row > 0) {
		$check = mysql_query("SELECT perfil FROM tab_usuario WHERE login='$login'");
			$row2   = @mysql_num_rows($check);
			if($row2) {
				$dadosUsuario = @mysql_fetch_array($check);
				if($dadosUsuario["perfil"] == 1){
  				if (!isset($_SESSION)) session_start();set_time_limit(0);
  				$_SESSION['login']=$_POST['login'];
				setcookie("logado","1");
					header('Location:../home.php?msg=2');
				} else 
				setcookie("logado","1");
				if($dadosUsuario["perfil"] == 0){
				if (!isset($_SESSION)) session_start();set_time_limit(0);
  				$_SESSION['login']=$_POST['login'];
					header('Location:../home2.php?msg=2');
				}
			}
	}else{
		header('Location:../index.php?msg=1');
	}
?>