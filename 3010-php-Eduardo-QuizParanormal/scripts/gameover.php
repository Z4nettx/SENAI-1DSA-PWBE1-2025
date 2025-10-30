<?php

    // Obtém o total de questões, respostas corretas e respostas erradas armazenadas na sessão do jogo.

    $total_questions = $_SESSION['game']['total_questions']; // Numero total de questões definidas no jogo.
    $correct_answers = $_SESSION['game']['correct_answers']; // Numero total de questões corretas no jogo.
    $incorrect_answers = $_SESSION['game']['incorrect_answers']; // Numero total de questões incorretas no jogo.
?>

<!-- Início do código HTML para exibir os resultados finais do jogo -->

<div class="result-container">   
   
    <!-- Título principal do jogo (pode ser o mesmo nome de antes, como "Quiz das Capitais) -->
    <h1>Quiz Paranormal</h1>
    <h2>Resultados:</h2>
    <hr>

    <!-- Exibe o número total de questões  -->
     <h3>Total de questões: <strong class="result-value"><?= $total_questions?></strong></h3>
     <h3>Respostas corretas: <strong class="result-value"><?= $correct_answers?></strong></h3>
     <h3>Respostas erradas: <strong class="result-value"><?= $incorrect_answers?></strong></h3>
    <div>
        <a href="index.php?route=start" class="btn btn-secondary p3 w-50"> Jogar novamente</a>
    </div>
</div>


