<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro nos Dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            border: 2px solid #ff0000;
        }
        .icon {
            font-size: 50px;
            color: #ff0000;
            margin-bottom: 20px;
        }
        .message {
            font-size: 18px;
            color: #333;
        }
        .highlight {
            color: #ff0000;
            font-weight: bold;
        }
        .legal {
            font-size: 14px;
            color: #666;
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">❓</div>
        <div class="message">
            <p><span class="highlight">Ocorreu uma falha nos dados.</span> Espere até 24 horas para tentar novamente.</p>
        </div>
        <div class="legal">
            <p><strong>Lei de Proteção de Dados:</strong></p>
            <p>Seus dados devem estar verídicos e as imagens corretas. Todos os dados são protegidos pela Lei Geral de Proteção de Dados (LGPD), garantindo sua privacidade e segurança.</p>
        </div>
    </div>
</body>
</html>
