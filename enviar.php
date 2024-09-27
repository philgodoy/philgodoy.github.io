<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizando os inputs
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // Validação do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email inválido.");
    }

    $to = "felipe.godoy.marques@hotmail.com";
    $subject = "Formulário enviado: $assunto";
    $message = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem: $mensagem";
    $headers = "From: $email";

    // Enviando o email
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
