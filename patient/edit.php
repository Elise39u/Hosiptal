<?php
require_once ('../inc/loadsmarty.php');
require_once ('../inc/db.php');
require_once ('../inc/patient_editlogic.php');
require_once ('../inc/species_logic.php');

$pagetitle = 'Hosiptal';

if (isset($_POST['submit'])) {
	echo " Patient has been updated";
    var_dump($_POST);
	$name = $_POST['name'];
	$species = $_POST['species'];
	$status = $_POST['status'];
	if (isset($_POST['male'])) {
		$gender = $_POST['male'];
	} elseif (isset($_POST['female'])) {
		$gender = $_POST['female'];
	} else {
		$gender = $_POST['unkown'];
	}
    $update = $link->query("UPDATE patient SET name='$name', species='$species', status='$status', gender='$gender' WHERE id=$id");
}

$smarty->assign('id', $id);
$smarty->assign('files', $patient);
$smarty->assign('species', $species);
$smarty->assign('pagetitle', $pagetitle);
$smarty->display('../tpl/edit.html.tpl');