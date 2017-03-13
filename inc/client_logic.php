<?php

require_once ('db.php');

$query = $link->query('SELECT * FROM client');
$clients = $query->fetch_all(PDO::FETCH_NUM);