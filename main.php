<?php


namespace app;

use app\Models\Cow;
use app\Models\Chicken;
include 'Farm.php';
include 'Models/Cow.php';
include 'Models/Chicken.php';

$farm = new Farm();

$farm->addAnimals(new Cow, 10);
$farm->addAnimals(new Chicken, 20);
$farm->printAnimalsCounts();

$farm->collectProducts(7);
$farm->printTotalProducts();

$farm->addAnimals(new Cow);
$farm->addAnimals(new Chicken, 5);
$farm->printAnimalsCounts();

$farm->collectProducts(7);
$farm->printTotalProducts();