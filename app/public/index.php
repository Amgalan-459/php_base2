<?php

print_smt("first task: ");
function print_smt($a) {
    echo $a ;
    echo PHP_EOL;
}

$var = 100;
print_smt($var);

$var = sqrt($var);
print_smt($var);

$var = (int)$var;
print_smt(gettype($var));

print_smt(var_dump($var));


print_smt("second task: ");

$x = 10;
$y = 15;
$z = 2;

print_smt(sqrt($x ** 2 + $y ** 2 + $z ** 2));


print_smt('third task: ');
$strPoly = "abba";

$flag = true;
for( $i = 0; $i < strlen($strPoly) / 2; $i++ ) {
    if ( $strPoly[$i] != $strPoly[$i - 1]) {
        $flag = false;
        break;
    }
}

if ($flag)
    print_smt("$strPoly is polyndrom");
else
print_smt("$strPoly is not polyndrom");


print_smt("fourth task: ");
$array = [];

function multFunc($num) : array {
    $arr = [];
    for ($i = 1; $i <= 10; $i++) {
        array_push($arr, $num * $i);
    }
    return $arr;
}

$array =  multFunc(4);

print_smt("array: ");
foreach ($array as $value) {
    print_smt($value);
}

