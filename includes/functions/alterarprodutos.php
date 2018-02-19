<?php
  require_once'../connect_db.php';
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" lang="pt-br">
    <title>Alterar Produtos</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
     <script language="javascript" type="text/javascript" src="../js/mascara_validacao.js"></script>
</head>
<body>
  <center>
  <div id="login" class="form">
<div class="acomodar">
<form action="alterar_produtos.php" name ="formulario" method="post">
<fieldset>
<legend>Alterar Produtos</legend>
  <table>

    <?php 
      $pro_cod = $_GET['pro_cod'];
      $resultado = mysql_query("SELECT * FROM produto where pro_cod = $pro_cod",$dbconn);
       if ($resultado) {
        while ($row = mysql_fetch_assoc($resultado)) {
          ?>
      
      <tr>
        <td>ID:</td><td><input readonly="true" type="text" id="pro_cod" class="texto" name="pro_cod" value="<?php echo $row['pro_cod']?>"/></td>
      </tr>
      <tr>  
        <td>Nome:</td><td><input type="text" id="pro_nome" class="texto" name="pro_nome" value="<?php echo $row['pro_nome']?>" required /></td>
      </tr>
      <tr>
        <td>Descrição:</td><td><input type="text" id="pro_descricao" class="texto" name="pro_descricao" value="<?php echo $row['pro_descricao']?>" required /><td>
      </tr>
      <?php
      $sql = mysql_query("SELECT * FROM produto");

      ?>
      <tr>
        <td>Foto:</td><td><input type="file" name="pro_foto"/><td>
      </tr>
      <tr>
        <td>VAlor Pago:</td><td><input type="text" id="pro_valorpago" class="texto" name="pro_valorpago" value="<?php echo $row['pro_valorpago']?>"required/>
        </td>
      </tr>
      <tr>
        <td>Valor Venda:</td><td><input type="text" id="pro_valorvenda" class="texto" name="pro_valorvenda" value="<?php echo $row['pro_valorvenda']?>"required/></td>
      </tr>
      <tr>
        <td>Quantidade:</td><td><input type="text" id="pro_qtde" class="texto" name="pro_qtde" value="<?php echo $row['pro_qtde']?>"required/></td>
      </tr>
      <tr>
        <td>Categoria:</td>
        <td><select name="cat_cod" class="texto">
            <?php
            $qr= mysql_query("SELECT * FROM categoria ");
            while ($row=mysql_fetch_array($qr)){
            ?>
            <option value="<?php echo $row['cat_cod']?>"><?php echo $row['cat_nome']?></option>
            <?php }?>
            </select></td>
        </tr>
        <td>Medida:</td>
           <td><select name="umed_cod" class="texto">
               <?php
               $qr= mysql_query("SELECT * FROM undmedida ");
                while ($row=mysql_fetch_array($qr)){
                ?>
                <option value="<?php echo $row['umed_cod']?>"><?php echo $row['umed_nome']?></option>
               <?php }?>
          </select></td>
        </tr>
      <tr>
        <td><input type="submit" class="btn" value="Alterar" name="alterar"></td> 
        <td><input type="button" class="btn" value="Cancelar"
          onclick="window.location='../verprodutos.php';" /></td>       
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