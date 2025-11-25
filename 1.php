<?php


    class Coche{
        private $marca;
        private $modelo;

        //getters y setters
        public function getMarca(){
            return $this->marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setMarca($brand){
            $this->marca = $brand;
        }

        public function setModelo($model){
            $this->modelo = $model;
        }

        //método
        public function mostrarInfo(){
            echo "Coche: " . $this->marca . $this->modelo;
        }

        //constructor
        function __construct($marca, $modelo){
            $this->marca = $marca;
            $this->modelo= $modelo;
        }

        //destructor
        function __destruct(){

        }
    }

    $coche1= new Coche("Peugeot ", "206 GTI. <br>");

    // cambiar valor de modelo por el construct:
    // $coche1->setModelo("Corolla Sport");
    // $coche1->getModelo();
    $coche1-> mostrarInfo();

/////////////////////////////////////////////////

    class CuentaBancaria{

        private $titular;
        private $saldo;

        public function __construct($titular, $saldo){
            $this->titular= $titular;
            $this->saldo= $saldo;
        }

        public function __destruct(){

        }

        public function getTitular(){
            return $this->titular;
        }

        public function getSaldo(){
            return $this->saldo;
        } 
        
        public function setTitular($titular){
            $this->titular= $titular;
        }

        public function setSaldo($saldo){
            $this->saldo= $saldo;
        }


        public function depositar($cantidad){
            $this->saldo+= $cantidad;
            echo "Depositado: $cantidad <br>";
        }

        public function retirar($cantidad){
            if ($cantidad <= $this->saldo) {
                $this->saldo-= $cantidad;
                echo "Retirado: $cantidad <br>";
            } else {
                echo "Dinero insuficiente <br>";
            }
            
        }
    }

    $cuenta1= new CuentaBancaria("Maria ", 500);
    $cuenta1->depositar(100);
    $cuenta1->retirar(200);
    echo $cuenta1-> getSaldo();


/////////////////////////////////////////////////

?>