<?php
// Caminho para o arquivo de texto que armazenará o número de visualizações
$arquivo = 'contador.txt';

// Verifica se o arquivo já existe
if (file_exists($arquivo)) {
    // Lê o conteúdo do arquivo e incrementa a contagem
    $contador = file_get_contents($arquivo);

    // Verifica se o conteúdo do arquivo é um número válido
    if (!is_numeric($contador)) {
        $contador = 0; // Se não for numérico, reinicia o contador
    } else {
        $contador++; // Incrementa o contador
    }
} else {
    // Se o arquivo não existir, cria e inicializa o contador com 1
    $contador = 1;
}

// Salva a nova contagem de visualizações de volta no arquivo
file_put_contents($arquivo, $contador);

// Não exibe o contador na página
?>
