<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $nome = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefone = htmlspecialchars($_POST['phone']);
    $mensagem = htmlspecialchars($_POST['message']);

    // Validação básica
    if (empty($nome) || empty($email) || empty($telefone) || empty($mensagem)) {
        echo "Erro: Todos os campos são obrigatórios.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erro: Endereço de e-mail inválido.";
        exit;
    }

    // Configuração do e-mail
    $destinatario = "jhonatanpantaroto@gmail.com"; // Substitua pelo seu e-mail
    $assunto = "Novo Contato - SOLUZ";
    $corpoMensagem = "
        <h3>Detalhes do Contato</h3>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Telefone:</strong> $telefone</p>
        <p><strong>Mensagem:</strong> $mensagem</p>
    ";

    // Cabeçalhos do e-mail
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Enviar o e-mail
    if (mail($destinatario, $assunto, $corpoMensagem, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
} else {
    echo "Erro: Acesso inválido.";
}
