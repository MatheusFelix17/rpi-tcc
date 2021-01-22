
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

h1 {color:black; margin-bottom:40px;}
p {color:blue;}

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
width: 50%;
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

<button class=my_button>TABELA</button>
<button class=my_button2>GRAFICO</button>


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

</div>


</body>

</html>