
<!-- CONEXAO COM DB -->
<?php
 
# Conexão com o banco de dados MySQL *****************************************
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "dados_meteorologicos";
 
$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

?>



<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&display=swap" rel="stylesheet">
<!-- ESTILOS CSS PARA EMBELEZAR A PAGINA -->
<style type="text/css">



h1 {color:black; margin-bottom: 62 px;  font-family: 'Big Shoulders Stencil Text', cursive;}
p {color:blue; font-family: 'Tangerine', serif;}

.test_class {
background-color: lightblue;
padding: 4;
max-width: 700px;
display: inline-block;
border: 1 solid navy;
margin-bottom:5px;
}

.my_button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin-bottom:30px;
}

.my_button2 {
  background-color: #5fBf7f; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin-bottom:30px;
}

.content_block {

background-color: #f8f8f8;
padding: 20px;
width: 100%;
border: 1px solid #f0f0f0;
margin: 0 auto;
display: block;
}

.table_titles, .table_cells_odd, .table_cells_even {
        padding-right: 20px;
        padding-left: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        color: #000;
}
.table_titles {
    color: #red;
    background-color: #e7e7e7;
}
.table_cells_odd {
    text-align: center;
    background-color: #ffffff;
}
.table_cells_even {
    text-align: center;
    background-color: #f7f7f7;
}
table {
    border: 1px solid #e3e3e3;
}



</style>

</head>


<!-- Aqui eh onde de fato comeca o que vai ser exibido na pagina-->
<body>


<!-- DIV principal com todo o conteudo -->
<div class = content_block>

<!-- Titulo da página -->
<h1>Estação Meteorológica:</h1>

<button class=my_button2>CRIAR ALARME</button>
<button class=my_button2>TABELA</button>
<button class=my_button>GRAFICO</button>
<button class=my_button2>DADOS INSTANTÂNEOS</button>


<canvas id="myChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<!-- Tudo que for script PHP tem que estar entre as TAG abaixo.
     Repare que ela tem uma TAG de fechamento -->

<?php

// FAZ A QUERY DEPENDENDO DO PERIODO QUE O USUARIO ESCOLHEU
// Busca todos os registros
$query = "SELECT * FROM dados";
$result = mysqli_query($conexao, $query);

# Pra contar se linha e par ou impar
$json = [];

// Itera sobre o array de resultados pra exibir linha por linha
while ($row = $result->fetch_row()) {
  
  // echo "<br>";
  $json_dates[] = $row[0];

  $json_hum[] = (int)$row[1];

  $json_temp[] = (int)$row[2];
}

// echo json_encode($json_dates);
// echo json_encode($json_hum);
// echo json_encode($json_temp);
?>


 <!-- https://www.chartjs.org/docs/latest/developers/updates.html -->


<script>

        var ctx = document.getElementById('myChart').getContext('2d');
        // Type, Data, Options
        var chart = new Chart(ctx, {
                type: 'line',
                data:{
                  //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                  labels: <?php echo json_encode($json_dates); ?>,
                  datasets: [{
                          label: 'Umidade',
                          backgroundColor: 'rgba(174, 129, 240,0.4)',
                          borderColor: 'rgb(174, 129, 240)',
                          pointRadius: 7,
                          lineTension: 0,
                          pointHitRadius: 10,
                          fill: true,
                          data: <?php echo json_encode($json_hum); ?> //[0, 10, 5, 2, 20, 30, 45, 44, 25, 31, 38, 22]
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: false,
                        min: 60,
                        max: 100,
                        stepSize: 4
                      }
                    }]
                  }
                }
        });

</script>
<br>
<br>
<br>

<canvas id="myChart2"></canvas>



<!-- YO PAPA -->
<script>
        var ctx = document.getElementById('myChart2').getContext('2d');
        // Type, Data, Options
        var chart = new Chart(ctx, {
                type: 'line',
                data:{
                  //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                  labels: <?php echo json_encode($json_dates); ?>,
                  datasets: [{
                          label: 'Temperatura',
                          backgroundColor: 'rgba(201, 101, 58,0.4)',
                          borderColor: 'rgb(201, 101, 58)',
                          pointRadius: 7,
                          lineTension: 0,
                          pointHitRadius: 10,
                          fill: true,
                          data: <?php echo json_encode($json_temp); ?> //[0, 10, 5, 2, 20, 30, 45, 44, 25, 31, 38, 22]
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: false,
                        min: 0,
                        max: 45,
                        stepSize: 4
                      }
                    }]
                  }
                }
        });

</script>

</div>




</body>

</html>



