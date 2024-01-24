<?php
include './Plants.php';

$plants = array();

$plant1 = new Plant();
$plant2 = new Plant();

$plant3 = new Plant('Succulent', 'Sucus', false, 'World wide', 0.1, false);
$plant4 = new Plant('Tulip', 'Gesneriana', true, 'Europe', 0.4, false);

$plants[] = $plant1;
$plants[] = $plant2;
$plants[] = $plant3;
$plants[] = $plant4;

foreach ($plants as $plant) {
    echo $plant . "<br>";
}

?>

