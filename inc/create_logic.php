<?php

require_once ('inc/db.php');

$query = $link->query('SELECT * FROM patient');
$patients = $query->fetch_all(PDO::FETCH_NUM);