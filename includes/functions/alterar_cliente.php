<meta charset="UTF-8" lang="pt-br">
<?php 
  $cli_cod = $_POST['cli_cod'];
  $nome = $_POST['nome'];
  $cpfcnpj  = $_POST['cpfcnpj'];
  $rg = $_POST['rg'];
  $rsocial = $_POST['rsocial'];
  $tipo = $_POST['tipo'];
  $endereco = $_POST['endereco'];
  $endnumero = $_POST['endnumero'];
  $bairro = $_POST['bairro'];
  $fone = $_POST['fone'];
  $cidade = $_POST['cidade'];
  $cep = $_POST['cep'];
  $estado = $_POST['estado'];
 

  include '../connect_db.php';

  $resultado = mysql_query("UPDATE cliente SET nome='$nome', cpfcnpj='$cpfcnpj', rg='$rg',rsocial='$rsocial',tipo='$tipo',endereco='$endereco',endnumero='$endnumero',bairro='$bairro',fone='$fone',cidade='$cidade',cep='$cep',estado='$estado' WHERE cli_cod ='$cli_cod' ");

  @mysql_free_result($resultado);
  mysql_close($dbconn);
  echo"
  <script>
  alert('Usuario alterado com sucesso!')
  </script>
  ";


  echo "
  <script>
  window.location=\"../vercliente.php\"
  </script>
  ";
?>