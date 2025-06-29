<?php

class Tarefa{

    // Propriedades
    private $id;
    private $descricao;

    // Construtor
    public function __construct($id, $descricao){
        $this->id = $id;
        $this->descricao = $descricao;
    }

    // Métodos
    function listarTarefas(){
        // Lógica para listar tarefas
    }

    function adicionarTarefa($descricao){
        // Lógica para adicionar tarefa
    }

    function removerTarefa($id){
        // Lógica para remover tarefa
    }
}