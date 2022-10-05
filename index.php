<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'classes/ATM.php';
require_once 'autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

    <title> ATM</title>
</head>
<body>
<h1>ATM - Private</h1>
<strong>composer dump-autoload</strong>
<?php

$atm = new ATM();
$atm->insertMoney(5000,20);
$atm ->insertMoney(130, 10);
$atm ->summary();




echo "<h2> Výpis - Honza </h2>";
$atm[1]->summary();
echo "<h2> Výpis - Pavel </h2>";
$computers[2]->summary();
echo "<h2> Výpis - Daniel </h2>";
$computers[3]->summary();
echo "<h2> Výpis - Martin </h2>";
$computers[4]->summary();
echo "<h2> Výpis - Filip </h2>";
$computers[5]->summary();