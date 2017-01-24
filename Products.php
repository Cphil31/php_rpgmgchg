<?php 

require_once ('Cloth.php');
require_once ('vegetable.php');

// Class Products extends Cloth {

// public function __construct($name,$brand){
// 	parent::__construct($id,$name,$price,$productorName,$expiresAt,$brand);

// }
// }


$Cloth1= new Cloth('1','T-shirt','10','nouke');
$Cloth2= new Cloth('2','short','7','Add');
$Legume1= new Vegetable('3','Carotte','1','Espagne','12/10/12');
$Legume2= new Vegetable('4','Poirreau','1','France','12/11/12');
$Legume3= new Vegetable('5','Oignon','1','Italie','12/12/12');

$array=[$Cloth1,$Cloth2,$Legume1,$Legume2,$Legume3];
return $array;

