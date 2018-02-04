<?php 

require 'Banana.php';
require 'Apple.php';
require 'Orange.php';

use Dhaka\Apple\Fruit;
use Dhaka\Banana\Fruit as Banana;
use Dhaka\Orange\Fruit as Orange;

$fruit1 = new Orange();
$fruit2 = new Fruit();
$fruit3 = new Fruit();
echo $fruit1->name;

