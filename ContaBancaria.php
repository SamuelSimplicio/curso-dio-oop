<?php

declare(strict_types=1);

class ContaBancaria{

    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
        ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }
    public function obterSaldo(){
        return 'Seu saldo atual e: '."\t". $this->saldo;
    }
    public function depositar($valor){
        $this->saldo+=$valor;
        return 'Valor de '. $valor . "depositado com Sucesso!!";
    }
    public function sacar($valor){
        $this->saldo-=$valor;
    }
    
}

$conta = new ContaBancaria(
    'Banco do Brasil',      //banco
    'Samuel Simplicio',     //nomeTitular
    '123456',               //agencia
    '654321-0',             //numeroConta
    0                       //saldo
);


echo "\n";
echo $conta->obterSaldo(); // return 0
echo "\n";
echo $conta->depositar(3000);
echo "\n";
echo $conta->obterSaldo(); // +3000
echo "\n";
$conta->sacar(1200); // -1200  
echo "\n";
echo $conta->obterSaldo(); // +1800
echo "\n";

