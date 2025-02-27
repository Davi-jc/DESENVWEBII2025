<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<h2>Dados Recebidos</h2>";
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    echo "<h2>Cabeçalhos da Requisição</h2>";
    $headers = apache_request_headers();
    echo "<pre>";
    print_r($headers);
    echo "</pre>";

    echo "<h2>Método Utilizado</h2>";
    echo "<p>" . $_SERVER['REQUEST_METHOD'] . "</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; margin: auto; }
        label, input, textarea { display: block; width: 100%; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h2>Formulário de Contato</h2>
    <h3>Envio via POST</h3>
    <form action="" method="post">
    <input type="text" name="nome" placeholder="Nome" required>
        <input type="number" name="telefone" placeholder="Telefone" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <textarea name="mensagem" placeholder="Mensagem" rows="4" required></textarea>
        <button type="submit">Enviar via POST</button>
    </form>

    <h3>Envio via GET</h3>
    <form action="" method="get">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="number" name="telefone" placeholder="Telefone" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <textarea name="mensagem" placeholder="Mensagem" rows="4" required></textarea>
        <button type="submit">Enviar via GET</button>
    </form>
</body>
</html>
