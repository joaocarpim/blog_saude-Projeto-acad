<?php
include_once('../config.php');
session_start();

// Verifica a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$logado = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['pergunta1']) && isset($_POST['pergunta2']) && isset($_POST['pergunta3']) && isset($_POST['pergunta4']) && isset($_POST['pergunta5'])) {
        $pergunta1 = $conexao->real_escape_string($_POST['pergunta1']);
        $pergunta2 = $conexao->real_escape_string($_POST['pergunta2']);
        $pergunta3 = $conexao->real_escape_string($_POST['pergunta3']);
        $pergunta4 = $conexao->real_escape_string($_POST['pergunta4']);
        $pergunta5 = $conexao->real_escape_string($_POST['pergunta5']);

        $sql = "INSERT INTO respostas_formulario (id, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5) 
                VALUES ('$logado', '$pergunta1', '$pergunta2', '$pergunta3', '$pergunta4', '$pergunta5')";

        if ($conexao->query($sql) === TRUE) {
            echo "Formulário enviado com sucesso!";
        } else {
            echo "Erro ao enviar o formulário: " . $conexao->error;
        }
    } else {
        echo "Campos do formulário não definidos.";
    }
}

// Fecha a conexão
$conexao->close();
?>
