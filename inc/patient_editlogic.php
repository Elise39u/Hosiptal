<?php

include 'db.php';
$id = $_GET['id'];

$query = $link->query("SELECT * FROM patient WHERE id=$id");
$patient = $query->fetch_all(PDO::FETCH_NUM);