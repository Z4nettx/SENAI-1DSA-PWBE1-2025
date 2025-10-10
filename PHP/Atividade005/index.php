<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>Cálculo de Frete</h1>
        <label for="estado">Selecione seu estado</label>
        <select name="estado" id="estado">
            <option value="1">São Paulo</option>
            <option value="2">Rio de Janeiro</option>
            <option value="3">Minas Gerais</option>
            <option value="4">Espírito Santo</option>
            <option value="5">Rio Grande do Sul</option>
            <option value="6">Bahia</option>
            <option value="7">Pará</option>
            <option value="8">Amazonas</option>
            <option value="9">Tocantins</option>
            <option value="10">Mato Grosso do Sul</option>
        </select>
        <button type="submit">Calcular Frete</button>
    </form>
    <?php
    if (isset($_POST['estado'])) {
        $estado = $_POST['estado'];

        switch ($estado) {
            case 1:
                $estado = 'São Paulo';
                $frete = 15;
                break;
            case 2:
                $estado = 'Rio de Janeiro';
                $frete = 20;
                break;
            case 3:
                $estado = 'Minas Gerais';
                $frete = 18;
                break;
            case 4:
                $estado = 'Espírito Santo';
                $frete = 22;
                break;
            case 5:
                $estado = 'Rio Grande do Sul';
                $frete = 25;
                break;
            case 6:
                $estado = 'Bahia';
                $frete = 30;
                break;
            case 7:
                $estado = 'Pará';
                $frete = 35;
                break;
            case 8:
                $estado = 'Amazonas';
                $frete = 40;
                break;
            case 9:
                $estado = 'Tocantins';
                $frete = 32;
                break;
            case 10:
                $estado = 'Mato Grosso do Sul';
                $frete = 28;
                break;
        }
        echo "Você mora em $estado, seu frete é:  R$" . number_format($frete, 2, ',', '.') . "</p>";
    }

    ?>

    <style>
        body {
            background-color: burlywood;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        form {
            width: 500px;
        }
    </style>
</body>

</html>