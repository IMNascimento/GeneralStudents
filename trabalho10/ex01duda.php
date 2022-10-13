<?php

 echo "<p> EX-01 </p>";

 class Invoice {
	public $num;
	public $desc;
	public int $quant;
	public  $preco;
	
	function Invoice (int $iniciaQuant, $valor){
		
		if( $iniciaQuant > 0){
			$quant = $iniciaQuant;
		} else {
			$quant = 0;
		}
		
		if($valor > 0.0){
			$preco  = $valor;
		} else {
			$preco = 0.0;
		}
		
	}
	
	function setQuant(int $quantid){
		$quant = $quantid;
	}
	
function  setNum(String $numero){
		$num = $numero;
	}
function setDesc(String $descricao){
		$desc = $descricao;
	}
function setPreco( $valor){
		$preco = $valor;
	}
	
	function getQuant(){
		return $this->quant;
	}
	function getNum(){
		return $this->num;
	}
	function getDescricao(){
		return $this->desc;
	}
	function getPreco(){
		return $this->preco;
	}
	
	function Getinvoicequant(){
		
		 $total = $this->quant * $this->preco;
		
		return $total;
		
	}

}

?>