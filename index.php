<?php

$db = require 'core/bootstrap.php';


$tasks = $db->selectedAll($table);
