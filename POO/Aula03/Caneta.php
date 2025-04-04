<?php 
//Criando a Classe
class Caneta {
    //Definindo seus Atributos(variaveis)
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    //Definindo seus Métodos(Funções)
    function rabiscar(){
        if($this->tampada){ // $this é uma sub-variavel com o valor do Objeto da Classe atual, permitindo o acesso a Atributos e Métodos da classe.
            echo "<p>Destampe primeiro...</p>";
            
        }else{
            echo "<p>Estou rabiscando...</p>";
        }
    }
    public function tampar(){
        if($this->tampada == false){
            $this->tampada = true;
        }
    }
    public function destampar(){
        if($this->tampada == true){
            $this->tampada = false;
        }
    } 

}