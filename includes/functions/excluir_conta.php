<?php
require_once '../connect_db.php';
$id_conta= $_GET['id_conta'];
mysql_query("DELETE FROM tab_conta where id_conta=$id_conta");

mysql_close($dbconn);
header('Location:../../ver_conta.php?msg=3');
?>