<?php

class ContaBanco {
	//Atributos
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	///Métodos
	function __construct(){
		$this->setSaldo(0); 
		$this->setStatus(false);
		echo "<p>Conta criada com sucesso!</p><br>";
		
	}

//METODOS ESPECIAIS
	public function setNumConta($numConta){
		$this->numConta =$numConta;
	}


	public function getNumConta(){
		return $this->numConta;
	}

	public function setTipo($tipo){
		$this->tipo= $tipo;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setDono($dono){
		$this->dono = $dono;
	}

	public function getDono(){
		return $this->dono;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public  function getStatus(){
		return $this->status;
	}

//metodos normais

	public function abrirConta($t){
		$this->setTipo($t);
		$this->setStatus(true);

		if ($t == "CC" ){

			$this->setSaldo(50);

		} else if ($t == "CP"){

			$this->setSaldo(150);
		}
	}

	public function fecharConta(){

		if ($this->getSaldo() > 0 ){

			echo "<p>Conta com dinheiro! não posso fechá-la!</p>";

		} else if ($this->getSaldo() < 0) {

			echo "<p>Conta em débito</p>";
		}
		else{
			$this->setStatus(false);
		}
	}

	public function depositar($v){

			if($this->getStatus(true)){

				$this->setSaldo($this->getSaldo()+ $v);
				//$this->saldo = $this->saldo + v;
			}
			else {
				echo "<p>Impossível depositar</p>";
			}
	}

	public function sacar($v){
		if($this->getStatus()){

			if ($this->getSaldo() > $v) {
				//$this->saldo = $this->saldo - $v;
				$this->setSaldo($this->getSaldo() - $v);
				echo "<p>Saque autorizado na conta !!</p><br>";

			}
			else{
				echo "<p>Impossível sacar, saldo insuficiente </p>";
			}
		}
		else{
			echo "<p> Não posso sacar de uma conta fechada </p>";
		}

	}

	public function pagarMensal(){

		if ($this->getTipo() == "CC") {
			$v = 12;
		}
		else if ($this->getTipo() == "CP" ) {
			$v = 20;
				
		}

		if($this->getStatus()){
			$this->setSald($this->getSaldo() - $v);

		}
		else{
			echo "<p>Problemas com a conta, não posso cobrar </p>";
		}

	}


}


?>
