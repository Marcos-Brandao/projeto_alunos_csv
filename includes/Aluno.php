<?php
class Aluno{
    
    public int $id;
    public string $nome;
    public float $nota;

    public function __construct(int $id, string $nome, float $nota){
        $this->id = $id;
        $this->nome = $nome;
        $this->nota = $nota;
    }
}
