<meta charset="UTF-8" lang="pt-br">
<?php 
  $cat_cod = $_POST['cat_cod'];
  $cat_nome = $_POST['cat_nome'];
  

  include '../connect_db.php';

  $resultado = mysql_query("UPDATE categoria SET cat_nome='$cat_nome WHERE cat_cod ='$cat_cod' ");

  @mysql_free_result($resultado);
  mysql_close($dbconn);
  echo"
  <script>
  alert('Usuario alterado com sucesso!')
  </script>
  ";


  echo "
  <script>
  window.location=\"../vercategoria.php\"
  </script>
  ";
?>