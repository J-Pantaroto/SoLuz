<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['phone'];

    $destinatario = "seu-email@exemplo.com";
    $assunto = "Novo Contato - Soluz";
    $mensagem = "Nome: $nome\nEmail: $email\nTelefone: $telefone";

    mail($destinatario, $assunto, $mensagem);
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar.";
}
?>
