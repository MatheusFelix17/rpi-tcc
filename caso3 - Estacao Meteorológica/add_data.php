<?php
 
# Conexão com o banco de dados MySQL *****************************************
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "dados_meteorologicos";
 
$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

?>

<?php
    # Conexão com o banco de dados MySQL *****************************************
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "dados_meteorologicos";
     
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Prepare the SQL statement
    date_default_timezone_set('Europe/Athens');
    $dateS = date('m/d/Y h:i:s', time());
    $query = "INSERT INTO dados_meteorologicos.dados (DATA,UMIDADE,TEMPERATURA) VALUES (CURRENT_DATE(),'".$_GET["temp"]."','".$_GET["umidade"]."')";     

    // Executa a Query
    $return = mysqli_query($conexao, $query);

    if($return){
        echo "Dados inseridos com sucesso!";
    }else{
        echo "Deu algum erro!";
    }

    # Retorna pra pagina principal
    header( "refresh:3;url=http://localhost/web/index.php" );

?>