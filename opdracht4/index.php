<?php
$price = '65.81';
$vat = '1,21';
$priceInc = $price * $vat;
$round = round($priceInc, 2);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<p>Price: <?php echo $price; ?></p>
	<p>Vat: <?php echo $vat; ?></p>
	<p>Price inc: <?php echo $priceInc; ?></p>
	<p>Round: <?php echo $round; ?> </p>

</body>
</html>