<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/patient_logic.php');
require_once ('../inc/species_logic.php');

$pagetitle = 'Hosiptal';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$species = $_POST['species'];
	$status = $_POST['status'];
	$gender = $_POST['gender'];

	$query = $link->query("INSERT INTO patient(name, species, status, gender) VALUES ('$name', '$species', '$status', '$gender')");
	echo "Succesfull added";
}

$smarty->assign('pagetitle', $pagetitle);
$smarty->assign('species', $species);
$smarty->display('../tpl/create.html.tpl');