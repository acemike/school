<?php

$string1  = 'dit is de eerste zin, die maar een hoofdletter krijgt.';
$string2  = 'dit is de tweede zin, die alleen maar hoofdletter krijgt.';
$string3  = 'dit wordt een url met streepjes enzo.';

$capStr = ucfirst($string1);
$allCapStr  = strtoupper($string2);
$urlStr = str_replace(' ', '-', $string3);

echo $string1 . '<br>';
echo $capStr  . '<br>';
echo '<br>';
echo $string2 . '<br>';
echo $allCapStr . '<br>';
echo '<br>';
echo $string3 . '<br>';
echo $urlStr  . '<br>';

 ?>
