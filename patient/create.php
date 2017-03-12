<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/patient_logic.php');

$pagetitle = 'Hosiptal';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$species = $_POST['species'];
	$status = $_POST['status'];

	$query = $link->query("INSERT INTO patient(name, species, status) VALUES ('$name', '$species', '$status')");
	echo "Succesfull added";
}

$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/create.html.tpl');