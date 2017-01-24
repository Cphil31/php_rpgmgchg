<?php 
$Tab=require 'Products.php';
//var_dump($Tab);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td><h1>ID</h1></td>
			<td><h1>Value</h1></td>
			<td><h1>Price</h1></td>
			<td><h1>Origin</h1></td>
		</tr>
	</table>
	<?php 
	foreach ($Tab as $value) :?>
	<table>

		<td><h1><?= $value->getId() ?></h1></td>

		<td><h1><?= $value->getName() ?></h1></td>

		<td><h1><?= $value->getPrice().'€' ?></h1></td>

		<td><h1><?=(method_exists($value, 'getProductorName') ? $value->getProductorName() : null) ?></h1></td>

		<td><h1><?=(method_exists($value, 'getBrand') ? $value->getBrand() : null) ?></h1></td>


	</table>

	<?php 

	endforeach;
	?>

</body>
</html>