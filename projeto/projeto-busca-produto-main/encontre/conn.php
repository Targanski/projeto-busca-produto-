<?php
$servidor = "localhost";// endereço do banco de dados do php(mysql)
$usuario = "root";// usuário padrão
$senha = "";// senha padrão
$db = "produto";// tabela
$conn = mysqli_connect($servidor, $usuario, $senha, $db);// conexão com as variáveis em ordem para realizar a conexão

// if ($conn->connect_error) {
//     die('Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error); //teste de conexão com o banco de dados
// }else{
//     echo 'Conexão OK';
// }

?>