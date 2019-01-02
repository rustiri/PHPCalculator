<?php

include 'includes/calc.inc.php';

$num1 = $_POST['first_number'];
$num2 = $_POST['second_number'];
$calc = $_POST['operation'];


$calculator = new Calculator($num1,$num2,$calc);
echo $calculator -> calcMethod();
