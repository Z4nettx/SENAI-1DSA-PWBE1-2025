<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade</title>
</head>
<body>
    <h1>Selecione sua idade</h1>
    <form method="post">
    <input type="number" name="idade" id="idade" placeholder="Selecione sua idade">
    </form>
    <?php 
        if (isset($_POST['idade'])) {

            $idade = $_POST['idade'];
        }
            
        if ($idade >= 18) {
                echo 'Você é maior de idade, pode dirigir';
        } else{
                echo 'Você é menor de idade, não pode dirigir';
        }
       
    
    ?>
</body>
</html>