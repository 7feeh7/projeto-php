<?php
  require_once'../connect_db.php';
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" lang="pt-br">
    <title>Alterar Fornecedor</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
     <script language="javascript" type="text/javascript" src="../js/mascara_validacao.js"></script>
</head>
<body>
  <center>
  <div id="login" class="form">
<div class="acomodar">
<form action="alterar_fornecedor.php" name ="formulario" method="post">
<fieldset>
<legend>Alterar Fornecedor</legend>
  <table>

    <?php 
      $for_cod = $_GET['for_cod'];
      $resultado = mysql_query("SELECT * FROM fornecedor where for_cod = $for_cod",$dbconn);
       if ($resultado) {
        while ($row = mysql_fetch_assoc($resultado)) {
          ?>
      
      <tr>
        <td>ID:</td><td><input readonly="true" type="text" id="for_cod" class="texto" name="for_cod" value="<?php echo $row['for_cod']?>"/></td>
      </tr>
      <tr>  
        <td>Nome:</td><td><input type="text" id="nome" class="texto" name="nome" value="<?php echo $row['nome']?>" required /></td>
      </tr>
      <tr>
        <td>Razão social:</td><td><input type="text" id="rsocial" class="texto" name="rsocial" value="<?php echo $row['rsocial']?>" required /><td>
      </tr>
      <tr>
        <td>IE:</td><td><input type="text" id="ie" class="texto" name="ie" value="<?php echo $row['ie']?>" required /><td>
      </tr>
      <tr>
        <td>CNPJ:</td><td><input type="text" id="cnpj" class="texto" name="cnpj" value="<?php echo $row['cnpj']?>"required/>
        </td>
      </tr>
      <tr>
        <td>cep:</td><td><input type="text" id="cep" class="texto" name="cep" value="<?php echo $row['cep']?>"required/></td>
      </tr>
      <tr>
        <td>endereço:</td><td><input type="text" id="endereco" class="texto" name="endereco" value="<?php echo $row['endereco']?>"required/></td>
      </tr>
       <tr>
        <td>bairro:</td><td><input type="text" id="bairro" class="texto" name="bairro" value="<?php echo $row['bairro']?>"required/></td>
      </tr>
      <tr>
        <td>fone:</td><td><input type="text" id="fone" class="texto" name="fone" value="<?php echo $row['fone']?>"required/></td>
      </tr>
       <tr>
        <td>Celular:</td><td><input type="text" id="cell" class="texto" name="cell" value="<?php echo $row['cell']?>"required/></td>
      </tr>
      <tr>
        <td>E-mail:</td><td><input type="text" id="email" class="texto" name="email" value="<?php echo $row['email']?>" required/></td>
      </tr>
      <tr>
        <td>N°:</td><td><input type="text" id="endnumero" class="texto" name="endnumero" value="<?php echo $row['endnumero']?>"required/></td>
      </tr>
      <tr>
        <td>cidade:</td><td><input type="text" id="cidade" class="texto" name="cidade" value="<?php echo $row['cidade']?>"required/></td>
      </tr>
      <tr>
      <tr>
    <td>Estado:</td>
    <td><select name="estado" value="<?php echo $row['estado']?>" class="txt bradius">
      <option value="ce">Ceará</option> 
      <option value="ac">Acre</option> 
      <option value="al">Alagoas</option> 
      <option value="am">Amazonas</option> 
      <option value="ap">Amapá</option> 
      <option value="ba">Bahia</option> 
      <option value="df">Distrito Federal</option> 
      <option value="es">Espírito Santo</option> 
      <option value="go">Goiás</option> 
      <option value="ma">Maranhão</option> 
      <option value="mt">Mato Grosso</option> 
      <option value="ms">Mato Grosso do Sul</option> 
      <option value="mg">Minas Gerais</option> 
      <option value="pa">Pará</option> 
      <option value="pb">Paraíba</option> 
      <option value="pr">Paraná</option> 
      <option value="pe">Pernambuco</option> 
      <option value="pi">Piauí</option> 
      <option value="rj">Rio de Janeiro</option> 
      <option value="rn">Rio Grande do Norte</option> 
      <option value="ro">Rondônia</option> 
      <option value="rs">Rio Grande do Sul</option> 
      <option value="rr">Roraima</option> 
      <option value="sc">Santa Catarina</option> 
      <option value="se">Sergipe</option> 
      <option value="sp">São Paulo</option> 
      <option value="to">Tocantins</option> 
  </select></td>
      </tr>
      <tr>
        <td><input type="submit" class="btn" value="Alterar" name="alterar"></td> 
        <td><input type="button" class="btn" value="Cancelar"
          onclick="window.location='../verfornecedor.php';" /></td>       
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