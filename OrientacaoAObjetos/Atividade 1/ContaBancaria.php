<?php

declare(strict_types=1);

class ContaBancaria 

{

    //public - private -protected

    private $banco;         /** *@var string */
    private $nomeTitular;   /** *@var string */
    private $numeroAgencia; /** *@var string */
    private $numeroConta;   /** *@var string */
    private $saldo;         /** *@var float */


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

    public function obterSaldo() :string   
    {
        return 'Seu saldo atual é: R$ '.$this->saldo ;        
    }

    public function depositar($valor) :string   
    {
        $this->saldo += $valor;
        return 'Deposito de R$ ' .$valor .' realizado';
        
    }

    public function sacar(float $valor) :string   
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' .$valor .' realizado';
        
    }

}

$conta = new ContaBancaria(
    'Banco do Brasil',//banco
    'João Pedro Ferraz',//nomeTitutal
    '5265',//numeroAgencia
    '54252-120',//numeroConta
     0//saldo
);


echo $conta->obterSaldo();
echo "<br>";
echo $conta->depositar(300.00);

echo "<br>";
echo "<br>";

echo $conta->obterSaldo();

echo "<br>";
echo "<br>";

echo $conta->sacar(250.00);

echo "<br>";

echo $conta->obterSaldo();




