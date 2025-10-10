<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Ingresso</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="belobelo.jpg" alt="">
        <h1>Belo Concert no Espaço Unimed!</h1>
    </header>

    <main>
        <form action="" method="post">
            <fieldset>

                <caption>Formulário de Ingresso</caption>

                <input type="text" name="nome" id="nome" placeholder="Digite seu nome aqui" required>

                <input type="email" name="email" id="email" placeholder="Digite seu email aqui" required>

                <input type="tel" name="email" id="email" placeholder="Telefone: (XX) XXXXX-XXXX" required>

                <input type="number" name="idade" id="idade" placeholder="Selecione sua idade aqui" required>

                <select name="ingresso" id="ingresso">
                    <option value="1">VIP</option>
                    <option value="2">Regular</option>
                    <option value="3">Normal</option>
                </select>
                <button type="submit">Enviar</button>
            </fieldset>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];
                $ingresso = $_POST['ingresso'];

                switch ($ingresso) {

                    case 1:
                        $ingresso = 'VIP';
                        $preco = 100;
                        break;

                    case 2:
                        $ingresso = 'Regular';
                        $preco = 50;
                        break;

                    case 3:
                        $ingresso = 'Normal';
                        $preco = 20;
                        break;
                }
                echo "<p>Olá, $nome! Você comprou o ingresso $ingresso, no valor de: $" . number_format($preco, 2, ',', '.'. "</p>");

                if ($idade < 18) {
                    echo "<p>Infelizmente, você ainda tem $idade, então não poderá comprar o ingresso.</p>";
                }
            }

            ?>

        </form>
        <img src="belopngkk.png" alt="">
    </main>
    <style>
        


    </style>
</body>

</html>