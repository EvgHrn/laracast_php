<?php



$tasks = $query->selectAll('todos');

//var_dump($tasks);

require_once 'view/index.view.php';