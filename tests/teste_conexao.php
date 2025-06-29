<?php
require_once 'model/Conexao.php'; // Ajusta o caminho conforme a tua estrutura

try {
    $conexao = Conexao::getConexao();
    echo "✅ Conexão com o banco de dados estabelecida com sucesso!\n";
} catch (Exception $e) {
    echo "❌ Falha na conexão: " . $e->getMessage() . "\n";
}
