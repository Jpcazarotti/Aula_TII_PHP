<?php
class ProdutoFisico
{
    public $nome;
    public $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function calcularDesconto()
    {
        return $this->preco * 0.1;
    }
}

class ProdutoDigital extends ProdutoFisico
{
    private $tamanhoArquivo;

    public function __construct($nome, $preco, $tamanhoArquivo)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->tamanhoArquivo = $tamanhoArquivo;
    }

    public function getTamanhoArquivo() {
        echo "Tamanho do Arquivo: $this->tamanhoArquivo";
    }

    public function calcularDesconto()
    {
        return $this->preco * 0.2;
    }
}

$produtoFisico = new ProdutoFisico("Notebook", 2500);

echo "Produto Físico: " . $produtoFisico->getNome();
echo "<br>";
echo "Preço: " . $produtoFisico->getPreco();
echo "<br>";
echo "Desconto: " . $produtoFisico->calcularDesconto();
echo "<br>";
echo "Preço Final: " . ($produtoFisico->getPreco() - $produtoFisico->calcularDesconto());
echo "<br>";
echo "<br>";

$produtoDigital = new ProdutoDigital("E-book", 20, "10Mb");

echo "Produto Digital: " . $produtoDigital->getNome();
echo "<br>";
echo "Preço: " . $produtoDigital->getPreco();
echo "<br>";
echo "Desconto: " . $produtoDigital->calcularDesconto();
echo "<br>";
echo "Preço Final: " . ($produtoDigital->getPreco() - $produtoDigital->calcularDesconto());
echo "<br>";
echo "<br>";