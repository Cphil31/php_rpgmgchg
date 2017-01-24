<?php 
require_once('product.php') ;

class Vegetable extends Product {

	private $productorName;
	private $expiresAt;

	public function __construct($id,$name,$price,$productorName,$expiresAt){
		parent::__construct($id,$name,$price);
		$this->setProductorName($productorName);
		$this->setExpiresAt($expiresAt);

	}
	public function getProductorName(){
		return $this->productorName;
	}
	public function setProductorName($productorName){
		$this->productorName= $productorName;
	}
	public function getExpiresAt(){
		return $this->expiresAt;
	}
	public function setExpiresAt($expiresAt){
		$this->expiresAt= $expiresAt;
	}
}
?>