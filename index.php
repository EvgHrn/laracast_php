<?php

require 'Task.php';

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos', 'Task');

var_dump($tasks);

require_once 'index.view.php';