<?php

include 'db.php';
$id = $_GET['id'];

$query = $link->query("SELECT * FROM client WHERE id=$id");
$client = $query->fetch_all(PDO::FETCH_NUM);
