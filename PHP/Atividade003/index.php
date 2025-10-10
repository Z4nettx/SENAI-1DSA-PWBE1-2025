<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Selecione uma Bebida</h1>
    <form method="post">
        <label for="bebida">Escolha uma Bebida: </label>
        <select name="bebida" id="bebida">
            <option value=""> Selecione </option>
            <option value="Água"> Água </option>
            <option value="Refrigerante"> Refrigerante </option>
            <option value="Suco"> Suco </option>
        </select>
        <button type="submit">Selecionar</button>
    </form>
    <?php
        if (isset($_POST['bebida'])) {
            $bebida = $_POST['bebida'];
            
            switch ($bebida) {
                case "Água":
                    echo "Você escolheu $bebida \n <br>";
                    echo 'Preço: R$1,50';
                break;

                case "Refrigerante":
                    echo "Você escolheu $bebida \n <br>";
                    echo 'Preço: R$4,00';
                break;

                case "Suco":
                    echo "Você escolheu $bebida \n <br>";
                    echo 'Preço: R$2,50';
                break;
            }
        }
    ?>
</body>

</html>