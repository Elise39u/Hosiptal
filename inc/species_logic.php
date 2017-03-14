<?php

require_once ('db.php');

$query = $link->query('SELECT * FROM species');
$species = $query->fetch_all(PDO::FETCH_NUM);