<meta charset="UTF-8" lang="pt-br">
<?php 
  $pro_cod = $_POST['pro_cod'];
  $pro_nome = $_POST['pro_nome'];
  $pro_descricao  = $_POST['pro_descricao'];
  $imagens = $_FILES['pro_foto'];
  $pro_valorpago = $_POST['pro_valorpago'];
  $pro_valorvenda = $_POST['pro_valorvenda'];
  $pro_qtde = $_POST['pro_qtde'];
  $umed_cod = $_POST['umed_cod'];
  $cat_cod = $_POST['cat_cod'];

  include '../connect_db.php';


  $nome_imagem = time();
  $destino ="../../../upload/". $nome_imagem .  ".jpg";
  move_uploaded_file($imagens['tmp_name'], $destino);

  $resultado = mysql_query("UPDATE produto SET pro_nome='$pro_nome', pro_descricao='$pro_descricao', pro_foto='$destino',pro_valorpago='$pro_valorpago',pro_valorvenda='$pro_valorvenda',pro_qtde='$pro_qtde',umed_cod='$umed_cod',cat_cod='$cat_cod' WHERE pro_cod ='$pro_cod' ");

  @mysql_free_result($resultado);
  mysql_close($dbconn);
  echo"
  <script>
  alert('Usuario alterado com sucesso!')
  </script>
  ";


  echo "
  <script>
  window.location=\"../verprodutos.php\"
  </script>
  ";
?>