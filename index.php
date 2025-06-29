[Index.php]: Arquivo principal que faz o roteamento (ex: ?acao=listar, ?acao=adicionar, etc.)
<?php
// Incluindo os arquivos necessários
require_once 'model/Tarefa.php';    
require_once 'view/listar.php';
require_once 'view/adicionar.php';
// Verifica a ação solicitada
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
} else {
    $acao = 'listar'; // Ação padrão
}
// Roteamento simples
switch ($acao) {
    case 'listar':
        $listar = new listar();
        $listar->listar_tarefas();
        break;
    case 'adicionar':
        $adicionar = new adicionar();
        $adicionar->mostrar_formulario();
        break;
    default:
        // Ação não reconhecida
        break;
}
// Exemplo de uso da classe Tarefa
$tarefa = new Tarefa(1, 'Estudar PHP MVC');
$tarefa->adicionarTarefa('Aprender sobre MVC');
$tarefa->listarTarefas();  
$tarefa->removerTarefa(1);
// Exemplo de uso da classe listar
$listar = new listar();
$listar->listar_tarefas();