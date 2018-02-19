<?php
  require_once'../connect_db.php';
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" lang="pt-br">
    <title>Alterar Categoria</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
     <script language="javascript" type="text/javascript" src="../js/mascara_validacao.js"></script>
</head>
<body>
 <div id="login" class="form" style="top:40px;">
 <div class="acomodar">
  <center><p></p>
  <h3>Alterar Dados de categoria</h3></br>
  <div id="login" class="form">
<div class="acomodar">
<form action="alterar_categoria.php" name ="formulario" method="post">
<fieldset>
  <table>

    <?php 
      $cat_cod = $_GET['cat_cod'];
      $resultado = mysql_query("SELECT * FROM categoria where cat_cod = $cat_cod",$dbconn);
       if ($resultado) {
        while ($row = mysql_fetch_assoc($resultado)) {
          ?>
      
      <tr>
        <td>ID:</td><td><input readonly="true" type="text" id="cat_cod" class="texto" name="cat_cod" value="<?php echo $row['cat_cod']?>"/></td>
      </tr>
      <tr>  
        <td>Nome:</td><td><input type="text" id="cat_nome" class="texto" name="cat_nome" value="<?php echo $row['cat_nome']?>" required /></td>
      </tr>
      
      <tr>
        <td><input type="submit" class="btn" value="Alterar" name="alterar"></td> 
        <td><input type="button" class="btn" value="Cancelar"
          onclick="window.location='../vercategoria.php';" /></td>       
      </tr>
    <?php            
        } 
       }
    ?>
    </div>
  </div>
  </center>
    </form>
</body>
</html>