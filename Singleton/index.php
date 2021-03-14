<?php
require_once __DIR__. '/Shingleton.php';

$ins1 = SingletonSample::getSingletonInstance();
$ins2 = SingletonSample::getSingletonInstance();

echo "singletonId is {$ins1->getID()} <br>";
echo $ins1->getId() === $ins2->getId()?'true':'false'. "<br>";

echo '同一インスタンスの検証'.'<br>';
echo $ins1 === $ins2?'true':'false';
clone $ins2;
