<?php
require_once 'ListDisplay.php';
require_once 'TableDisplay.php';

$data = [
    'phpの本' => 2900,
    'javascriptの本' => 1800,
    'scalaの本' => 3999,
];

$list = new ListDisplay($data);
$table = new TableDisplay($data);

$list->display();
echo '<br>';
$table->display();