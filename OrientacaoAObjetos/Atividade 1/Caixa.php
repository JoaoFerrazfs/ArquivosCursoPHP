<?php

declare(strict_types=1);

class VendaNoCaixa
{
    private $data;          /** *@var string */
    private $produto;       /** *@var string */
    private $quantidade;    /** *@var string */
    private $valorTotal;    /** *@var float */

    public function __construct(

    string $data,
    string $produto,
    string $quantidade,
    string $valorTotal
    
    )  {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
        
    }

    public function exibirData() :string   
    {
        return 'Data da compra: ' .$this->data;

    }

    public function exibirProduto() :string   
    {
        return 'Produto Comprado: ' .$this->produto;
        }

    public function exibirQuantidade() :string   
    {
        return 'Quantidade comprada: ' .$this->quantidade;

    }

    public function exibirValorTotal() :string   
    {
        return 'Valor total da compra: ' .$this->valorTotal;

    }








}


$vendendo = new VendaNoCaixa('26/06/2021','Nescau','5','20');


echo $vendendo->exibirData();       echo '<br>'; echo '<br>';

echo $vendendo->exibirProduto();        echo '<br>'; echo '<br>';

echo $vendendo->exibirQuantidade();     echo '<br>'; echo '<br>';

echo $vendendo->exibirValorTotal();     echo '<br>'; echo '<br>';


