<?php

$students = array(
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
); // values affected
$sumAge = 0;

foreach ($students as $nameKey => $ageValue){
    echo "$nameKey : $ageValue" . PHP_EOL;

    
    $sumAge += $ageValue;
};
echo "La moyenne d'age est de" . " " . $sumAge / count($students) . " ans" . PHP_EOL;