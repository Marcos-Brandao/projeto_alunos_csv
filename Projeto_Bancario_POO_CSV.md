# Projeto Integrador - Sistema Bancário com POO e CSV

## Objetivo

Desenvolver um sistema bancário executado pelo terminal utilizando:

- Classes
- Objetos
- Encapsulamento
- Herança
- Polimorfismo
- Arquivos CSV
- CRUD
- Organização em múltiplos arquivos
- require_once

---

# Estrutura do Projeto

```text
projeto/
│
├── index.php
├── contas.csv
│
├── includes/
│   ├── Conta.php
│   ├── ContaCorrente.php
│   ├── ContaPoupanca.php
│   ├── ContaRepository.php
│   └── funcoes.php
```

---

# Persistência

Todos os dados deverão ser armazenados em:

```text
contas.csv
```

Exemplo:

```csv
id,titular,tipo,saldo
1,Marcos,corrente,1000
2,Ana,poupanca,500
```

---

# Classe Conta

A classe principal deverá possuir:

```php
private int $id;
private string $titular;
protected float $saldo;
```

Métodos obrigatórios:

```php
depositar()
sacar()
getSaldo()
getTitular()
getId()
```

---

# Herança

Criar:

```php
ContaCorrente
ContaPoupanca
```

Utilizando:

```php
extends
```

Visualmente:

```text
Conta
│
├── ContaCorrente
└── ContaPoupanca
```

---

# Polimorfismo

Cada conta deve sacar de forma diferente.

## Conta Corrente

Taxa fixa de R$ 5 por saque.

Exemplo:

```text
Saldo: 100
Saque: 20
Saldo Final: 75
```

## Conta Poupança

Não possui taxa.

Exemplo:

```text
Saldo: 100
Saque: 20
Saldo Final: 80
```

Sobrescreva o método:

```php
sacar()
```

nas classes filhas.

---

# Menu Principal

```text
1 - Criar conta
2 - Listar contas
3 - Depositar
4 - Sacar
5 - Consultar saldo
6 - Buscar conta
7 - Excluir conta
8 - Sair
```

---

# Funcionalidades

## Criar Conta

Solicitar:

```text
Nome do titular:
```

Tipo:

```text
1 - Corrente
2 - Poupança
```

Saldo inicial:

```text
Saldo:
```

Gerar ID automaticamente.

Salvar no CSV.

---

## Listar Contas

Exibir:

```text
ID: 1
Titular: Marcos
Tipo: Corrente
Saldo: 1000
```

---

## Depositar

Solicitar:

```text
ID da conta:
Valor:
```

Atualizar saldo.

Salvar novamente.

---

## Sacar

Solicitar:

```text
ID:
Valor:
```

Aplicar a regra conforme o tipo da conta.

Salvar novamente.

---

## Consultar Saldo

Solicitar:

```text
ID:
```

Exibir:

```text
Titular
Tipo
Saldo
```

---

## Buscar Conta

Permitir pesquisar pelo nome do titular.

Exemplo:

```text
Ana
Ana Clara
Ana Paula
```

---

## Excluir Conta

Solicitar:

```text
ID:
```

Remover do CSV.

---

# Classe Repository

Criar:

```php
ContaRepository
```

Responsável por:

```php
carregar()
salvar()
buscarPorId()
```

Nenhuma classe de conta deve acessar o CSV diretamente.

Toda persistência deve passar pelo Repository.

---

# Desafio Extra 1 - Histórico de Transações

Criar:

```text
transacoes.csv
```

Estrutura:

```csv
conta_id,tipo,valor,data
1,deposito,100,2026-07-17
1,saque,50,2026-07-17
```

Sempre que ocorrer:

- Depósito
- Saque

registrar no histórico.

Adicionar ao menu:

```text
9 - Ver Extrato
```

Exemplo:

```text
DEPÓSITO 100
SAQUE 50
DEPÓSITO 200
```

---

# Desafio Extra 2 - Transferência

Adicionar:

```text
10 - Transferir
```

Solicitar:

```text
Conta origem:
Conta destino:
Valor:
```

Regras:

- Não pode transferir para a própria conta
- Deve existir saldo suficiente
- Salvar no CSV
- Registrar no histórico

---

# Desafio Extra 3 - Ranking

Adicionar:

```text
11 - Top 5 maiores saldos
```

Exemplo:

```text
1º Marcos - 5000
2º Ana - 3200
3º João - 2900
```

---

# Requisitos Técnicos

- Utilizar orientação a objetos
- Utilizar encapsulamento
- Utilizar herança
- Utilizar polimorfismo
- Utilizar require_once
- Persistir dados em CSV
- Organizar o projeto em múltiplos arquivos
- Utilizar arrays para manipular os registros carregados

---

# Critérios de Avaliação

- Organização dos arquivos
- Legibilidade do código
- Uso correto de classes
- Uso correto de encapsulamento
- Uso correto de herança
- Uso correto de polimorfismo
- Funcionamento da persistência em CSV
- Funcionamento completo do CRUD
- Implementação dos desafios extras