<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/species_logic.php');

$pagetitle = 'Hosiptal';

if (isset($_POST['submit'])) {
	$sort = $_POST['sort'];

	$query = $link->query("INSERT INTO species(sort) VALUES ('$sort')");
	echo "Succesfull added";
	var_dump("INSERT INTO species(sort) VALUES ('$sort')");
}

$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/species_create.html.tpl');