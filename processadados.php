<?php
require_once'connect_db.php';

//CADASTRA O GERENTE

  if(@$_GET['go'] == 'cadastrarg'){
    $nome = $_POST['nome'];
    $dt_nasc = $_POST['dt_nasc'];
    $fone = $_POST['fone'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];


//INSERINDO DADOS NA TABELA
  mysql_query ("INSERT INTO tab_gerente (nome, dt_nasc, fone, endereco, cpf, rg, login, senha) 
        VALUES ('$nome','$dt_nasc','$fone','$endereco','$cpf','$rg','$login','$senha')",$dbconn);
  echo"<script>alert('Cadastrado com sucesso!')</script>";

//fechando a conexão e redirecionando
    mysql_close($dbconn);
    echo"<script>window.location=\"../home.php\"</script>";
}

//CADASTRA PRODUTO

  if(@$_GET['go'] == 'cadastrarp'){
    $pro_nome = $_POST['pro_nome'];
    $imagens = $_FILES['pro_foto']; 
    $valor = $_POST['valor'];
    $categoria = $_POST['categoria'];

      $nome_imagem = time();
      $destino ="upload/". $nome_imagem .  ".jpg";
      move_uploaded_file($imagens['tmp_name'], $destino);
     

//INSERINDO DADOS NA TABELA
    $sql_code = "INSERT INTO tab_prod(pro_nome,pro_foto,valor,categoria,data) 
          VALUES ('$pro_nome','$destino','$valor','$categoria',NOW())";

    $result = mysql_query($sql_code, $dbconn);
    header('Location:ver_produto.php?msg=1');

//fechando a conexão e redirecionando
    mysql_close($dbconn);
   

}


//CADASTRANDO CONTA

  if(@$_GET['go'] == 'cadastrarc'){
    $status = $_POST['status'];
    $codGarcom = $_POST['codGarcom'];
    $dataAbertura = $_POST['dataAbertura'];
    $horaAbertura = $_POST['horaAbertura'];
    $valorTotal = $_POST['valorTotal'];
    

//INSERINDO DADOS NA TABELA
  mysql_query("INSERT INTO tab_conta (status,codGarcom, dataAbertura, horaAbertura, valorTotal) 
        VALUES ('$status',$codGarcom','$dataAbertura','$horaAbertura','$valorTotal')",$dbconn);
    echo"<script>alert('Cadastrado com sucesso!')</script>";

//fechando a conexão e redirecionando
    mysql_close($dbconn);
    echo"<script>window.location=\"ver_conta.php\"</script>";
}