<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Safe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        .success-message {
            color: #4CAF50;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulário Enviado com Sucesso</h1>
        <p class="success-message">Obrigado por enviar o formulário.</p>
        <p>Seu envio foi bem-sucedido...</p>
    </div>
</body>
</html>
