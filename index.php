<?php
require_once 'includes/Aluno.php';
require_once 'includes/AlunoRepository.php';
require_once 'includes/funcoes.php';

$repo = new AlunoRepository();
$alunos = $repo->carregar();

while(true){

    echo "\n1-Cadastrar\n2-Listar\n3-Editar\n4-Excluir\n5-Buscar\n6-Sair\n";

    $opcao = readline('Escolha: ');

    switch($opcao){
        case 1: 
            cadastrarAluno($alunos,$repo);
         break;
        case 2: 
            listarAlunos($alunos);
         break;
        case 3: 
            editarAluno($alunos,$repo);
         break;
        case 4: 
            excluirAluno($alunos,$repo);
         break;
        case 5: 
            buscarAluno($alunos);
         break;
        case 6: 
            exit('Encerrado!'.PHP_EOL);
        default: 
        echo 'Opção inválida!'.PHP_EOL;
    }
}
