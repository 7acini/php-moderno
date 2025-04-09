<?php

class ContaBanco{
    public int $numConta;
    protected string $tipo;
    private string $dono;
    private float $saldo;
    private bool $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    public function getNumConta(): int{
        return $this->numConta;
    }
    public function setNumConta(int $numConta){
        $this->numConta = $numConta;
    }
    public function getTipo(): string{
        return $this->tipo;
    }
    public function setTipo(string $tipo){
        $this->tipo = $tipo;
    }
    public function getDono(): string{
        return $this->dono;
    }
    public function setDono(string $dono){
        $this->dono = $dono;
    }
    public function getSaldo(): float{
        return $this->saldo;
    }
    public function setSaldo(float $saldo){
        $this->saldo = $saldo;
    }
    public function getStatus(): bool{
        return $this->status;
    }
    public function setStatus(bool $status){
        $this->status = $status;
    }

    public function abrirConta(string $tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC"){
            $this->setSaldo(50);
        }
        elseif($tipo == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "Conta com dinheiro";
        }
        elseif($this->getSaldo() < 0) {
            echo "Conta em débito";
        }
        else {
            $this->setStatus(false);
        }
    }

    public function depositar(float $valor) {
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        }
        else{
            echo "Impossível depositar";
        }
    }
    public function sacar(float $valor) {
        if($this->getStatus() && $this->getSaldo() > $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
        }
        else{
            echo "Impossível sacar";
        }
    }

    public function pagarMensal(){
        if($this->getTipo() == "CC") {
            $valor = 12;
        }
        elseif($this->getTipo() == "CP") {
            $valor = 20;
        }
        if($this->getStatus() == true) {
            if($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            }
            else {
                echo "Saldo insuficiente";
            }
        }
        else {
            echo "Impossivel pagar";
        }
    }

}