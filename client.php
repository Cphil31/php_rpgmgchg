<?php 
require 'user.php';

class Client extends User{
	
	private $billAmount;
	private $cart=[];

	public function __construct($billAmount,$cart){
		parent::__construct($id,$name,$product);
		$this->billAmount = $this->billAmount + $product->getPrice();
		$this->cart=$cart;
	}

	public function getBillAmount (){}
	public function setBillAmount ($billAmount) {
		$this->setBillAmount=$billAmount;
	}
	public function getCart (){}

	public function setCart ($cart) {
		$this->setCart=$cart;
	}
	public function addProductToCart($name){
		array_push($this->name,$product);
	}

	public function buy($name){
		$this->name=$name;
		return $name;
	}
}
?>

