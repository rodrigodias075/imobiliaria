<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenha os dados do formulário
    $nome = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];
    $destino = 'prfernando27@gmail.com';

    // Construa o corpo do email
    $mensagem = "Nome: " . $nome . "\n";
    $mensagem .= "Assunto: " . $assunto . "\n";
    $mensagem .= "Email: " . $email . "\n";

    // Envie o email
    $enviado = mail($destino, $assunto, $mensagem);

    // Verifique se o email foi enviado com sucesso
    if ($enviado) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o email.";
    }
}
?>
