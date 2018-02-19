<?php
require_once '../../connect_db.php';
$pro_id= $_GET['pro_id'];
mysql_query("DELETE FROM tab_prod where pro_id=$pro_id");

mysql_close($dbconn);
header('Location:../../ver_produto.php?msg=3');
?>