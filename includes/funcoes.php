<?php

function cadastrarAluno(array &$alunos, AlunoRepository $repo){
    $nome = readline('Nome: ');
    $nota = (float) readline('Nota: ');

    $id = empty($alunos) ? 1 : max(array_map(fn($a)=>$a->id,$alunos)) + 1;

    $alunos[] = new Aluno($id,$nome,$nota);

    $repo->salvar($alunos);

    echo "Aluno cadastrado!\n";
}

function listarAlunos(array $alunos){
    foreach($alunos as $aluno){
        echo "\nID: {$aluno->id}\n";
        echo "Nome: {$aluno->nome}\n";
        echo "Nota: {$aluno->nota}\n";
    }
}

function editarAluno(array &$alunos, AlunoRepository $repo){
    $id = (int) readline('ID: ');

    foreach($alunos as $aluno){
        if($aluno->id === $id){
            $aluno->nome = readline('Novo nome: ');
            $aluno->nota = (float) readline('Nova nota: ');
            $repo->salvar($alunos);
            echo "Atualizado!\n";
            return;
        }
    }

    echo "Aluno não encontrado.\n";
}

function excluirAluno(array &$alunos, AlunoRepository $repo){
    $id = (int) readline('ID: ');

    foreach($alunos as $i => $aluno){
        if($aluno->id === $id){
            unset($alunos[$i]);
            $alunos = array_values($alunos);
            $repo->salvar($alunos);
            echo "Removido!\n";
            return;
        }
    }

    echo "Aluno não encontrado.\n";
}

function buscarAluno(array $alunos){
    $nome = readline('Buscar: ');

    foreach($alunos as $aluno){
        if(stripos($aluno->nome,$nome) !== false){
            echo "{$aluno->id} - {$aluno->nome} - {$aluno->nota}\n";
        }
    }
}
