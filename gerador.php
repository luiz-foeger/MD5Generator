<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gerador.css">
    <title>MD5 Generator</title>
</head>

<body>
    <section class="container">
        <h1>Gerador MD5</h1>
        <form action="gerador.php" method="POST">
            <label for="senha">Insira sua senha:</label>
            <input type="text" name="senha" id="senha">
            <input type="submit" value="Gerar" id="btnGerar">
        </form>
</body>
<script>
    function copiarTexto(elemento) {
        const texto = elemento.textContent;

        navigator.clipboard.writeText(texto).then(() => {

            alert("Texto copiado: " + texto);
        }).catch(err => {
            console.error('Erro ao copiar texto: ', err);
        });
    }
</script>

</html>

<?php

    echo '<div class="result">';
        $senha = @$_POST['senha'];
        echo '<p><strong>Senha: </strong>' . $senha . '</p>';

        $senhaMD5 = md5(string: $senha);
        echo '<span><strong>MD5 Hash:</strong><p id="hash" onclick="copiarTexto(this)">' . $senhaMD5 . '</p></span>';
    echo '</div>';

    echo '<section class="MD5">
            <h1>O que é MD5?</h1>
            <p>O MD5 (Message-Digest Algorithm 5) é um algoritmo de hash que converte dados de entrada em um valor fixo de 128 bits, geralmente representado como uma sequência hexadecimal de 32 caracteres.</p>
            <br>
            <p>Como o algoritmo de hash MD5 sempre produz a mesma saída para a mesma entrada fornecida, os hashes MD5 são usados para garantir a integridade dos dados dos arquivos, comumente usados com sequências menores ao armazenar senhas, números de cartão de crédito ou outros dados confidenciais em bancos de dados.</p>
            <br>
            <p>Um hash MD5 NÃO é criptografia. É simplesmente uma impressão digital da entrada fornecida. No entanto, é uma transação unidirecional e, como tal, é quase impossível fazer engenharia reversa de um hash MD5 para recuperar a sequência original.</p>
        </section>';
    echo '</section>';

?>