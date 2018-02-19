<meta charset="UTF-8" lang="pt-br">
<?php 
  $for_cod = $_POST['for_cod'];
  $nome = $_POST['nome'];
  $rsocial  = $_POST['rsocial'];
  $ie = $_POST['ie'];
  $cnpj = $_POST['cnpj'];
  $cep = $_POST['cep'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $fone = $_POST['fone'];
  $cell = $_POST['cell'];
  $email = $_POST['email'];
  $endnumero = $_POST['endnumero'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
 

  include '../connect_db.php';

  $resultado = mysql_query("UPDATE fornecedor SET nome='$nome', rsocial='$rsocial', ie='$ie',cnpj='$cnpj',cep='$cep',endereco='$endereco',bairro='$bairro',fone='$fone',cell='$cell',email='$email',endnumero='$endnumero',cidade='$cidade',estado='$estado' WHERE for_cod ='$for_cod' ");

  @mysql_free_result($resultado);
  mysql_close($dbconn);
  echo"
  <script>
  alert('Usuario alterado com sucesso!')
  </script>
  ";


  echo "
  <script>
  window.location=\"../verfornecedor.php\"
  </script>
  ";
?>