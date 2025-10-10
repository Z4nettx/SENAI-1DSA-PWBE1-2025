<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifique seu desconto</title>
</head>

<body>
    <form action="" name method="post">
        <h1>Verifique seu desconto</h1>
        <label for="select">Selecione seu tipo de cliente</label>
        <select name="tipo-cliente" id="select">
            <option value="1">VIP</option>
            <option value="2">Regular</option>
            <option value="3">Outro</option>
        </select>
        <button type="submit">Verificar Desconto</button>

        <?php
        if (isset($_POST['tipo-cliente'])) {
            $tipocliente = $_POST['tipo-cliente'];

            switch ($tipocliente) {
                case 1:
                    $tipocliente = 'VIP';
                    $desconto = 20;
                    break;
                case 2:
                    $tipocliente = 'Regular';
                    $desconto = 10;
                    break;
                case 3:
                    $tipocliente = 'Outro';
                    $desconto = 0;
                    break;
            }
            if ($tipocliente == 'Outro' || $tipocliente == '3') {
                echo "Sem desconto.";
            } else {
                echo "Você é cliente $tipocliente e tem $desconto% de desconto!";
            }
        }

        ?>
    </form>
    <style>
        body {
            background: linear-gradient(60deg, #fff, lightskyblue);
            height: 94.7vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            height: 400px;
            width: 500px;
            background: linear-gradient(-45deg, #0091ffff, #ffffffff);
            border-radius: 40px;
            display: flex;
            flex-direction: column;
            padding: 15px;
            align-items: center;
            justify-content: space-around;
            font-size: 20px;
        }

        form select,
        form button {
            width: 300px;
            height: 30px;
            background: transparent;
            border: .1px solid #ddd;
            background: rgba(0, 0, 0, .05);
            text-align: center;
            font-size: 20px;
        }
    </style>
</body>

</html>