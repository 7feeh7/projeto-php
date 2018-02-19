<meta charset="UTF-8" lang="pt-br">
<?php
require_once '../connect_db.php';

$id= $_GET['id'];
mysql_query("DELETE FROM tab_usuario where id=$id");

mysql_close($dbconn);
header('Location:../../ver_usuarios.php?msg=2');


?>