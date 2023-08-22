<!DOCTYPE html>
<html>
<head>
    <title>Quiz de Astronomia</title>
</head>
<body>
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #ffffff; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <h1>Quiz de Astronomia</h1>
        <form action="" method="post">
            <!-- Pergunta 1 -->
            <p>1. Qual é o planeta mais próximo do Sol?</p>
            <label><input type="radio" name="pergunta1" value="a"> Mercúrio</label>
            <label><input type="radio" name="pergunta1" value="b"> Vênus</label>
            
            <!-- Adicione mais perguntas aqui -->
            
            <button type="submit">Ver Resultado</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Defina as respostas corretas
            $respostas_corretas = array(
                "pergunta1" => "a",
                // Defina as respostas corretas para as outras perguntas
            );
            
            // Inicialize o contador de respostas corretas
            $pontuacao = 0;
            
            // Verifique as respostas do usuário
            foreach ($respostas_corretas as $pergunta => $resposta_correta) {
                if (isset($_POST[$pergunta]) && $_POST[$pergunta] === $resposta_correta) {
                    $pontuacao++;
                }
            }
            
            // Exiba os resultados
            echo "<p>Você acertou $pontuacao perguntas de " . count($respostas_corretas) . ".</p>";
        }
        ?>
    </div>
</body>
</html>
