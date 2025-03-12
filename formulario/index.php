<?php
// Incluir a conexão com o banco de dados
include('conexao.php');

// Variável para armazenar a mensagem de sucesso
$mensagem_sucesso = "";

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $conhece_ai = $_POST['conhece_ai'];
    $como_conheceu = $_POST['como_conheceu'];
    $usa_diariamente = $_POST['usa_diariamente'];
    
    // Verificar se o campo 'uso_mais_frequente' é um array e não está vazio
    $uso_mais_frequente = isset($_POST['uso_mais_frequente']) && is_array($_POST['uso_mais_frequente']) ? implode(", ", $_POST['uso_mais_frequente']) : null;

    $pretende_aprender = $_POST['pretende_aprender'];
    $campo_interesse = $_POST['campo_interesse'];
    $habilidades_necessarias = $_POST['habilidades_necessarias'];
    $conhecimento_anterior = $_POST['conhecimento_anterior'];
    $outros_comentarios = $_POST['outros_comentarios'];

    // Preparar a consulta SQL para inserir os dados no banco
    $sql = "INSERT INTO respostas (nome, email, conhece_ai, como_conheceu, usa_diariamente, uso_mais_frequente, pretende_aprender, campo_interesse, habilidades_necessarias, conhecimento_anterior, outros_comentarios) 
            VALUES ('$nome', '$email', '$conhece_ai', '$como_conheceu', '$usa_diariamente', '$uso_mais_frequente', '$pretende_aprender', '$campo_interesse', '$habilidades_necessarias', '$conhecimento_anterior', '$outros_comentarios')";

    // Executar a consulta
    if ($conn->query($sql) === TRUE) {
        $mensagem_sucesso = "Dados enviados com sucesso!";
    } else {
        $mensagem_sucesso = "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechar a conexão com o banco
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Conhecimento sobre Inteligência Artificial</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Função para remover a mensagem após 5 segundos
        window.onload = function() {
            // Verificar se a mensagem de sucesso está presente
            if (document.getElementById("mensagem-sucesso")) {
                setTimeout(function() {
                    document.getElementById("mensagem-sucesso").style.display = 'none';
                }, 5000); // Remove após 5 segundos
            }
        }
    </script>
</head>
<body>

<div class="form-container">
    <!-- Título do formulário -->
    <div class="form-title">
        <h1>Formulário de Conhecimento sobre Inteligência Artificial</h1>
    </div>

    <!-- Exibir a mensagem de sucesso, se houver -->
    <?php if ($mensagem_sucesso != ""): ?>
        <div id="mensagem-sucesso" class="mensagem-sucesso">
            <?php echo $mensagem_sucesso; ?>
        </div>
    <?php endif; ?>

    <form action="index.php" method="post">
        <!-- Perguntas -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="conhece_ai">Você sabe o que é Inteligência Artificial?</label>
        <div class="resposta">
            <input type="radio" id="sim" name="conhece_ai" value="Sim" required> Sim
        </div>
        <div class="resposta">
            <input type="radio" id="nao" name="conhece_ai" value="Não" required> Não
        </div>

        <label for="como_conheceu">Como você conheceu a Inteligência Artificial?</label>
        <textarea id="como_conheceu" name="como_conheceu" rows="4" required></textarea>

        <label for="usa_diariamente">Você costuma usar IA no seu dia a dia?</label>
        <div class="resposta">
            <input type="radio" id="usa_sim" name="usa_diariamente" value="Sim" required> Sim
        </div>
        <div class="resposta">
            <input type="radio" id="usa_nao" name="usa_diariamente" value="Não" required> Não
        </div>

        <label for="uso_mais_frequente">Qual o seu uso mais frequente de Inteligência Artificial? (Marque todas as opções que se aplicam)</label>
        <div class="resposta">
            <input type="checkbox" id="assistente_virtual" name="uso_mais_frequente[]" value="Assistente Virtual (como Siri, Alexa)"> Assistente Virtual (como Siri, Alexa)
        </div>
        <div class="resposta">
            <input type="checkbox" id="recomendacoes" name="uso_mais_frequente[]" value="Recomendações (como Netflix, YouTube)"> Recomendações (como Netflix, YouTube)
        </div>
        <div class="resposta">
            <input type="checkbox" id="chatbots" name="uso_mais_frequente[]" value="Chatbots"> Chatbots
        </div>
        <div class="resposta">
            <input type="checkbox" id="redes_sociais" name="uso_mais_frequente[]" value="Redes Sociais (como Facebook, Instagram)"> Redes Sociais (como Facebook, Instagram)
        </div>
        <div class="resposta">
            <input type="checkbox" id="outros" name="uso_mais_frequente[]" value="Outros"> Outros
        </div>

        <label for="pretende_aprender">Você tem interesse em se aprofundar no estudo de Inteligência Artificial?</label>
        <div class="resposta">
            <input type="radio" id="pretende_sim" name="pretende_aprender" value="Sim" required> Sim
        </div>
        <div class="resposta">
            <input type="radio" id="pretende_nao" name="pretende_aprender" value="Não" required> Não
        </div>

        <label for="campo_interesse">Em qual área da Inteligência Artificial você tem mais interesse?</label>
        <div class="resposta">
            <input type="radio" id="aprendizado_de_maquina" name="campo_interesse" value="Aprendizado de Máquina"> Aprendizado de Máquina
        </div>
        <div class="resposta">
            <input type="radio" id="processamento_de_linguagem" name="campo_interesse" value="Processamento de Linguagem Natural"> Processamento de Linguagem Natural
        </div>
        <div class="resposta">
            <input type="radio" id="visao_computacional" name="campo_interesse" value="Visão Computacional"> Visão Computacional
        </div>
        <div class="resposta">
            <input type="radio" id="redes_neurais" name="campo_interesse" value="Redes Neurais"> Redes Neurais
        </div>
        <div class="resposta">
            <input type="radio" id="outros_interesses" name="campo_interesse" value="Outros"> Outros
        </div>

        <label for="habilidades_necessarias">Você acha que seria necessário aprender programação para trabalhar com IA?</label>
        <div class="resposta">
            <input type="radio" id="sim_habilidades" name="habilidades_necessarias" value="Sim" required> Sim
        </div>
        <div class="resposta">
            <input type="radio" id="nao_habilidades" name="habilidades_necessarias" value="Não" required> Não
        </div>

        <label for="conhecimento_anterior">Você já teve algum conhecimento prévio sobre Inteligência Artificial antes de hoje?</label>
        <div class="resposta">
            <input type="radio" id="sim_previo" name="conhecimento_anterior" value="Sim" required> Sim
        </div>
        <div class="resposta">
            <input type="radio" id="nao_previo" name="conhecimento_anterior" value="Não" required> Não
        </div>

        <label for="outros_comentarios">Deixe seus comentários ou sugestões sobre o tema Inteligência Artificial:</label>
        <textarea id="outros_comentarios" name="outros_comentarios" rows="4"></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>
