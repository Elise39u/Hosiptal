<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/patient_logic.php');

$pagetitle = 'Hosiptal';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$species = $_POST['species'];
	$status = $_POST['status'];
	$gender = $_POST['gender'];
	var_dump($_POST);

	$query = $link->query("INSERT INTO patient(name, species, status, gender) VALUES ('$name', '$species', '$status', '$gender')");
	echo "Succesfull added";
}

$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/create.html.tpl');