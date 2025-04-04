<?php 
//Criando a Classe
class Caneta {
    //Definindo seus Atributos(variaveis)
    public $modelo;
    public $cor;
    private $ponta;

    public function __construct($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getPonta() {
        return $this->ponta;
    }
    public function setModelo(string $modelo) {
        $this->modelo = $modelo;
    }
    public function setCor(string $cor) {
        $this->cor = $cor;
    }
    public function setPonta(float $ponta) {
        $this->ponta = $ponta;
    }
}