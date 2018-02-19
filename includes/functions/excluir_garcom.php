<meta charset="UTF-8" lang="pt-br">
<?php
require_once '../connect_db.php';

$codGarcom= $_GET['codGarcom'];
mysql_query("DELETE FROM tab_garcom where codGarcom=$codGarcom");

mysql_close($dbconn);
echo "<script>alert(' excluido com sucesso')</script>";
echo"<script>window.location=\"../../ver_usuarios.php\"</script>";


?>