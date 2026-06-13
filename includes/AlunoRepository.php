<?php
require_once 'Aluno.php';

class AlunoRepository{
    private string $arquivo = 'alunos.csv';

    public function carregar(){
        $alunos = [];

        if(!file_exists($this->arquivo)){
            return $alunos;
        }

        $fp = fopen($this->arquivo,'r');
        fgetcsv($fp);

        while(($linha = fgetcsv($fp)) !== false){
            $alunos[] = new Aluno((int)$linha[0], $linha[1], (float)$linha[2]);
        }

        fclose($fp);
        return $alunos;
    }

    public function salvar(array $alunos){
        $fp = fopen($this->arquivo,'w');
        fputcsv($fp,['id','nome','nota']);

        foreach($alunos as $aluno){
            fputcsv($fp,[$aluno->id,$aluno->nome,$aluno->nota]);
        }

        fclose($fp);
    }
}
