<?php

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9,);


foreach ($array as $val) {
	if ($val == 3) {
		echo 'Gelijk aan 3!' . '<br>';
	} else if ($val == 5) {
		echo "Gelijk aan 5!" . '<br>';

	} else if ($val == 7) {
		echo "Gelijk aan 7!" . '<br>';

	} else if ($val == 9) {
		echo "Gelijk aan 9!" . '<br>' . '<br>';

	}
}



foreach($array as $val) {
	switch($val) {
		case 3:
			echo "Gelijk aan 3!" . '<br>';
			break;
		case 5:
			echo "Gelijk aan 5!" . '<br>';
			break;

		case 7:
			echo "Gelijk aan 7!" . '<br>';
			break;

		case 9:
			echo "Gelijk aan 9!" . '<br>';
			break;
	}
}
?>