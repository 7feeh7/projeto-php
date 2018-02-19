<?php
	require_once'../connect_db.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" lang="pt-br">
    <title>Alterar cliente</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
     <script language="javascript" type="text/javascript" src="../js/mascara_validacao.js"></script>
</head>
<body>
<center>
<div id="login" class="form">
<div class="acomodar">
<form action="alterar_cliente.php" name ="formulario" method="post">
<fieldset>
<legend>Alterar Cliente</legend>
  <table>

		<?php 
			$cli_cod = $_GET['cli_cod'];
			$resultado = mysql_query("SELECT * FROM cliente where cli_cod = $cli_cod",$dbconn);
			 if ($resultado) {
			 	while ($row = mysql_fetch_assoc($resultado)) {
			 		?>
			
			<tr>
				<td>ID:</td><td><input readonly="true" type="text" id="cli_cod" class="texto" name="cli_cod" value="<?php echo $row['cli_cod']?>"/></td>
			</tr>
			<tr>	
				<td>Nome:</td><td><input type="text" id="nome" class="texto" name="nome" value="<?php echo $row['nome']?>" required /></td>
			</tr>
			<tr>
				<td>CPF/CNPJ:</td><td><input type="text" id="cpfcnpj" class="texto" name="cpfcnpj" value="<?php echo $row['cpfcnpj']?>"required/>
				</td></tr>
			<tr>
				<td>RG:</td><td><input type="text" id="rg" class="texto" name="rg" value="<?php echo $row['rg']?>" required/></td>
			</tr>
			<tr>
				<td>Razão social:</td><td><input type="text" id="rsocial" class="texto" name="rsocial" value="<?php echo $row['rsocial']?>" required /><td>
			</tr>
			<tr>
				<td>Tipo:</td><td><input type="text" id="tipo" class="texto" name="tipo" value="<?php echo $row['tipo']?>"required /></td>
			</tr>
			<tr>
				<td>endereço:</td><td><input type="text" id="endereco" class="texto" name="endereco" value="<?php echo $row['endereco']?>"required/></td>
			</tr>
			<tr>
				<td>N°:</td><td><input type="text" id="endnumero" class="texto" name="endnumero" value="<?php echo $row['endnumero']?>"required/></td>
			</tr>
			<tr>
				<td>bairro:</td><td><input type="text" id="bairro" class="texto" name="bairro" value="<?php echo $row['bairro']?>"required/></td>
			</tr>
			<tr>
				<td>fone:</td><td><input type="text" id="fone" class="texto" name="fone" value="<?php echo $row['fone']?>"required/></td>
			</tr>
			<tr>
				<td>cidade:</td><td><input type="text" id="cidade" class="texto" name="cidade" value="<?php echo $row['cidade']?>"required/></td>
			</tr>
			<tr>
				<td>cep:</td><td><input type="text" id="cep" class="texto" name="cep" value="<?php echo $row['cep']?>"required/></td>
			</tr>
			<tr>
				<td>estado:</td><td><input type="text" id="estado" class="texto" name="estado" value="<?php echo $row['estado']?>"required/></td>
			</tr>
			<tr>
				<td>E-mail:</td><td><input type="text" id="email" class="texto" name="email" value="<?php echo $row['email']?>"required/></td>
			</tr>
			<tr>
				<td>senha:</td><td><input type="password" id="senha" class="texto" name="senha" value="<?php echo $row['senha']?>"required/></td>
			</tr>
			<tr>
				<td><input type="submit" class="btn" value="Alterar" name="alterar"></td> 
				<td><input type="button" class="btn" value="Cancelar"
    			onclick="window.location='../vercliente.php';" /></td>       
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