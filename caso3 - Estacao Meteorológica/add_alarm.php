
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

<!-- ESTILOS CSS PARA EMBELEZAR A PAGINA -->
<style type="text/css">

h1 {color:black; margin-bottom:40px; font-family: 'Nunito', sans-serif;
}
h3 {font-family: 'Nunito', sans-serif;}
p {color:blue; font-family: 'Nunito', sans-serif;}

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

.test_class {
background-color: lightblue;
padding: 4;
max-width: 700px;
display: inline-block;
border: 1 solid navy;
margin-bottom:5px;
}

.alert_created_div {
  margin-top: 30px;
  display : "none";
  background-color: #b3e681;
  width: fit-content;
  font-size: 20px;
  color: #45633b;
  padding: 10px;
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
<h1>Esta&ccedil;&atilde;o Meteorologica:</h1>

<button class=my_button>CRIAR ALARME</button>
<button class=my_button2>TABELA</button>
<button class=my_button2>GRAFICO</button>
<button class=my_button2>DADOS INSTANTÂNEOS</button>







<table border="0" cellspacing="0" cellpadding="4">

<tr>
    <td class="table_titles">DATA</td>
    <td class="table_titles">TEMPERATURA (C)</td>
    <td class="table_titles">UMIDADE</td>

</tr>

<!-- Tudo que for script PHP tem que estar entre as TAG abaixo.
     Repare que ela tem uma TAG de fechamento -->

<?php

// Busca todos os registros
$query = "SELECT * FROM dados";
$result = mysqli_query($conexao, $query);

# Pra contar se linha e par ou impar
$flag_toggle = True;

// Itera sobre o array de resultados pra exibir linha por linha
while ($row = $result->fetch_row()) {

    # Enfeita a linha de um jeito...
    if($flag_toggle) {
        # Gera uma nova linha
        echo "<tr>";

        # Insere na primeira coluna
        echo "<td class='table_cells_odd'>";
        echo $row[0];
        echo "</td>";

        # Insere na segunda coluna
        echo "<td class='table_cells_odd'>";
        echo $row[1];
        echo "</td>";

        # Insere na terceira coluna
        echo "<td class='table_cells_odd'>";
        echo $row[2]."%";
        echo "</td>";

        # Finaliza a linha
        echo "</tr>";


        #printf ("DATA: %s | TEMPO: %s | UMID: %s ", $row[0], $row[1], $row[2]);
        echo "</tr>";
    }

    # ...ou enfeita a linha de outro jeito
    else{

        # Gera uma nova linha
        echo "<tr>";

        # Insere na primeira coluna
        echo "<td class='table_cells_even'>";
        echo $row[0];
        echo "</td>";

        # Insere na segunda coluna
        echo "<td class='table_cells_even'>";
        echo $row[1];
        echo "</td>";

        # Insere na terceira coluna
        echo "<td class='table_cells_even'>";
        echo $row[2]."%";
        echo "</td>";

        # Finaliza a linha
        echo "</tr>";


        #printf ("DATA: %s | TEMPO: %s | UMID: %s ", $row[0], $row[1], $row[2]);
        echo "</tr>";
    }

    $flag_toggle = !$flag_toggle;

}

?>

<h3>Escolha os valores para o alarme: </h3>
<label for="cars">Temperatura: </label><br>


<select name="cars" id="cars">
  <option value="25">5</option>
  <option value="saab">6</option>
  <option value="mercedes">7</option>
  <option value="audi">8</option>
  <option value="volvo">9</option>
  <option value="saab">10</option>
  <option value="mercedes">11</option>
  <option value="audi">12</option>
  <option value="volvo">13</option>
  <option value="saab">14</option>
  <option value="mercedes">15</option>
  <option value="audi">16</option>
  <option value="volvo">17</option>
  <option value="saab">18</option>
  <option value="mercedes">19</option>
  <option value="audi">20</option>
  <option value="volvo">21</option>
  <option value="saab">22</option>
  <option value="mercedes">23</option>
  <option value="audi">24</option>
  <option value="volvo">25</option>
  <option value="saab">26</option>
  <option value="mercedes">27</option>
  <option value="audi">28</option>
  <option value="saab">29</option>
  <option value="mercedes">30</option>
  <option value="audi">31</option>
  <option value="saab">32</option>
  <option value="mercedes">33</option>
  <option value="audi">34</option>
  <option value="saab">35</option>
  <option value="mercedes">36</option>
  <option value="audi">37</option>
  <option value="audi">38</option>
  <option value="saab">39</option>
  <option value="mercedes">40</option>
  <option value="audi">41</option>
</select>
</select>
<br>
<br>
<label for="cars">Velocidade Vento: (km/h)</label><br>


<select name="cars" id="cars">
  <option value="a">2</option>
  <option value="a">6</option>
  <option value="a">10</option>
  <option value="a">15</option>
  <option value="a">20</option>
  <option value="a">30</option>
  <option value="a">35</option>
  <option value="a">40</option>
  <option value="a">45</option>
  <option value="a">50</option>
  <option value="a">60</option>
  <option value="a">65</option>
  <option value="a">70</option>
  <option value="a">80</option>
  <option value="a">90</option>
  <option value="a">100</option>

</select>

<br>
<br>
<label for="cars">Direção Vento: </label><br>


<select name="x" id="x">
  <option value="x">Norte</option>
  <option value="x">Sul</option>
  <option value="x">Leste</option>
  <option value="x">Oeste</option>
  <option value="x">Sudeste</option>
  <option value="x">Sudoeste</option>
  <option value="x">Nordeste</option>
  <option value="x">Noroeste</option>
</select>
<br>

<br>
<label for="cars">Umidade: (%)</label><br>


<select name="cars" id="cars">
  <option value="a">20</option>
  <option value="a">30</option>
  <option value="a">35</option>
  <option value="a">40</option>
  <option value="a">45</option>
  <option value="a">50</option>
  <option value="a">60</option>
  <option value="a">65</option>
  <option value="a">70</option>
  <option value="a">75</option>
  <option value="a">80</option>
  <option value="a">85</option>
  <option value="a">90</option>
  <option value="a">95</option>
  <option value="a">98</option>
</select>

<br>
<br>
<label for="cars">Pressão: (mmHg)</label><br>


<select name="cars" id="cars">
  <option value="70">680</option>
  <option value="70">700</option>
  <option value="70">720</option>
  <option value="70">740</option>
  <option value="70">760</option>
</select>
<br>
<br>


<label for="phone">Insira seu Telefone: (e.g: +55 11 98100 5900) </label><br>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
<br>
<br>
<button class=my_button_submit onclick="toggle_div()">Criar alarme!</button>


<div id="alert_created_div" class="alert_created_div">
  Alarme criado com sucesso!
</div>

<script>
function toggle_div() {
  var x = document.getElementById("alert_created_div");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>



<script>
function myalert() {
  alert("Alarme inserido com sucesso!");
}
</script>

</body>
</html>


<br><br>
<br>
</div>


</body>

</html>