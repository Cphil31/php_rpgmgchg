<?php 

class Product{
	private $id;
	private $name;
	private $price;
	
	public function __construct($id,$name,$price){
		$this->setId($id);
		$this->setName($name);
		$this->setPrice($price);	
	}
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id= $id;
	}

	public function getName(){
		return $this->name;
	}

	public function getCart (){

	}
	public function setName($name){
		$this->name=$name;
	}

	public function getPrice(){
		return $this->price;
	}
	public function setPrice($price){
		$this->price=$price;
	}

}

?>
