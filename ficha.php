<?php

$host = "127.0.0.1";
$usuario = "root";
$senha = "";
$db = "dbinferno";

$conn = new mysqli($host, $usuario, $senha, $db);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $conn->real_escape_string($_POST['nome']);
    $objeto = $conn->real_escape_string($_POST['objeto']);
    $historia = $conn->real_escape_string($_POST['historia']);
    $classe = $conn->real_escape_string($_POST['classe']);
    $vida = intval($_POST['vida']);
    $vitalidade = intval($_POST['vitalidade']);
    $maldicao = intval($_POST['maldicao']);
    $astucia = intval($_POST['astucia']);
    $presteza = intval($_POST['presteza']);
    $auge = intval($_POST['auge']);
    $crueldade = intval($_POST['crueldade']);
    $obstinacao = intval($_POST['obstinacao']);
    $violacao = intval($_POST['violacao']);
    $id = intval($_POST['id']);
    $id_usuario_ficha = intval($_POST['id_usuario_ficha']);


    //$vantagens = somatória dos pontos de vantagens atribuidos baseado na classe escolhida (não sei como vou fazer ainda)
    //$desvantagens = a mesma coisa em cima



    /*if ($vantagens == 10 && $desvantagens == 10){
        $sql = "INSERT INTO fichapersonagem (nome, objeto, historia, classe, vida, vitalidade, maldicao, astucia, presteza, auge, crueldade, obstinacao, violacao, id) VALUES ('$nome', '$historia', '$classe', '$objeto', '$vida', '$vitalidade', '$maldicao', '$astucia', '$presteza', '$auge', '$crueldade', '$obstinacao', '$violacao', '$id', '$id_usuario_ficha')";
    }else{
        echo "Não adianta tentar passar a perna, corrija seus pontos de Vantagens e Desvantagens!!";
    }*/



    if ($conn->query($sql) === TRUE) {
        header('Location: ficha.php');
        exit;
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
